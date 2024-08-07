<?php

class ControllerCommonHeader extends Controller
{
    public function index()
    {

        // Analytics
        $this->load->model('setting/extension');

        $data['analytics'] = array();

        $analytics = $this->model_setting_extension->getExtensions('analytics');

        foreach ($analytics as $analytic) {
            if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
                $data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
            }
        }

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
            $this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
        }

        $data['title'] = $this->document->getTitle();

        $data['base'] = $server;
        $data['description'] = $this->document->getDescription();
        $data['keywords'] = $this->document->getKeywords();
        $data['links'] = $this->document->getLinks();
        $data['styles'] = $this->document->getStyles();
        $data['scripts'] = $this->document->getScripts('header');
        $data['lang'] = $this->language->get('code');
        $data['direction'] = $this->language->get('direction');

        $data['name'] = $this->config->get('config_name');

        $data['class'] = str_replace('/', '-', $this->request->get['route'] ?? 'common-home');

        if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
            $data['logo'] = $server . 'image/' . $this->config->get('config_logo');
        } else {
            $data['logo'] = '';
        }

        $this->load->language('common/header');

        $data['points'] = '0';

        // Wishlist
        if ($this->customer->isLogged()) {
            $this->load->model('account/wishlist');

            $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
            $data['points'] = $this->customer->getRewardPoints();
            if (!$data['points']) {
                $data['points'] = '0';
            }
        } else {
            $data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
        }

        $data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));

        $data['home'] = $this->url->link('common/home');
        $data['wishlist'] = $this->url->link('account/wishlist', '', true);
        $data['logged'] = $this->customer->isLogged();
        $data['account'] = $this->url->link('account/account', '', true);
        $data['register'] = $this->url->link('account/register', '', true);
        $data['login'] = $this->url->link('account/login', '', true);
        $data['order'] = $this->url->link('account/order', '', true);
        $data['transaction'] = $this->url->link('account/transaction', '', true);
        $data['download'] = $this->url->link('account/download', '', true);
        $data['logout'] = $this->url->link('account/logout', '', true);
        $data['shopping_cart'] = $this->url->link('checkout/cart');
        $data['checkout'] = $this->url->link('checkout/checkout', '', true);
        $data['contact'] = $this->url->link('information/contact');
        $data['telephone'] = $this->config->get('config_telephone');

        $data['language'] = $this->load->controller('common/language');
        $data['currency'] = $this->load->controller('common/currency');
        $data['search'] = $this->load->controller('common/search');
        $data['cart'] = $this->load->controller('common/cart');
        // $data['menu'] = $this->load->controller('common/menu');
        $data['menu_main'] = $this->load->controller('common/menu_main');
        $data['menu_mobil'] = $this->load->controller('common/menu_mobil');

        $current_url = $this->request->server['REQUEST_URI'];

        $data['menu_pages'] = [
            [
                'title' => 'Ателье',
                'href' => '/atelier',
                'active' => $current_url == '/atelier' ? 'active' : '',
            ],
            [
                'title' => 'В подарок',
                'href' => '/giftcard',
                'active' => $current_url == '/giftcard' ? 'active' : '',
            ],
            [
                'title' => 'О нас',
                'href' => '/aboutcompany',
                'active' => $current_url == '/aboutcompany' ? 'active' : '',
            ],
            [
                'title' => 'Блог',
                'href' => '/blogs',
                'active' => $current_url == '/blogs' ? 'active' : '',
            ],
            [
                'title' => 'Оплата и доставка',
                'href' => '/buyers',
                'active' => $current_url == '/buyers' ? 'active' : '',
            ],
            [
                'title' => 'Сотрудничество',
                'href' => '/cooperation',
                'active' => $current_url == '/cooperation' ? 'active' : '',
            ],
            [
                'title' => 'Контакты',
                'href' => '/contact',
                'active' => $current_url == '/contact' ? 'active' : '',
            ],
        ];

        $data['first_order_discount'] = false;
        $is_show_first_order_discount = false;
        if (!$this->customer->isLogged() || ($this->customer->isLogged() && !$this->customer->hasJustOneOrder())) {
            $is_show_first_order_discount = true;
        }

        if ($is_show_first_order_discount && !isset($this->session->data['first_order_discount'])) {
            $data['first_order_discount'] = true;
            $this->session->data['first_order_discount'] = true;
        }

        return $this->load->view('common/header', $data);
    }
}
