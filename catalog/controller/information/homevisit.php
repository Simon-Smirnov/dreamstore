<?php

class ControllerInformationHomevisit extends Controller
{
    public function index()
    {
        $this->load->language('information/homevisit');

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
            'href' => $this->url->link('information/homevisit')
        );

        if (!empty($information_info['no_index'])) {
            $this->response->addHeader('X-Robots-Tag: noindex');
        }

        $this->load->model('catalog/information');

        $data['info'] = html_entity_decode($this->model_catalog_information->getDescription(8), ENT_QUOTES, 'UTF-8');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/homevisit', $data));
    }
}
