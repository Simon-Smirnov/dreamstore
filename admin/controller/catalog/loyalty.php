<?php

class ControllerCatalogLoyalty extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/loyalty');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/loyalty');

        $this->getList();
    }

    public function add()
    {
        $this->load->language('catalog/loyalty');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/loyalty');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_loyalty->addLoyalty($this->request->post);

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

            $this->response->redirect($this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('catalog/loyalty');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/loyalty');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_loyalty->editLoyalty($this->request->get['loyalty_id'], $this->request->post);

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

            $this->response->redirect($this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('catalog/loyalty');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/loyalty');

        if (isset($this->request->post['selected'])) {
            foreach ($this->request->post['selected'] as $loyalty_id) {
                $this->model_catalog_loyalty->deleteLoyalty($loyalty_id);
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

            $this->response->redirect($this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList()
    {
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

        $data['add'] = $this->url->link('catalog/loyalty/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/loyalty/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['loyalties'] = array();

        $filter_data = array(
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $loyalty_total = $this->model_catalog_loyalty->getTotalLoyalties();

        $results = $this->model_catalog_loyalty->getLoyalties($filter_data);

        foreach ($results as $result) {
            $data['loyalties'][] = array(
                'loyalty_id' => $result['loyalty_id'],
                'title' => $result['title'],
                'sort_order' => $result['sort_order'],
                'edit' => $this->url->link('catalog/loyalty/edit', 'user_token=' . $this->session->data['user_token'] . '&loyalty_id=' . $result['loyalty_id'], true)
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

        $data['sort_title'] = $this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . '&sort=title' . $url, true);
        $data['sort_sort_order'] = $this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $loyalty_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($loyalty_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($loyalty_total - $this->config->get('config_limit_admin'))) ? $loyalty_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $loyalty_total, ceil($loyalty_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/loyalty_list', $data));
    }

    protected function getForm()
    {

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

        if (isset($this->error['description'])) {
            $data['error_description'] = $this->error['description'];
        } else {
            $data['error_description'] = array();
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

        if (!isset($this->request->get['loyalty_id'])) {
            $data['action'] = $this->url->link('catalog/loyalty/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/loyalty/edit', 'user_token=' . $this->session->data['user_token'] . '&loyalty_id=' . $this->request->get['loyalty_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/loyalty', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['loyalty_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $loyalty_info = $this->model_catalog_loyalty->getLoyalty($this->request->get['loyalty_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['title'])) {
            $data['title'] = $this->request->post['title'];
        } elseif (!empty($loyalty_info)) {
            $data['title'] = $loyalty_info['title'];
        } else {
            $data['title'] = '';
        }

        if (isset($this->request->post['description'])) {
            $data['description'] = $this->request->post['description'];
        } elseif (!empty($loyalty_info)) {
            $data['description'] = $loyalty_info['description'];
        } else {
            $data['description'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($loyalty_info)) {
            $data['status'] = $loyalty_info['status'];
        } else {
            $data['status'] = true;
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($loyalty_info)) {
            $data['sort_order'] = $loyalty_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/loyalty_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/loyalty')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 256)) {
            $this->error['title'] = $this->language->get('error_title');
        }

        if ((utf8_strlen($this->request->post['description']) < 1)) {
            $this->error['description'] = $this->language->get('error_description');
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