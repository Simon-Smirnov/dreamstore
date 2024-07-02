<?php

class ControllerAccountAccount extends Controller
{
    public function index()
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

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data['rewards'] = 0;
        if ($this->customer->getRewardPoints()) {
            $data['rewards'] = $this->customer->getRewardPoints();
        }

        $data['orders'] = [];
        $this->load->model('account/order');
        $orders = $this->model_account_order->getAllOrders();

        foreach ($orders as $order) {
            $products = $this->model_account_order->getOrderProducts($order['order_id']);
            foreach ($products as $key => $product) {
                $products[$key]['options'] = $this->model_account_order->getOrderOptions($order['order_id'], $product['order_product_id']);
            }

            echo "<pre>";
            var_dump($products);
            echo "</pre>";

            $class = '';
            if ($order['status_id'] == '1') {
                $class = 'warning';
            } else if ($order['status_id'] == '5') {
                $class = 'success';
            }

            $data['orders'][] = [
                'order_id' => $order['order_id'],
                'status' => $order['status'],
                'date_added' => $order['date_added'],
                'class' => $class,
                'products' => $products,
                'total' => $order['total']
            ];
        }


        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/account', $data));
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

                //$this->model_account_customer->addLoginAttempt($this->request->post['email']);
            } else {
                $this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
            }
        }

        return $errors;
    }
}
