<?php

class ControllerFormsForms extends Controller
{
    private $error = array();

    public function index()
    {

    }

    public function bid()
    {
        $this->response->setOutput($this->load->view('forms/bid'));
    }

    public function reach()
    {
        $this->response->setOutput($this->load->view('forms/reach'));
    }

    public function call()
    {
        $this->response->setOutput($this->load->view('forms/call'));
    }

    public function askquestion()
    {
        $this->response->setOutput($this->load->view('forms/askquestion'));
    }

    public function writetous()
    {
        $this->response->setOutput($this->load->view('forms/writetous'));
    }

    public function freefabric()
    {
        $this->response->setOutput($this->load->view('forms/freefabric'));
    }

    public function calculation()
    {
        $data = [];
        if (isset($this->request->post['product'])) {
            $data['product'] = $this->request->post['product'];
        }

        $this->response->setOutput($this->load->view('forms/calculation', $data));
    }

    public function firstorder()
    {
        $this->response->setOutput($this->load->view('forms/firstorder'));
    }

    public function dontfind()
    {
        $this->response->setOutput($this->load->view('forms/dontfind'));
    }

    public function quickorder()
    {
        $data = [];
        if (isset($this->request->post['product'])) {
            $data['product'] = $this->request->post['product'];
        }

        $this->response->setOutput($this->load->view('forms/quickorder', $data));
    }

    public function success()
    {
        $this->response->setOutput($this->load->view('forms/success'));
    }
}