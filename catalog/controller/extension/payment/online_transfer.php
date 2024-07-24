<?php

class ControllerExtensionPaymentOnlineTransfer extends Controller
{
    public function index()
    {
        //$this->load->language('extension/payment/online_transfer');
        //
        //$data['online'] = nl2br($this->config->get('payment_online_transfer_online' . $this->config->get('config_language_id')));

        //return $this->load->view('extension/payment/online_transfer', $data);

        $this->load->language('extension/payment/online_transfer');
        //$comment = $this->language->get('text_instruction') . "\n\n";
        $comment = $this->config->get('payment_online_transfer_online' . $this->config->get('config_language_id')) . "\n\n";
        $comment .= $this->language->get('text_payment');

        $data['comment'] = $comment;

        return $data;
    }

    public function confirm()
    {
        $json = array();

        if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'online_transfer') {
            $this->load->language('extension/payment/online_transfer');

            $this->load->model('checkout/order');

            $comment = $this->language->get('text_instruction') . "\n\n";
            $comment .= $this->config->get('payment_online_transfer_online' . $this->config->get('config_language_id')) . "\n\n";
            $comment .= $this->language->get('text_payment');

            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_online_transfer_order_status_id'), $comment, true);

            $json['redirect'] = $this->url->link('checkout/success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}