<?php

class ControllerCommonCart extends Controller
{
    public function index()
    {
        $this->load->language('common/cart');

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

        $data['text_items'] = sprintf($this->language->get('text_items'), $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0), $this->currency->format($total, $this->session->data['currency']));

        $this->load->model('tool/image');
        $this->load->model('tool/upload');

        $data['products'] = array();

        foreach ($this->cart->getProducts() as $product) {
            if ($product['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
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
                    'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value),
                    'type' => $option['type']
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
                'thumb' => $image,
                'name' => $product['name'],
                'model' => $product['model'],
                'option' => $option_data,
                'recurring' => ($product['recurring'] ? $product['recurring']['name'] : ''),
                'quantity' => $product['quantity'],
                'price' => $price,
                'total' => $total,
                'price_without_special' => $price_without_special,
                'total_without_special' => $total_without_special,
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        $data['total_products'] = $this->currency->format($this->cart->getSubTotal(), $this->session->data['currency']);
        // Gift Voucher
        $data['vouchers'] = array();

        if (!empty($this->session->data['vouchers'])) {
            foreach ($this->session->data['vouchers'] as $key => $voucher) {
                $data['vouchers'][] = array(
                    'key' => $key,
                    'description' => $voucher['description'],
                    'amount' => $this->currency->format($voucher['amount'], $this->session->data['currency'])
                );
            }
        }

        $data['totals'] = array();

        foreach ($totals as $total) {
            $data['totals'][] = array(
                'title' => $total['title'],
                'text' => $this->currency->format($total['value'], $this->session->data['currency']),
            );
        }

        $data['cart'] = $this->url->link('checkout/cart');
        $data['checkout'] = $this->url->link('checkout/checkout', '', true);

        return $this->load->view('common/cart', $data);
    }

    public function info()
    {
        $this->response->setOutput($this->index());
    }
}