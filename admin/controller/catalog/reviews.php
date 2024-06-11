<?php

class ControllerCatalogReviews extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/reviews');

        $this->getList();
    }

    public function add()
    {
        $this->load->language('catalog/review');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/review');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_review->addReview($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_product'])) {
                $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit()
    {

        $this->load->language('catalog/reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/reviews');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_reviews->editReview($this->request->get['reviews_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('catalog/review');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/review');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $review_id) {
                $this->model_catalog_review->deleteReview($review_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['filter_product'])) {
                $url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_author'])) {
                $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['filter_status'])) {
                $url .= '&filter_status=' . $this->request->get['filter_status'];
            }

            if (isset($this->request->get['filter_date_added'])) {
                $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList()
    {

        // if (isset($this->request->get['filter_product'])) {
        // 	$filter_product = $this->request->get['filter_product'];
        // } else {
        // 	$filter_product = '';
        // }

        // if (isset($this->request->get['filter_author'])) {
        // 	$filter_author = $this->request->get['filter_author'];
        // } else {
        // 	$filter_author = '';
        // }

        // if (isset($this->request->get['filter_status'])) {
        // 	$filter_status = $this->request->get['filter_status'];
        // } else {
        // 	$filter_status = '';
        // }

        // if (isset($this->request->get['filter_date_added'])) {
        // 	$filter_date_added = $this->request->get['filter_date_added'];
        // } else {
        // 	$filter_date_added = '';
        // }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'DESC';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'r.date_added';
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        // if (isset($this->request->get['filter_product'])) {
        // 	$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_author'])) {
        // 	$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_status'])) {
        // 	$url .= '&filter_status=' . $this->request->get['filter_status'];
        // }

        // if (isset($this->request->get['filter_date_added'])) {
        // 	$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        // }

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
            'href' => $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/review/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/review/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['reviews'] = array();

        $filter_data = array(
            // 'filter_product'    => $filter_product,
            // 'filter_author'     => $filter_author,
            // 'filter_status'     => $filter_status,
            // 'filter_date_added' => $filter_date_added,
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $review_total = $this->model_catalog_reviews->getTotalReviews($filter_data);

        $results = $this->model_catalog_reviews->getReviews($filter_data);

        foreach ($results as $result) {

            $photos = $this->model_catalog_reviews->getPhotos($result['reviews_id']);

            $images = [];
            $this->load->model('tool/image');
            foreach ($photos as $photo) {
                //$images[] = $this->model_tool_image->resize($photo['image'], 60, 40);
                if ($photo['image']) {
                    $images[] = $this->model_tool_image->resize($photo['image'], 120, 90);
                } else {
                    $images[] = $this->model_tool_image->resize('placeholder.png', 120, 90);
                }
            }

            $data['reviews'][] = array(
                'reviews_id' => $result['reviews_id'],
                'author' => $result['author'],
                'email' => $result['email'],
                'phone' => $result['phone'],
                'text' => $result['text'],
                'rating' => $result['rating'],
                'images' => $images,
                'status' => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'edit' => $this->url->link('catalog/reviews/edit', 'user_token=' . $this->session->data['user_token'] . '&reviews_id=' . $result['reviews_id'] . $url, true)
            );
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

        // if (isset($this->request->get['filter_product'])) {
        // 	$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_author'])) {
        // 	$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_status'])) {
        // 	$url .= '&filter_status=' . $this->request->get['filter_status'];
        // }

        // if (isset($this->request->get['filter_date_added'])) {
        // 	$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        // }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_author'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=r.author' . $url, true);
        $data['sort_email'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=r.email' . $url, true);
        $data['sort_phone'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=r.phone' . $url, true);
        $data['sort_status'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=r.status' . $url, true);
        $data['sort_date_added'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . '&sort=r.date_added' . $url, true);

        $url = '';

        // if (isset($this->request->get['filter_product'])) {
        // 	$url .= '&filter_product=' . urlencode(html_entity_decode($this->request->get['filter_product'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_author'])) {
        // 	$url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        // }

        // if (isset($this->request->get['filter_status'])) {
        // 	$url .= '&filter_status=' . $this->request->get['filter_status'];
        // }

        // if (isset($this->request->get['filter_date_added'])) {
        // 	$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        // }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $review_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($review_total - $this->config->get('config_limit_admin'))) ? $review_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $review_total, ceil($review_total / $this->config->get('config_limit_admin')));

        // $data['filter_product'] = $filter_product;
        // $data['filter_author'] = $filter_author;
        // $data['filter_status'] = $filter_status;
        // $data['filter_date_added'] = $filter_date_added;

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/reviews_list', $data));
    }

    protected function getForm()
    {
        $data['text_form'] = $this->language->get('text_edit');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['author'])) {
            $data['error_author'] = $this->error['author'];
        } else {
            $data['error_author'] = '';
        }

        if (isset($this->error['text'])) {
            $data['error_text'] = $this->error['text'];
        } else {
            $data['error_text'] = '';
        }

        if (isset($this->error['answer'])) {
            $data['error_answer'] = $this->error['answer'];
        } else {
            $data['error_answer'] = '';
        }

        $url = '';

        if (isset($this->request->get['filter_author'])) {
            $url .= '&filter_author=' . urlencode(html_entity_decode($this->request->get['filter_author'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        if (isset($this->request->get['filter_date_added'])) {
            $url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
        }

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
            'href' => $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['action'] = $this->url->link('catalog/reviews/edit', 'user_token=' . $this->session->data['user_token'] . '&reviews_id=' . $this->request->get['reviews_id'] . $url, true);

        $data['cancel'] = $this->url->link('catalog/reviews', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['reviews_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $review_info = $this->model_catalog_reviews->getReview($this->request->get['reviews_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['author'])) {
            $data['author'] = $this->request->post['author'];
        } elseif (!empty($review_info)) {
            $data['author'] = $review_info['author'];
        } else {
            $data['author'] = '';
        }

        if (isset($this->request->post['text'])) {
            $data['text'] = $this->request->post['text'];
        } elseif (!empty($review_info)) {
            $data['text'] = $review_info['text'];
        } else {
            $data['text'] = '';
        }

        if (isset($this->request->post['answer'])) {
            $data['answer'] = $this->request->post['answer'];
        } elseif (!empty($review_info)) {
            $data['answer'] = $review_info['answer'];
        } else {
            $data['answer'] = '';
        }

        if (isset($this->request->post['date_added'])) {
            $data['date_added'] = $this->request->post['date_added'];
        } elseif (!empty($review_info)) {
            $data['date_added'] = ($review_info['date_added'] != '0000-00-00 00:00' ? $review_info['date_added'] : '');
        } else {
            $data['date_added'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($review_info)) {
            $data['status'] = $review_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/reviews_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/reviews')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['author']) < 2) || (utf8_strlen($this->request->post['author']) > 64)) {
            $this->error['author'] = $this->language->get('error_author');
        }

        if (utf8_strlen($this->request->post['text']) < 1) {
            $this->error['text'] = $this->language->get('error_text');
        }

        return !$this->error;
    }

    protected function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'catalog/review')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function change_status()
    {
        $data = [];

        if (isset($this->request->get['reviews_id']) && $this->request->get['reviews_id'] != "") {
            $this->load->model('catalog/reviews');
            $this->model_catalog_reviews->changeStatusReview($this->request->get['reviews_id']);
        }

        $this->response->setOutput($this->load->view('catalog/reviews_list', $data));
    }

    public function delete_review()
    {
        $data = [];

        if (isset($this->request->get['reviews_id']) && $this->request->get['reviews_id'] != "") {
            $this->load->model('catalog/reviews');
            $this->model_catalog_reviews->deleteReview($this->request->get['reviews_id']);
        }

        $this->response->setOutput($this->load->view('catalog/reviews_list', $data));
    }

    public function addReview()
    {

        $json = array();

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
                $json['error'] = $this->language->get('error_name');
            }

            if ((utf8_strlen($this->request->post['phone']) < 9) || (utf8_strlen($this->request->post['phone']) > 10)) {
                $json['error'] = $this->language->get('error_phone');
            }

            if ((utf8_strlen($this->request->post['email']) < 3) || (utf8_strlen($this->request->post['email']) > 25)) {
                $json['error'] = $this->language->get('error_email');
            }

            if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
                $json['error'] = $this->language->get('error_text');
            }

            if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
                $json['error'] = $this->language->get('error_rating');
            }

            //// Captcha
            //if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
            //    $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');
            //
            //    if ($captcha) {
            //        $json['error'] = $captcha;
            //    }
            //}

            if (!isset($json['error'])) {
                $this->load->model('catalog/review');

                $this->model_information_review->addReview($this->request->get['product_id'], $this->request->post);

                $json['success'] = $this->language->get('text_success');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
