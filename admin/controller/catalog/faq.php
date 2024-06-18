<?php

class ControllerCatalogFaq extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        $this->getList();
    }

    public function add()
    {
        $this->load->language('catalog/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_faq->addFaq($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function addanswer()
    {
        $this->load->language('catalog/faq_answer');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateFormAnswer()) {

            $this->model_catalog_faq->addFaqAnswer($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $this->request->post['parent_id'] . $url, true));
        }

        $this->getFormAnswer();
    }

    public function edit()
    {
        $this->load->language('catalog/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_faq->editFaq($this->request->get['faq_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function editanswer()
    {
        $this->load->language('catalog/faq_answer');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateFormAnswer()) {
            $this->model_catalog_faq->editFaqAnswer($this->request->get['faq_answer_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $this->request->post['parent_id'] . $url, true));
        }

        $this->getFormAnswer();
    }

    public function delete()
    {
        $this->load->language('catalog/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (isset($this->request->post['selected'])) {
            foreach ($this->request->post['selected'] as $faq_id) {
                $this->model_catalog_faq->deleteFaq($faq_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    public function deleteanswer()
    {
        $this->load->language('catalog/faq');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/faq');

        if (isset($this->request->post['selected'])) {
            foreach ($this->request->post['selected'] as $faq_answer_id) {
                $this->model_catalog_faq->deleteFaqAnswer($faq_answer_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList()
    {
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'name';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/faq/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/faq/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['faqs'] = array();

        $filter_data = array(
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $faq_total = $this->model_catalog_faq->getTotalFaqs();

        $results = $this->model_catalog_faq->getFaqs($filter_data);

        foreach ($results as $result) {
            $data['faqs'][] = array(
                'faq_id' => $result['faq_id'],
                'name' => $result['name'],
                'sort_order' => $result['sort_order'],
                'change' => $this->url->link('catalog/faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $result['faq_id'], true),
                'edit' => $this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $result['faq_id'], true)
            );
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name'] = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
        $data['sort_sort_order'] = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $faq_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($faq_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($faq_total - $this->config->get('config_limit_admin'))) ? $faq_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $faq_total, ceil($faq_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/faq_list', $data));
    }

    public function answer()
    {

        $this->load->language('catalog/faq_answer');

        $this->document->setTitle($this->language->get('heading_title'));

        $parent_id = $this->request->get['faq_id'];

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'title';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/faq/addanswer', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $parent_id . $url, true);
        $data['delete'] = $this->url->link('catalog/faq/deleteanswer', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['faqs'] = array();

        $filter_data = array(
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $this->load->model('catalog/faq');

        $faq_answer_total = $this->model_catalog_faq->getTotalFaqAnswers($parent_id);

        $results = $this->model_catalog_faq->getFaqAnswers($parent_id, $filter_data);

        foreach ($results as $result) {
            $data['faq_answers'][] = array(
                'faq_answer_id' => $result['faq_answer_id'],
                'title' => $result['title'],
                'answer' => $result['answer'],
                'sort_order' => $result['sort_order'],
                'edit' => $this->url->link('catalog/faq/editanswer', 'user_token=' . $this->session->data['user_token'] . '&faq_answer_id=' . $result['faq_answer_id'] . '&faq_id=' . $parent_id . $url, true)
            );
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_title'] = $this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&sort=title&faq_id=' . $parent_id . $url, true);
        $data['sort_sort_order'] = $this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order&faq_id=' . $parent_id . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $faq_answer_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/faq/answer', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $parent_id . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($faq_answer_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($faq_answer_total - $this->config->get('config_limit_admin'))) ? $faq_answer_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $faq_answer_total, ceil($faq_answer_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/faq_answer_list', $data));
    }

    protected function getForm()
    {

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = array();
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['faq_id'])) {
            $data['action'] = $this->url->link('catalog/faq/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/faq/edit', 'user_token=' . $this->session->data['user_token'] . '&faq_id=' . $this->request->get['faq_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['faq_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $faq_info = $this->model_catalog_faq->getFaq($this->request->get['faq_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($faq_info)) {
            $data['name'] = $faq_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($faq_info)) {
            $data['status'] = $faq_info['status'];
        } else {
            $data['status'] = true;
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($faq_info)) {
            $data['sort_order'] = $faq_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/faq_form', $data));
    }

    protected function getFormAnswer()
    {
        $data['text_form'] = !isset($this->request->get['information_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['title'])) {
            $data['error_title'] = $this->error['title'];
        } else {
            $data['error_title'] = array();
        }

        if (isset($this->error['answer'])) {
            $data['error_answer'] = $this->error['answer'];
        } else {
            $data['error_answer'] = array();
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['faq_id'] = '0';
        if (isset($this->request->get['faq_id'])) {
            $data['faq_id'] = $this->request->get['faq_id'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['faq_answer_id'])) {
            $data['action'] = $this->url->link('catalog/faq/addanswer', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/faq/editanswer', 'user_token=' . $this->session->data['user_token'] . '&faq_answer_id=' . $this->request->get['faq_answer_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/faq', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['faq_answer_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $faq_answer_info = $this->model_catalog_faq->getFaqAnswer($this->request->get['faq_answer_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['title'])) {
            $data['title'] = $this->request->post['title'];
        } elseif (!empty($faq_answer_info)) {
            $data['title'] = $faq_answer_info['title'];
        } else {
            $data['title'] = '';
        }

        if (isset($this->request->post['answer'])) {
            $data['answer'] = $this->request->post['answer'];
        } elseif (!empty($faq_answer_info)) {
            $data['answer'] = $faq_answer_info['answer'];
        } else {
            $data['answer'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($faq_answer_info)) {
            $data['status'] = $faq_answer_info['status'];
        } else {
            $data['status'] = true;
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($faq_answer_info)) {
            $data['sort_order'] = $faq_answer_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }

        $this->load->model('design/layout');

        $data['layouts'] = $this->model_design_layout->getLayouts();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/faq_answer_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/faq')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 128)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    protected function validateFormAnswer()
    {

        if (!$this->user->hasPermission('modify', 'catalog/faq')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (utf8_strlen($this->request->post['title']) < 1 || utf8_strlen($this->request->post['title']) > 128) {
            $this->error['title'] = $this->language->get('error_title');
        }

        if (utf8_strlen($this->request->post['answer']) < 1) {
            $this->error['answer'] = $this->language->get('error_answer');
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    protected function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'catalog/information')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $this->load->model('setting/store');

        foreach ($this->request->post['selected'] as $information_id) {
            if ($this->config->get('config_account_id') == $information_id) {
                $this->error['warning'] = $this->language->get('error_account');
            }

            if ($this->config->get('config_checkout_id') == $information_id) {
                $this->error['warning'] = $this->language->get('error_checkout');
            }

            if ($this->config->get('config_return_id') == $information_id) {
                $this->error['warning'] = $this->language->get('error_return');
            }

            $store_total = $this->model_setting_store->getTotalStoresByInformationId($information_id);

            if ($store_total) {
                $this->error['warning'] = sprintf($this->language->get('error_store'), $store_total);
            }
        }

        return !$this->error;
    }

}
