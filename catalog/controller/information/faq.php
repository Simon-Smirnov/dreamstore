<?php

class ControllerInformationFaq extends Controller
{

    public function index()
    {
        $this->load->language('information/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/faq')
        );

        $this->load->model('information/faq');
        $faqsGroup = $this->model_information_faq->getGroupFaqs();

        $data['faqs'] = [];
        $id = 0;
        foreach ($faqsGroup as $faq) {
            $faqs = $this->model_information_faq->getAllFaqs($faq['faq_id']);
            $data['faqs'][] = [
                'id' => $id++,
                'faq_id' => $faq['faq_id'],
                'name' => $faq['name'],
                'children' => $faqs
            ];
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/faq', $data));
    }
}