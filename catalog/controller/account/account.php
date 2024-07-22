<?php

class ControllerAccountAccount extends Controller
{
    public function index($answer = [])
    {
        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('account/account', '', true);

            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('account/account');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('account/account', '', true)
        );

        $data['error_name'] = '';
        $data['error_birthday'] = '';
        $data['error_password'] = '';
        if (isset($answer['errors'])) {
            if (isset($answer['errors']['name'])) {
                $data['error_name'] = $answer['errors']['name'];
            }
            if (isset($answer['errors']['birthday'])) {
                $data['error_birthday'] = $answer['errors']['birthday'];
            }
            if (isset($answer['errors']['password'])) {
                $data['error_password'] = $answer['errors']['password'];
            }
        }
        $data['success'] = false;
        if (isset($answer['success'])) {
            $data['success'] = $answer['success'];
        }


        $customer_id = $this->customer->getId();
        $this->load->model('account/customer');
        $customer = $this->model_account_customer->getCustomer($customer_id);

        $data['name'] = $customer['firstname'];
        $data['email'] = $customer['email'];
        $data['birthday'] = substr($customer['birthday'], 0, 10);

        $data['rewards'] = 0;
        if ($this->customer->getRewardPoints()) {
            $data['rewards'] = $this->customer->getRewardPoints();
        }

        $data['orders'] = [];
        $this->load->model('account/order');
        $orders = $this->model_account_order->getAllOrders();

        foreach ($orders as $order) {
            $products = $this->model_account_order->getOrderProducts($order['order_id']);
            $order_totals = $this->model_account_order->getOrderTotals($order['order_id']);
            $order['sub_total'] = 0;
            $order['shipping_cost'] = 0;

            foreach ($order_totals as $order_total) {
                if ($order_total['code'] == 'sub_total') {
                    $order['sub_total'] = $this->currency->format($order_total['value'], $this->session->data['currency']);
                }
                if ($order_total['code'] == 'shipping') {
                    $order['shipping_cost'] = $this->currency->format($order_total['value'], $this->session->data['currency']);
                }
            }

            foreach ($products as $key => $product) {
                $this->load->model('tool/image');
                if ($product['image']) {
                    $image = [
                        'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                    ];
                } else {
                    $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
                }
                $total = $this->currency->format($product['total'], $this->session->data['currency']);
                $products[$key]['total'] = $total;
                $total_without_special = false;
                if ($product['total_without_special'] != 0) {
                    $total_without_special = $this->currency->format($product['total_without_special'], $this->session->data['currency']);
                }
                $products[$key]['total_without_special'] = $total_without_special;
                $products[$key]['image'] = $image;
                $products[$key]['options'] = $this->model_account_order->getOrderOptions($order['order_id'], $product['order_product_id']);
            }

            $class = '';
            if ($order['order_status_id'] == '1') {
                $class = 'warning';
            } else if ($order['order_status_id'] == '5') {
                $class = 'success';
            }

            $discount = false;
            if ($order['discount'] > 0) {
                $discount = $this->currency->format($order['discount'], $this->session->data['currency']);
            }
            $weight = $this->weight->format($this->cart->getWeight(), $order['weight_class_id'], $this->language->get('decimal_point'), $this->language->get('thousand_point'));
            $total = $this->currency->format($order['total'], $this->session->data['currency']);

            $data['orders'][] = [
                'order_id' => $order['order_id'],
                'status' => $order['status'],
                'date_added' => $order['date_added'],
                'class' => $class,
                'products' => $products,
                'discount' => $discount,
                'weight' => $weight,
                'shipping_cost' => $order['shipping_cost'],
                'sub_total' => $order['sub_total'],
                'reward' => $order['reward'],
                'total' => $total
            ];
        }

        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        if (empty($answer)) {
            $this->response->setOutput($this->load->view('account/account', $data));
        } else {
            return $this->load->view('account/account', $data);
        }


    }

    public function country()
    {
        $json = array();

        $this->load->model('localisation/country');

        $country_info = $this->model_localisation_country->getCountry($this->request->get['country_id']);

        if ($country_info) {
            $this->load->model('localisation/zone');

            $json = array(
                'country_id' => $country_info['country_id'],
                'name' => $country_info['name'],
                'iso_code_2' => $country_info['iso_code_2'],
                'iso_code_3' => $country_info['iso_code_3'],
                'address_format' => $country_info['address_format'],
                'postcode_required' => $country_info['postcode_required'],
                'zone' => $this->model_localisation_zone->getZonesByCountryId($this->request->get['country_id']),
                'status' => $country_info['status']
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function loginForm()
    {
        $data = array();
        //$this->response->setOutput($this->load->view('account/login_modal', $data));

        $this->response->setOutput(json_encode([
            'html' => $this->load->view('account/login_form', $data)
        ]));
    }

    public function changePasswordForm()
    {
        $data = array();
        //$this->response->setOutput($this->load->view('account/login_modal', $data));

        $this->response->setOutput(json_encode([
            'html' => $this->load->view('account/change_password_form', $data)
        ]));
    }

    public function registerForm()
    {
        $data = array();
        //$this->response->setOutput($this->load->view('account/login_modal', $data));

        $this->load->language('account/register');

        $this->response->setOutput(json_encode([
            'html' => $this->load->view('account/register_form', $data)
        ]));
    }

    public function register()
    {

        $json = [];

        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/account', '', true));
        }

        $this->load->language('account/register');
        $this->load->model('account/customer');

        $errosValidate = [];
        if ($this->request->post) {
            $data = $this->request->post;
            $errosValidate = $this->validateRegister($data);
        }

        if (empty($errosValidate)) {
            $customer_id = $this->model_account_customer->addCustomer($this->request->post);

            // Clear any previous login attempts for unregistered accounts.
            $this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
            $this->customer->login($this->request->post['email'], $this->request->post['password']);
            unset($this->session->data['guest']);
            $json['success'] = "Поздравляем! Ваш аккаунт успешно создан.";
        } else {
            $json['errors'] = $errosValidate;
        }

        //$data['text_account_already'] = sprintf($this->language->get('text_account_already'), $this->url->link('account/login', '', true));

        //if (isset($this->error['email'])) {
        //    $data['error_email'] = $this->error['email'];
        //} else {
        //    $data['error_email'] = '';
        //}
        //
        //if (isset($this->error['telephone'])) {
        //    $data['error_telephone'] = $this->error['telephone'];
        //} else {
        //    $data['error_telephone'] = '';
        //}
        //
        //if (isset($this->error['custom_field'])) {
        //    $data['error_custom_field'] = $this->error['custom_field'];
        //} else {
        //    $data['error_custom_field'] = array();
        //}
        //
        //if (isset($this->error['password'])) {
        //    $data['error_password'] = $this->error['password'];
        //} else {
        //    $data['error_password'] = '';
        //}
        //
        //if (isset($this->error['confirm'])) {
        //    $data['error_confirm'] = $this->error['confirm'];
        //} else {
        //    $data['error_confirm'] = '';
        //}

        //$data['action'] = $this->url->link('account/register', '', true);

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->request->post['password'])) {
            $data['password'] = $this->request->post['password'];
        } else {
            $data['password'] = '';
        }

        if (isset($this->request->post['confirm'])) {
            $data['confirm'] = $this->request->post['confirm'];
        } else {
            $data['confirm'] = '';
        }

        //// Captcha
        //if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
        //    $data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
        //} else {
        //    $data['captcha'] = '';
        //}

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateRegister($data)
    {

        $errors = [];

        if ((utf8_strlen($data['email']) > 96) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = $this->language->get('error_email');
        }

        if ($this->model_account_customer->getTotalCustomersByEmail($data['email'])) {
            $errors['emailexists'] = $this->language->get('error_exists');
        }

        if ((utf8_strlen(html_entity_decode($data['password'], ENT_QUOTES, 'UTF-8')) < 4) || (utf8_strlen(html_entity_decode($data['password'], ENT_QUOTES, 'UTF-8')) > 40)) {
            $errors['password'] = $this->language->get('error_password');
        }

        if ($data['confirm'] != $data['password']) {
            $errors['confirm'] = $this->language->get('error_confirm');
        }

        //// Captcha
        //if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
        //    $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');
        //
        //    if ($captcha) {
        //        $this->error['captcha'] = $captcha;
        //    }
        //}

        // Agree to terms
        if ($this->config->get('config_account_id')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

            if ($information_info && !isset($data['agree'])) {
                $errors['agree'] = "Вы должны дать согласие на обработку персональных данных";
            }
        }

        return $errors;
    }

    public function login()
    {

        $json = [];
        $data = [];

        if ($this->request->post) {
            $data = $this->request->post;
            if (!isset($data['email']) || empty($data['email'])) {
                $json['errors']['email'] = 'Укажите E-Mail';
            }
            if (!isset($data['password']) || empty($data['password'])) {
                $json['errors']['password'] = 'Укажите пароль';
            }
            if (!isset($data['agree'])) {
                $json['errors']['agree'] = 'Вы должны дать согласие на обработку персональных данных';
            }
        } else {
            $json['errors']['data'] = 'Некорректные данные';
        }

        $back_path = false;
        if ($data['back_path']) {
            $back_path = $data['back_path'];
        }

        if (empty($json)) {
            $this->load->model('account/customer');

            // Login override for admin users
            if (!empty($this->request->get['token'])) {
                $this->customer->logout();
                $this->cart->clear();

                unset($this->session->data['order_id']);
                unset($this->session->data['payment_address']);
                unset($this->session->data['payment_method']);
                unset($this->session->data['payment_methods']);
                unset($this->session->data['shipping_address']);
                unset($this->session->data['shipping_method']);
                unset($this->session->data['shipping_methods']);
                unset($this->session->data['comment']);
                unset($this->session->data['coupon']);
                unset($this->session->data['reward']);
                unset($this->session->data['voucher']);
                unset($this->session->data['vouchers']);

                $customer_info = $this->model_account_customer->getCustomerByToken($this->request->get['token']);

                //setcookie('OCSESSIDLONG', 'true', time() + 2592000, '/');
                //setcookie('OCSESSIDLONG', $this->session->getId(), time() + 2592000, ini_get('session.cookie_path'), ini_get('session.cookie_domain'));

                if ($customer_info && $this->customer->login($customer_info['email'], '', true)) {
                    // Default Addresses
                    $this->load->model('account/address');

                    if ($this->config->get('config_tax_customer') == 'payment') {
                        $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                    }

                    if ($this->config->get('config_tax_customer') == 'shipping') {
                        $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                    }

                    $this->response->redirect($this->url->link('account/account', '', true));
                }
            }

            if ($this->customer->isLogged()) {
                $json['redirect'] = $this->url->link('account/account', '', true);
            }

            $this->load->language('account/login');

            $errosValidate = $this->validate($data);
            if (empty($errosValidate)) {
                // Unset guest
                unset($this->session->data['guest']);

                // Default Shipping Address
                $this->load->model('account/address');

                if ($this->config->get('config_tax_customer') == 'payment') {
                    $this->session->data['payment_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                if ($this->config->get('config_tax_customer') == 'shipping') {
                    $this->session->data['shipping_address'] = $this->model_account_address->getAddress($this->customer->getAddressId());
                }

                // Wishlist
                if (isset($this->session->data['wishlist']) && is_array($this->session->data['wishlist'])) {
                    $this->load->model('account/wishlist');

                    foreach ($this->session->data['wishlist'] as $key => $product_id) {
                        $this->model_account_wishlist->addWishlist($product_id);

                        unset($this->session->data['wishlist'][$key]);
                    }
                }

                if (isset($data['rememberme']) && $data['rememberme'] == 'on') {
                    setcookie('OCSESSIDLONG', 'true', time() + 2592000, '/');
                } else {
                    setcookie('OCSESSIDLONG', '', time() - 2592000, '/');
                }

                // Added strpos check to pass McAfee PCI compliance test (http://forum.opencart.com/viewtopic.php?f=10&t=12043&p=151494#p151295)
                //if (isset($this->request->post['redirect']) && $this->request->post['redirect'] != $this->url->link('account/logout', '', true) && (strpos($this->request->post['redirect'], $this->config->get('config_url')) !== false || strpos($this->request->post['redirect'], $this->config->get('config_ssl')) !== false)) {
                //    $this->response->redirect(str_replace('&amp;', '&', $this->request->post['redirect']));
                //} else {
                //    $this->response->redirect($this->url->link('account/account', '', true));
                //}

                //if (isset($back_path) && $back_path != $this->url->link('account/logout', '', true) && (strpos($back_path, $this->config->get('config_url')) !== false || strpos($back_path, $this->config->get('config_ssl')) !== false)) {
                if (isset($back_path)) {
                    $json['redirect'] = str_replace('&amp;', '&', $back_path);
                } else {
                    //$json['redirect'] = $this->url->link('account/account', '', true);
                }
            } else {
                $json['errors'] = $errosValidate;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function logout()
    {
        $json = [];
        if ($this->customer->isLogged()) {
            $this->customer->logout();

            unset($this->session->data['shipping_address']);
            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
            unset($this->session->data['payment_address']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['payment_methods']);
            unset($this->session->data['comment']);
            unset($this->session->data['order_id']);
            unset($this->session->data['coupon']);
            unset($this->session->data['reward']);
            unset($this->session->data['voucher']);
            unset($this->session->data['vouchers']);

            $this->session->data['logout'] = true;

            $json[redirect] = $this->url->link('common/home', '', true);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validate($data)
    {
        $errors = [];
        // Check how many login attempts have been made.
        $login_info = $this->model_account_customer->getLoginAttempts($data['email']);

        if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
            $errors['warning'] = $this->language->get('error_attempts');
        }

        // Check if customer has been approved.
        $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

        if ($customer_info && !$customer_info['status']) {
            $errors['warning'] = $this->language->get('error_approved');
        }

        if (!$errors) {
            if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
                $this->error['warning'] = $this->language->get('error_login');

                $this->model_account_customer->addLoginAttempt($this->request->post['email']);
            } else {
                $this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
            }
        }

        return $errors;
    }


    public function edit()
    {
        $answer = [];

        if ($this->request->post) {
            $data = $this->request->post;
        } else {
            $answer['errors']['data'] = 'Некорректные данные';
        }

        $customer_id = $this->customer->getId();

        if (empty($answer)) {
            $this->load->model('account/customer');

            $errosValidate = $this->editValidate($data);
            if (empty($errosValidate)) {
                $this->model_account_customer->updateCustomer($customer_id, $data);
                //if (trim($this->request->post['password']) != '') {
                //    $this->model_account_customer->editPasswordByCustomerId($customer_id, $data['password']);
                //}
                $answer['success'] = 'Данные успешно обновлены.';
            } else {
                $answer['errors'] = $errosValidate;
            }
        }

        $this->response->setOutput($this->index($answer));
    }

    protected function editValidate($data)
    {
        $errors = [];

        if ((utf8_strlen(trim($data['name'])) < 1) || (utf8_strlen(trim($data['name'])) > 128)) {
            $errors['name'] = 'Имя должно быть от 1 до 128 символов';
        }

        if ((utf8_strlen(trim($data['birthday'])) > 20)) {
            $errors['birthday'] = 'Дата рождения не может быть больше 20 символов';
        }

        if (trim($data['password']) != '') {
            if ((utf8_strlen(trim($data['password'])) < 6) || (utf8_strlen(trim($data['password'])) > 20)) {
                $errors['password'] = 'Пароль должен быть от 6 до 20 символов';
            }
        }

        return $errors;
    }

    public function forgotten()
    {
        $json = [];

        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('account/account', '', true));
        }

        $this->load->language('account/forgotten');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('account/customer');

        $errosValidate = $this->validateForgotten();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && empty($errosValidate)) {
            $this->model_account_customer->editCode($this->request->post['email'], token(40));

            $json['success'] = $this->language->get('text_success');
        } else {
            $json['errors'] = $errosValidate;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    protected function validateForgotten()
    {
        $errors = [];

        if (!isset($this->request->post['email'])) {
            $errors['email'] = $this->language->get('error_email');
        } elseif (!$this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
            $errors['email'] = $this->language->get('error_email');
        }

        // Check if customer has been approved.
        $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

        if ($customer_info && !$customer_info['status']) {
            $errors['warning'] = $this->language->get('error_approved');
        }

        return $errors;
    }
}
