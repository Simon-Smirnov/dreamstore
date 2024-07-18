<?php

class ControllerCheckoutOrderCart extends Controller
{
    public function index()
    {

        $this->load->language('checkout/order_cart');

        if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
            if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
                $data['error_warning'] = $this->language->get('error_stock');
            } elseif (isset($this->session->data['error'])) {
                $data['error_warning'] = $this->session->data['error'];

                unset($this->session->data['error']);
            } else {
                $data['error_warning'] = '';
            }

            if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
                $data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));
            } else {
                $data['attention'] = '';
            }

            if (isset($this->session->data['success'])) {
                $data['success'] = $this->session->data['success'];

                unset($this->session->data['success']);
            } else {
                $data['success'] = '';
            }

            if ($this->config->get('config_cart_weight')) {
                $data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
            } else {
                $data['weight'] = '';
            }

            $this->load->model('tool/image');
            $this->load->model('tool/upload');

            if (isset($this->session->data['agree']) && $this->session->data['agree'] != '') {
                $data['agree'] = $this->session->data['agree'];
            } else {
                $data['agree'] = '';
            }

            $data['products'] = array();

            $products = $this->cart->getProducts();

            foreach ($products as $product) {
                $product_total = 0;

                foreach ($products as $product_2) {
                    if ($product_2['product_id'] == $product['product_id']) {
                        $product_total += $product_2['quantity'];
                    }
                }

                if ($product['minimum'] > $product_total) {
                    $data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
                }

                if ($product['image']) {
                    $image = [
                        'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                    ];
                } else {
                    $image[] = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
                }

                $option_data = array();

                foreach ($product['option'] as $option) {
                    if ($option['type'] != 'file') {
                        $value = $option['value'];
                    } else {
                        $upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

                        if ($upload_info) {
                            $value = $upload_info['name'];
                        } else {
                            $value = '';
                        }
                    }

                    $option_data[] = array(
                        'name' => $option['name'],
                        'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
                    );
                }

                // Display prices
                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $unit_price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));

                    $price = $this->currency->format($unit_price, $this->session->data['currency']);
                    $total = $this->currency->format($unit_price * $product['quantity'], $this->session->data['currency']);
                } else {
                    $price = false;
                    $total = false;
                }

                if (($this->customer->isLogged() || !$this->config->get('config_customer_price')) && $product['price'] != $product['price_without_special']) {
                    $unit_price_without_special = $this->tax->calculate($product['price_without_special'], $product['tax_class_id'], $this->config->get('config_tax'));

                    $price_without_special = $this->currency->format($unit_price_without_special, $this->session->data['currency']);
                    $total_without_special = $this->currency->format($unit_price_without_special * $product['quantity'], $this->session->data['currency']);
                } else {
                    $price_without_special = false;
                    $total_without_special = false;
                }

                $data['products'][] = array(
                    'cart_id' => $product['cart_id'],
                    'product_id' => $product['product_id'],
                    'thumb' => $image,
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'quantity' => $product['quantity'],
                    'stock' => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
                    'reward' => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
                    'price' => $price,
                    'total' => $total,
                    'price_without_special' => $price_without_special,
                    'total_without_special' => $total_without_special,
                    'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
                );
            }

            $totals = $this->load->controller('extension/total/total');
            $data['totals'] = $totals;

            $data['total_products'] = $this->currency->format($this->cart->getSubTotal(), $this->session->data['currency']);
            $data['total_discounts'] = $this->currency->format($this->cart->getSubTotalDiscounts(), $this->session->data['currency']);
            $data['total_rewards'] = $this->cart->getTotalRewards();
            $data['logged'] = $this->customer->isLogged();

            // Display prices
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $sort_order = array();

                $results = $this->model_setting_extension->getExtensions('total');

                foreach ($results as $key => $value) {
                    $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
                }

                array_multisort($sort_order, SORT_ASC, $results);

                foreach ($results as $result) {
                    if ($this->config->get('total_' . $result['code'] . '_status')) {
                        $this->load->model('extension/total/' . $result['code']);

                        // We have to put the totals in an array so that they pass by reference.
                        $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                    }
                }

                $sort_order = array();

                foreach ($totals as $key => $value) {
                    $sort_order[$key] = $value['sort_order'];
                }

                array_multisort($sort_order, SORT_ASC, $totals);
            }

            //$this->response->setOutput($this->load->view('checkout/order_cart', $data));
            return $this->load->view('checkout/order_cart', $data);
        }
    }

    public function remove()
    {
        $this->load->language('checkout/cart');

        $json = array();

        // Remove
        if (isset($this->request->post['key'])) {

            $this->cart->remove($this->request->post['key']);

            unset($this->session->data['vouchers'][$this->request->post['key']]);

            $json['success'] = $this->language->get('text_remove');

            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['payment_methods']);
            unset($this->session->data['reward']);

            // Totals
            $this->load->model('setting/extension');

            $totals = array();
            $taxes = $this->cart->getTaxes();
            $total = 0;

            // Because __call can not keep var references so we put them into an array.
            $total_data = array(
                'totals' => &$totals,
                'taxes' => &$taxes,
                'total' => &$total
            );

            // Display prices
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $sort_order = array();

                $results = $this->model_setting_extension->getExtensions('total');

                foreach ($results as $key => $value) {
                    $sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
                }

                array_multisort($sort_order, SORT_ASC, $results);

                foreach ($results as $result) {
                    if ($this->config->get('total_' . $result['code'] . '_status')) {
                        $this->load->model('extension/total/' . $result['code']);

                        // We have to put the totals in an array so that they pass by reference.
                        $this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
                    }
                }

                $sort_order = array();

                foreach ($totals as $key => $value) {
                    $sort_order[$key] = $value['sort_order'];
                }

                array_multisort($sort_order, SORT_ASC, $totals);
            }

            $json['total'] = sprintf($this->language->get('text_items'), $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0), $this->currency->format($total, $this->session->data['currency']));
            $json['success'] = 'Товар удален из корзины';
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function getQuantity()
    {
        $json = array();
        $json['quantity'] = $this->cart->countProducts();

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
