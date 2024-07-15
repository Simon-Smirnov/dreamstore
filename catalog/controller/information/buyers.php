<?php

class ControllerInformationBuyers extends Controller
{
    public function index()
    {
        $this->load->language('information/buyers');

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
            'href' => $this->url->link('information/buyers')
        );

        if (!empty($information_info['no_index'])) {
            $this->response->addHeader('X-Robots-Tag: noindex');
        }

        $data['is_choose'] = false;
        $data['is_guarantee'] = false;
        $data['href'] = $this->url->link('information/buyers');
        $data['href_guarantee'] = $this->url->link('information/buyers', 'content=guarantee');
        $data['href_choose'] = $this->url->link('information/buyers', 'content=choose');

        if (isset($this->request->get['content'])) {
            if ($this->request->get['content'] == "guarantee") {
                $data['is_guarantee'] = true;
            } else if ($this->request->get['content'] == "choose") {
                $data['is_choose'] = true;
            }
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/buyers', $data));
    }
}