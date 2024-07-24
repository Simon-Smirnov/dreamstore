<?php

class ControllerCheckoutCheckout extends Controller
{
    public function index($update = false, $errors = [])
    {

        //echo "<pre>";
        //var_dump($this->session->data['phone']);
        //echo "</pre>";

        // Validate cart has products and has stock.
        if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
            $this->response->redirect($this->url->link('checkout/cart'));
        }

        $this->load->language('checkout/checkout');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_cart'),
            'href' => $this->url->link('checkout/cart')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('checkout/checkout', '', true)
        );

        # Способы доставки
        $this->setShippingMethods();
        $data['shipping_methods'] = $this->session->data['shipping_methods'];
        $data['shipping_method'] = $this->session->data['shipping_method'];
        $data['shipping_type'] = $this->session->data['shipping_type'];

        echo "<pre>";
        var_dump($data['shipping_methods']);
        echo "</pre>";

        # Способы оплаты
        $this->setPaymentMethods();
        $data['payment_methods'] = $this->session->data['payment_methods'];
        $data['payment_method'] = $this->session->data['payment_method'];

        # Текстовые поля
        //if (!empty($this->session->data['checkout_fields'])) {
        //    $data['fields'] = $this->session->data['checkout_fields'];
        //} else if ($this->customer->isLogged()) {
        //    $data['fields'] = [
        //        'name' => $this->customer->getFirstName(),
        //        //'phone' => $this->customer->getTelephone(),
        //        'email' => $this->customer->getEmail()
        //    ];
        //}

        $data['points'] = false;
        if ($this->customer->isLogged()) {
            $data['fields'] = [
                'name' => $this->customer->getFirstName(),
                //'phone' => $this->customer->getTelephone(),
                'email' => $this->customer->getEmail()
            ];
            $data['is_login'] = true;
            $data['points'] = $this->customer->getRewardPoints();
        } else {
            $data['fields'] = [];

            if (isset($this->session->data['email'])) {
                $data['fields']['email'] = $this->session->data['email'];
            } else {
                $data['fields']['email'] = '';
            }
            if (isset($this->session->data['name'])) {
                $data['fields']['name'] = $this->session->data['name'];
            } else {
                $data['fields']['name'] = '';
            }
        }

        if (isset($this->session->data['phone'])) {
            $data['fields']['phone'] = $this->session->data['phone'];
        } else {
            $data['fields']['phone'] = '';
        }

        if (isset($this->session->data['zone'])) {
            $data['fields']['zone'] = $this->session->data['zone'];
        } else {
            $data['fields']['zone'] = '';
        }
        if (isset($this->session->data['zone_id'])) {
            $data['fields']['zone_id'] = $this->session->data['zone_id'];
        } else {
            $data['fields']['zone_id'] = '';
        }
        if (isset($this->session->data['city'])) {
            $data['fields']['city'] = $this->session->data['city'];
        } else {
            $data['fields']['city'] = '';
        }
        if (isset($this->session->data['street'])) {
            $data['fields']['street'] = $this->session->data['street'];
        } else {
            $data['fields']['street'] = '';
        }
        if (isset($this->session->data['house'])) {
            $data['fields']['house'] = $this->session->data['house'];
        } else {
            $data['fields']['house'] = '';
        }
        if (isset($this->session->data['appartment'])) {
            $data['fields']['appartment'] = $this->session->data['appartment'];
        } else {
            $data['fields']['appartment'] = '';
        }
        if (isset($this->session->data['comment'])) {
            $data['fields']['comment'] = $this->session->data['comment'];
        } else {
            $data['fields']['comment'] = '';
        }
        if (isset($this->session->data['coupon'])) {
            $data['coupon'] = $this->session->data['coupon'];
        } else {
            $data['coupon'] = '';
        }
        if (isset($this->session->data['bonuses']) && $this->session->data['bonuses'] == "on") {
            $data['bonuses'] = true;
        } else {
            $data['bonuses'] = false;
        }

        if ($this->cart->hasShipping()) {
            $data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 5);
            $data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 6);
        } else {
            $data['text_checkout_payment_method'] = sprintf($this->language->get('text_checkout_payment_method'), 3);
            $data['text_checkout_confirm'] = sprintf($this->language->get('text_checkout_confirm'), 4);
        }

        //if (isset($this->session->data['error'])) {
        //    $data['error_warning'] = $this->session->data['error'];
        //    unset($this->session->data['error']);
        //} else {
        //    $data['error_warning'] = '';
        //}

        if (!empty($errors)) {
            $data['error_warning'] = $errors;
        } else {
            $data['error_warning'] = '';
        }

        $data['logged'] = $this->customer->isLogged();

        if (isset($this->session->data['account'])) {
            $data['account'] = $this->session->data['account'];
        } else {
            $data['account'] = '';
        }

        $data['shipping_required'] = $this->cart->hasShipping();

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        $data['order_cart'] = $this->load->controller('checkout/order_cart', $data['error_warning']);

        if ($update) {
            return $this->load->view('checkout/checkout', $data);
        } else {
            $this->response->setOutput($this->load->view('checkout/checkout', $data));
        }
    }

    public function setShippingMethods()
    {
        $method_data = array();

        $this->load->model('setting/extension');

        $results = $this->model_setting_extension->getExtensions('shipping');

        //echo "<pre>";
        //var_dump($results);
        //echo "</pre>";

        foreach ($results as $result) {
            if ($this->config->get('shipping_' . $result['code'] . '_status')) {
                $this->load->model('extension/shipping/' . $result['code']);

                $quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote('');

                //echo "<pre>";
                //var_dump($quote);
                //echo "<pre>";

                if (!isset($quote['cost'])) {
                    $quote['cost'] = 0;
                }

                if ($quote) {
                    $method_data[$result['code']] = array(
                        'title' => $quote['title'],
                        'quote' => $quote['quote'],
                        'sort_order' => $quote['sort_order'],
                        'cost' => $quote['cost'],
                        'code' => $quote['code'],
                        'error' => $quote['error']
                    );
                }
            }
        }

        $sort_order = array();

        foreach ($method_data as $key => $value) {
            $sort_order[$key] = $value['sort_order'];
        }

        array_multisort($sort_order, SORT_ASC, $method_data);

        $this->session->data['shipping_methods'] = $method_data;

        //echo "<pre>";
        //var_dump($method_data);
        //echo "</pre>";

        if (!$this->session->data['shipping_method'] || !$this->session->data['shipping_type']) {
            foreach ($method_data as $shipping_method_key => $shipping_method) {
                $first_method = $shipping_method;
                $first_quote_key = $shipping_method_key;
                $first_quote = [];

                foreach ($first_method['quote'] as $key => $item) {
                    $first_quote = $item;
                    break;
                }

                $this->session->data['shipping_method'] = $first_quote;
                $this->session->data['shipping_type'] = $first_quote_key;

                break;
            }
        }
    }

    public function setShippingMethod()
    {
        $shipping_method = $this->request->post['shipping_method'];

        if (!empty($shipping_method)) {
            $parts = explode('.', $shipping_method);

            if ($parts) {
                $this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$parts[0]]['quote'][$parts[1]];

                $this->session->data['shipping_type'] = $parts[0];
            }
        }

        $this->response->setOutput(json_encode([
            'success' => true,
            'fragments' => $this->load->controller('checkout/cart/getFragments')
        ]));
    }

    public function setPaymentMethods()
    {
        // Totals
        $totals = array();
        $taxes = $this->cart->getTaxes();
        $total = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total
        );

        $this->load->model('setting/extension');

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

        // Payment Methods
        $method_data = array();

        $this->load->model('setting/extension');

        $results = $this->model_setting_extension->getExtensions('payment');

        $recurring = $this->cart->hasRecurringProducts();

        foreach ($results as $result) {
            if ($this->config->get('payment_' . $result['code'] . '_status')) {
                $this->load->model('extension/payment/' . $result['code']);

                $method = $this->{'model_extension_payment_' . $result['code']}->getMethod('', $total);

                if ($method) {
                    if ($recurring) {
                        if (property_exists($this->{'model_extension_payment_' . $result['code']}, 'recurringPayments') && $this->{'model_extension_payment_' . $result['code']}->recurringPayments()) {
                            $method_data[$result['code']] = $method;
                        }
                    } else {
                        $method_data[$result['code']] = $method;
                    }
                }
            }
        }

        $sort_order = array();

        foreach ($method_data as $key => $value) {
            $sort_order[$key] = $value['sort_order'];
        }

        array_multisort($sort_order, SORT_ASC, $method_data);

        $this->session->data['payment_methods'] = $method_data;

        if (!$this->session->data['payment_method']) {
            $this->session->data['payment_method'] = current($method_data);
        }
    }

    public function setPaymentMethod()
    {
        $payment_method = $this->request->post['payment_method'];

        if (!empty($payment_method)) {
            $this->session->data['payment_method'] = $this->session->data['payment_methods'][$payment_method];
        }

        $this->response->setOutput(json_encode([
            'success' => true
        ]));
    }

    public function setTextFields()
    {
        $fields = $this->request->post['fields'];

        if (!empty($fields)) {
            foreach ($fields as $key => $value) {
                $this->session->data['checkout_fields'][$key] = $value;
            }
        }
    }

    public function confirm()
    {

        if ($this->validate()) {
            $data = $this->request->post;

            //foreach ($this->session->data['shipping_methods'] as $method) {
            //    foreach ($method['quote'] as $type) {
            //        if ($type['code'] == $data['shipping_method']) {
            //            $this->session->data['shipping_method'] = $type;
            //        }
            //    }
            //}

            $order_data = array();

            $totals = $this->load->controller('extension/total/total');

            $order_data['totals'] = $totals;

            $this->load->language('checkout/checkout');

            $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
            $order_data['store_id'] = $this->config->get('config_store_id');
            $order_data['store_name'] = $this->config->get('config_name');

            if ($order_data['store_id']) {
                $order_data['store_url'] = $this->config->get('config_url');
            } else {
                if ($this->request->server['HTTPS']) {
                    $order_data['store_url'] = HTTPS_SERVER;
                } else {
                    $order_data['store_url'] = HTTP_SERVER;
                }
            }

            if ($this->customer->isLogged()) {
                $this->load->model('account/customer');
                $customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

                $order_data['customer_id'] = $this->customer->getId();
                $order_data['customer_group_id'] = $customer_info['customer_group_id'];
            } else {
                $order_data['customer_id'] = 0;
                $order_data['customer_group_id'] = 1;
            }

            $order_data['firstname'] = $data['name'];
            $order_data['telephone'] = $data['phone'];
            $order_data['lastname'] = '';
            $order_data['email'] = !empty($data['email']) ? $data['email'] : '';
            $order_data['custom_field'] = '';

            if ($this->session->data['shipping_type'] != 'pickup_point') {
                $address = $data['region'] . ', г. ' . $data['city'] . ', ' . $data['address'];
            } else {
                $address = '';
            }

            $order_data['payment_firstname'] = $data['name'];
            $order_data['payment_address_1'] = $address;
            $order_data['payment_lastname'] = '';
            $order_data['payment_company'] = '';
            $order_data['payment_address_2'] = '';
            $order_data['payment_city'] = '';
            $order_data['payment_postcode'] = '';
            $order_data['payment_zone'] = '';
            $order_data['payment_zone_id'] = '';
            $order_data['payment_country'] = '';
            $order_data['payment_country_id'] = '';
            $order_data['payment_address_format'] = '';
            $order_data['payment_custom_field'] = [];

            if (isset($this->session->data['payment_method']['title'])) {
                $order_data['payment_method'] = $this->session->data['payment_method']['title'];
            } else {
                $order_data['payment_method'] = '';
            }

            if (isset($this->session->data['payment_method']['code'])) {
                $order_data['payment_code'] = $this->session->data['payment_method']['code'];
            } else {
                $order_data['payment_code'] = '';
            }

            if ($this->cart->hasShipping()) {
                $order_data['shipping_firstname'] = $data['name'];
                $order_data['shipping_address_1'] = $address;
                $order_data['shipping_lastname'] = '';
                $order_data['shipping_company'] = '';
                $order_data['shipping_address_2'] = '';
                $order_data['shipping_city'] = '';
                $order_data['shipping_postcode'] = '';
                $order_data['shipping_zone'] = '';
                $order_data['shipping_zone_id'] = '';
                $order_data['shipping_country'] = '';
                $order_data['shipping_country_id'] = '';
                $order_data['shipping_address_format'] = '';
                $order_data['shipping_custom_field'] = [];

                if (!empty($this->session->data['shipping_method']['title'])) {
                    $order_data['shipping_method'] = $this->session->data['shipping_method']['title'];
                } else {
                    $order_data['shipping_method'] = '';
                }

                if (isset($this->session->data['shipping_method']['code'])) {
                    $order_data['shipping_code'] = $this->session->data['shipping_method']['code'];
                } else {
                    $order_data['shipping_code'] = '';
                }

                if (isset($this->session->data['shipping_type'])) {
                    $order_data['shipping_type'] = $this->session->data['shipping_type'];
                } else {
                    $order_data['shipping_code'] = '';
                }
            } else {
                $order_data['shipping_firstname'] = '';
                $order_data['shipping_lastname'] = '';
                $order_data['shipping_company'] = '';
                $order_data['shipping_address_1'] = '';
                $order_data['shipping_address_2'] = '';
                $order_data['shipping_city'] = '';
                $order_data['shipping_postcode'] = '';
                $order_data['shipping_zone'] = '';
                $order_data['shipping_zone_id'] = '';
                $order_data['shipping_country'] = '';
                $order_data['shipping_country_id'] = '';
                $order_data['shipping_address_format'] = '';
                $order_data['shipping_custom_field'] = array();
                $order_data['shipping_method'] = '';
                $order_data['shipping_code'] = '';
            }

            $order_data['products'] = array();

            foreach ($this->cart->getProducts() as $product) {
                $option_data = array();

                foreach ($product['option'] as $option) {
                    $option_data[] = array(
                        'product_option_id' => $option['product_option_id'],
                        'product_option_value_id' => $option['product_option_value_id'],
                        'option_id' => $option['option_id'],
                        'option_value_id' => $option['option_value_id'],
                        'name' => $option['name'],
                        'value' => $option['value'],
                        'type' => $option['type']
                    );
                }

                $order_data['products'][] = array(
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'download' => $product['download'],
                    'quantity' => $product['quantity'],
                    'subtract' => $product['subtract'],
                    'price' => $product['price'],
                    'total' => $product['total'],
                    'tax' => $this->tax->getTax($product['price'], $product['tax_class_id']),
                    'reward' => $product['reward']
                );
            }

            // Gift Voucher
            $order_data['vouchers'] = array();

            if (!empty($this->session->data['vouchers'])) {
                foreach ($this->session->data['vouchers'] as $voucher) {
                    $order_data['vouchers'][] = array(
                        'description' => $voucher['description'],
                        'code' => token(10),
                        'to_name' => $voucher['to_name'],
                        'to_email' => $voucher['to_email'],
                        'from_name' => $voucher['from_name'],
                        'from_email' => $voucher['from_email'],
                        'voucher_theme_id' => $voucher['voucher_theme_id'],
                        'message' => $voucher['message'],
                        'amount' => $voucher['amount']
                    );
                }
            }

            $order_data['comment'] = $data['comment'] ?? '';
            $order_data['total'] = floor($totals['total']['value']);

            if (isset($this->request->cookie['tracking'])) {
                $order_data['tracking'] = $this->request->cookie['tracking'];

                $subtotal = $this->cart->getSubTotal();

                // Affiliate
                $affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

                if ($affiliate_info) {
                    $order_data['affiliate_id'] = $affiliate_info['customer_id'];
                    $order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];
                } else {
                    $order_data['affiliate_id'] = 0;
                    $order_data['commission'] = 0;
                }

                // Marketing
                $this->load->model('checkout/marketing');

                $marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);

                if ($marketing_info) {
                    $order_data['marketing_id'] = $marketing_info['marketing_id'];
                } else {
                    $order_data['marketing_id'] = 0;
                }
            } else {
                $order_data['affiliate_id'] = 0;
                $order_data['commission'] = 0;
                $order_data['marketing_id'] = 0;
                $order_data['tracking'] = '';
            }

            $order_data['language_id'] = $this->config->get('config_language_id');
            $order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
            $order_data['currency_code'] = $this->session->data['currency'];
            $order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
            $order_data['ip'] = $this->request->server['REMOTE_ADDR'];

            if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
                $order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
            } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
                $order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
            } else {
                $order_data['forwarded_ip'] = '';
            }

            if (isset($this->request->server['HTTP_USER_AGENT'])) {
                $order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
            } else {
                $order_data['user_agent'] = '';
            }

            if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
                $order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
            } else {
                $order_data['accept_language'] = '';
            }

            $this->load->model('checkout/order');

            $this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);

            $this->load->model('tool/upload');

            $data['products'] = array();

            foreach ($this->cart->getProducts() as $product) {
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

                $recurring = '';

                if ($product['recurring']) {
                    $frequencies = array(
                        'day' => $this->language->get('text_day'),
                        'week' => $this->language->get('text_week'),
                        'semi_month' => $this->language->get('text_semi_month'),
                        'month' => $this->language->get('text_month'),
                        'year' => $this->language->get('text_year'),
                    );

                    if ($product['recurring']['trial']) {
                        $recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
                    }

                    if ($product['recurring']['duration']) {
                        $recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                    } else {
                        $recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
                    }
                }

                $data['products'][] = array(
                    'cart_id' => $product['cart_id'],
                    'product_id' => $product['product_id'],
                    'name' => $product['name'],
                    'model' => $product['model'],
                    'option' => $option_data,
                    'recurring' => $recurring,
                    'quantity' => $product['quantity'],
                    'subtract' => $product['subtract'],
                    'price' => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                    'total' => $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')) * $product['quantity'], $this->session->data['currency']),
                    'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
                );
            }

            // Gift Voucher
            $data['vouchers'] = array();

            if (!empty($this->session->data['vouchers'])) {
                foreach ($this->session->data['vouchers'] as $voucher) {
                    $data['vouchers'][] = array(
                        'description' => $voucher['description'],
                        'amount' => $this->currency->format($voucher['amount'], $this->session->data['currency'])
                    );
                }
            }

            $data['totals'] = array();

            foreach ($order_data['totals'] as $total) {
                $data['totals'][] = array(
                    'title' => $total['title'],
                    'text' => $this->currency->format($total['value'], $this->session->data['currency'])
                );
            }

            if ($this->request->post['payment_method'] == 'sber') {
                $this->request->get['order_id'] = $this->session->data['order_id'];

                $result = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code'] . '/payment');

                if ($result['error']) {
                    $data['error'] = $result['error'];
                } else {
                    $data['success'] = $result;
                }
            } else {
                $data['success'] = $this->load->controller('extension/payment/' . $this->session->data['payment_method']['code'] . '/confirm');
            }

            $this->response->setOutput(json_encode($data));
        } else {
            $this->response->setOutput(json_encode([
                'errors' => $this->error
            ]));
        }
    }

    public function validate()
    {

        $errors = [];

        $data = $this->request->post;

        if (!isset($data['phone']) || empty($data['phone'])) {
            $errors['phone'] = 'Укажите телефон';
        }

        if (!isset($data['email']) || empty($data['email'])) {
            $errors['email'] = 'Укажите E-Mail';
        }

        //if ($data['shipping_type'] != 'pickup_point') {

        //if (!isset($data['city']) || empty($data['city'])) {
        //    $this->error['city'] = 'Укажите город';
        //}

        if (!isset($data['name']) || empty($data['name'])) {
            $errors['name'] = 'Укажите Ваше имя';
        }

        //if (!isset($data['street']) || empty($data['street'])) {
        //    $this->error['street'] = 'Укажите улицу';
        //}
        //
        //if (!isset($data['house']) || empty($data['house'])) {
        //    $this->error['house'] = 'Укажите дом';
        //}
        //
        //if (!isset($data['appartment']) || empty($data['appartment'])) {
        //    $this->error['appartment'] = 'Укажите квартиру';
        //}

        if (!isset($data['agree'])) {
            $errors['agree'] = 'Вы должны дать согласие на обработку персональных данных';
        }
        //}

        if (!empty($errors)) {
            $this->response->setOutput($this->index(true, $errors));
        } else {
            return null;
            //$this->response->addHeader('Content-Type: application/json');
            //$this->response->setOutput(json_encode([]));
        }
    }

    public function info()
    {
        if (isset($this->request->post)) {
            if (isset($this->request->post['payment_method'])) {
                $this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->post['payment_method']];
                $this->session->data['payment_type'] = $this->request->post['payment_method'];
            }
            if (isset($this->request->post['shipping_method'])) {
                $this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$this->request->post['shipping_method']];
                $this->session->data['shipping_type'] = $this->request->post['shipping_method'];
                //$this->session->data['shipping_method']['cost'] = $this->session->data['payment_methods'][$this->session->data['shipping_type']][$this->request->post['shipping_method']];
            }
            if (isset($this->request->post['phone'])) {
                $this->session->data['phone'] = $this->request->post['phone'];
            }
            if (isset($this->request->post['email'])) {
                $this->session->data['email'] = $this->request->post['email'];
            }
            if (isset($this->request->post['zone'])) {
                $this->session->data['zone'] = $this->request->post['zone'];
            }
            if (isset($this->request->post['zone_id'])) {
                $this->session->data['zone_id'] = $this->request->post['zone_id'];
            }
            if (isset($this->request->post['city'])) {
                $this->session->data['city'] = $this->request->post['city'];
            }
            if (isset($this->request->post['name'])) {
                $this->session->data['name'] = $this->request->post['name'];
            }
            if (isset($this->request->post['street'])) {
                $this->session->data['street'] = $this->request->post['street'];
            }
            if (isset($this->request->post['house'])) {
                $this->session->data['house'] = $this->request->post['house'];
            }
            if (isset($this->request->post['appartment'])) {
                $this->session->data['appartment'] = $this->request->post['appartment'];
            }
            if (isset($this->request->post['comment'])) {
                $this->session->data['comment'] = $this->request->post['comment'];
            }
            if (isset($this->request->post['agree'])) {
                $this->session->data['agree'] = $this->request->post['agree'];
            }
            if (isset($this->request->post['coupon'])) {
                $this->session->data['coupon'] = $this->request->post['coupon'];
            }
            if (isset($this->request->post['bonuses'])) {
                $this->session->data['bonuses'] = $this->request->post['bonuses'];
            }
        }
        $this->response->setOutput($this->index(true));
    }
}