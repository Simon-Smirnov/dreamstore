<?php

class ControllerInformationAboutcompany extends Controller
{
    public function index()
    {
        $this->load->language('information/aboutcompany');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->setDescription($this->language->get('heading_title'));
        $this->document->setKeywords($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/aboutcompany')
        );

        if (!empty($information_info['no_index'])) {
            $this->response->addHeader('X-Robots-Tag: noindex');
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        $data['categories'] = $this->load->controller('common/catalog');

        $this->response->setOutput($this->load->view('information/aboutcompany', $data));
    }
}
