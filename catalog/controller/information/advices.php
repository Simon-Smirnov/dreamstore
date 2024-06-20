<?php

class ControllerInformationAdvices extends Controller
{

    public function index()
    {
        $this->load->language('information/advices');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/advices')
        );

        $this->load->model('information/advice');
        $advicesGroup = $this->model_information_advice->getGroupAdvices();

        $data['advices'] = [];
        $id = 0;
        foreach ($advicesGroup as $advice) {
            $results = $this->model_information_advice->getAllAdvices($advice['advice_id']);

            $advices = [];
            foreach ($results as $result) {
                $advices[] = [
                    'title' => $result['title'],
                    'answer' => html_entity_decode($result['answer'], ENT_QUOTES, 'UTF-8')
                ];
            }

            $data['advices'][] = [
                'id' => $id++,
                'advice_id' => $advice['advice_id'],
                'name' => $advice['name'],
                'children' => $advices
            ];
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/advices', $data));
    }
}