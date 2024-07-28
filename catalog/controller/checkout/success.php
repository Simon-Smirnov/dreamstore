<?php

class ControllerCheckoutSuccess extends Controller
{
    public function index()
    {
        $this->load->language('checkout/success');

        $data['comment'] = false;
        //$data['payment_url'] = false;
        //$data['iframeUrl'] = false;
        $data['robokassa'] = false;
        $data['robokassa_podeli'] = false;

        $this->load->model('checkout/order');
        $order_data = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        if (isset($this->session->data['payment_info'])) {
            if (isset($this->session->data['payment_info']['comment'])) {
                $data['comment'] = $this->session->data['payment_info']['comment'];
            }
            //if (isset($this->session->data['payment_info']['payment_url'])) {
            //    $data['payment_url'] = $this->session->data['payment_info']['payment_url'];
            //}
            //if (isset($this->session->data['payment_info']['iframeUrl'])) {
            //    $data['iframeUrl'] = $this->session->data['payment_info']['iframeUrl'];
            //}
            if (isset($this->session->data['payment_info']['robokassa'])) {
                $data['robokassa'] = $this->session->data['payment_info']['robokassa'];
            }
            if (isset($this->session->data['payment_info']['robokassa_podeli'])) {
                $data['robokassa_podeli'] = $this->session->data['payment_info']['robokassa_podeli'];
            }
        }

        //echo "<pre>";
        //var_dump($this->session->data['payment_info']);
        //echo "</pre>";

        $data['order_id'] = $order_data['order_id'];
        $data['firstname'] = $order_data['firstname'];
        $data['telephone'] = $order_data['telephone'];
        $data['email'] = $order_data['email'];
        $data['payment_method'] = $order_data['payment_method'];
        $data['shipping_method'] = $order_data['shipping_method'];
        $data['payment_address'] = $order_data['payment_address_1'];
        $data['weight'] = $order_data['weight'];
        $data['reward'] = $order_data['reward'];
        $data['total'] = $order_data['total'];

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_basket'),
            'href' => $this->url->link('checkout/cart')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_checkout'),
            'href' => $this->url->link('checkout/checkout', '', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_success'),
            'href' => $this->url->link('checkout/success')
        );

        if ($this->customer->isLogged()) {
            $data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('account/download', '', true), $this->url->link('information/contact'));
        } else {
            $data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
        }

        //if (isset($this->session->data['order_id'])) {
        //    $this->cart->clear();
        //
        //    unset($this->session->data['shipping_method']);
        //    unset($this->session->data['shipping_methods']);
        //    unset($this->session->data['payment_method']);
        //    unset($this->session->data['payment_methods']);
        //    unset($this->session->data['guest']);
        //    unset($this->session->data['comment']);
        //    unset($this->session->data['order_id']);
        //    unset($this->session->data['coupon']);
        //    unset($this->session->data['reward']);
        //    unset($this->session->data['voucher']);
        //    unset($this->session->data['vouchers']);
        //    unset($this->session->data['totals']);
        //}

        $data['continue'] = $this->url->link('common/home');

        //$data['column_left'] = $this->load->controller('common/column_left');
        //$data['column_right'] = $this->load->controller('common/column_right');
        //$data['content_top'] = $this->load->controller('common/content_top');
        //$data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('common/success', $data));
    }
}