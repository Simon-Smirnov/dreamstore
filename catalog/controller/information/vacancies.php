<?php

class ControllerInformationVacancies extends Controller
{

    public function index()
    {
        $this->load->language('information/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/vacancies')
        );

        $this->load->model('information/vacancy');

        $results = $this->model_information_vacancy->getAllVacancies();

        $data['vacancies'] = [];

        if (!empty($results)) {
            foreach ($results as $result) {
                $data['vacancies'][] = array(
                    'title' => $result['title'],
                    //'responsibility' => html_entity_decode($result['responsibility']),
                    //'responsibility' => strip_tags(mb_substr($result['responsibility'], 0, 200)) . '...',
                    'responsibility' => mb_substr(strip_tags(html_entity_decode($result['responsibility'])), 0, 150) . '...',
                    //'requirements' => html_entity_decode($result['requirements']),
                    //'conditions' => html_entity_decode($result['conditions']),
                    'href' => $this->url->link('information/vacancies/one', 'vacancy_id=' . $result['vacancy_id'])
                );
            }
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/vacancies', $data));
    }

    public function one()
    {
        $this->load->language('information/vacancies');

        $this->load->model('information/vacancy');

        $result = $this->model_information_vacancy->getVacancy($this->request->get['vacancy_id']);

        $data['title'] = $result['title'];

        $this->document->setTitle($result['title']);

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/vacancies')
        );

        $data['breadcrumbs'][] = array(
            'text' => $result['title'],
            'href' => $this->url->link('information/vacancies/one', 'vacancy_id=' . $this->request->get['vacancy_id'])
        );


        $data['title'] = $result['title'];
        $data['responsibility'] = html_entity_decode($result['responsibility']);
        $data['requirements'] = html_entity_decode($result['requirements']);
        $data['conditions'] = html_entity_decode($result['conditions']);
        $data['telephone'] = $this->config->get('config_telephone');
        $data['telephone_for_link'] = str_replace(' ', '', $data['telephone'],);
        $data['email_for_store'] = nl2br($this->config->get('config_email'));
        $data['date_modified'] = $result['date_modified'];

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/vacancy', $data));
    }
}