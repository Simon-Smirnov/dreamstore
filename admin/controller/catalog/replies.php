<?php

class ControllerCatalogReplies extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/replies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/reply');

        $this->getList();
    }

    public function delete()
    {
        $this->load->language('catalog/replies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/reply');

        if (isset($this->request->post['selected'])) {
            foreach ($this->request->post['selected'] as $reply_id) {
                $this->model_catalog_reply->deleteReply($reply_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . $url, true));
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

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'phone';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'date_added';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'DESC';
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/replies/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/replies/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['replies'] = array();

        $filter_data = array(
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $category_by_id = array();

        $replies_total = $this->model_catalog_reply->getTotalReplies($filter_data);

        $results = $this->model_catalog_reply->getReplies($filter_data);

        $data['replies'] = [];

        $this->load->model('catalog/vacancy');

        foreach ($results as $result) {

            $vacancyName = $this->model_catalog_vacancy->getVacancyName($result['vacancy_id']);
            $files = $this->model_catalog_reply->getReplyFiles($result['reply_id']);

            $data['replies'][] = [
                'reply_id' => $result['reply_id'],
                'vacancy' => $vacancyName,
                'name' => $result['name'],
                'phone' => $result['phone'],
                'email' => $result['email'],
                'message' => $result['message'],
                'date_added' => $result['date_added'],
                'files' => $files
            ];
        }

        $data['user_token'] = $this->session->data['user_token'];

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

        $data['sort_vacancy_id'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=vacancy_id' . $url, true);
        $data['sort_name'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
        $data['sort_phone'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=phone' . $url, true);
        $data['sort_email'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=email' . $url, true);
        $data['sort_date_added'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);
        $data['sort_order'] = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $replies_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/replies', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($replies_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($replies_total - $this->config->get('config_limit_admin'))) ? $replies_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $replies_total, ceil($replies_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/replies_list', $data));
    }

    protected function urlSortAndPage()
    {
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

        return $url;
    }
}
