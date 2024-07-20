<?php

class ControllerCatalogBlog extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/blog');

        $this->getList();
    }

    public function add()
    {
        $this->load->language('catalog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/blog');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

            $data = $this->request->post;

            $data['video'] = "";

            if (isset($this->request->files['video']) && !empty($this->request->files['video']['name'])) {
                $filename = basename(html_entity_decode($this->request->files['video']['name'], ENT_QUOTES, 'UTF-8'));
                if (utf8_strlen($filename) > 128) {
                    $filename = mb_substr($filename, -128, 128, 'UTF-8');
                }
                $file = token(32) . '.' . $filename;
                $tmpName = $this->request->files['video']['tmp_name'];

                move_uploaded_file($tmpName, DIR_IMAGE . 'catalog/blogs/' . $file);

                $data['video'] = 'catalog/blogs/' . $file;
            }

            $this->model_catalog_blog->addBlog($data);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('catalog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/blog');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $data = $this->request->post;

            $data['video'] = "";

            if (isset($this->request->files['video']) && !empty($this->request->files['video']['name'])) {
                $filename = basename(html_entity_decode($this->request->files['video']['name'], ENT_QUOTES, 'UTF-8'));
                if (utf8_strlen($filename) > 128) {
                    $filename = mb_substr($filename, -128, 128, 'UTF-8');
                }
                $file = token(32) . '.' . $filename;
                $tmpName = $this->request->files['video']['tmp_name'];

                move_uploaded_file($tmpName, DIR_IMAGE . 'catalog/blogs/' . $file);

                $data['video'] = 'catalog/blogs/' . $file;
            }

            $this->model_catalog_blog->editBlog($this->request->get['blog_id'], $data);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('catalog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/blog');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {

            foreach ($this->request->post['selected'] as $blog_id) {
                $this->model_catalog_blog->deleteBlog($blog_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    public function copy()
    {
        $this->load->language('catalog/blog');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/blog');

        if (isset($this->request->post['selected']) && $this->validateCopy()) {
            foreach ($this->request->post['selected'] as $blog_id) {
                $this->model_catalog_blog->copyBlog($blog_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList()
    {
        if (isset($this->request->get['filter_title'])) {
            $filter_title = $this->request->get['filter_title'];
        } else {
            $filter_title = null;
        }

        if (isset($this->request->get['filter_category'])) {
            $filter_category = $this->request->get['filter_category'];
        } else {
            $filter_category = null;
        }

        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
        } else {
            $filter_status = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'date_blog';
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
        $url .= $this->urlFilter();
        $url .= $this->urlSortAndPage();

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/blog/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['copy'] = $this->url->link('catalog/blog/copy', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/blog/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['blogs'] = array();

        $filter_data = array(
            'filter_title' => $filter_title,
            'filter_category' => $filter_category,
            'filter_status' => $filter_status,
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $category_by_id = array();

        $this->load->model('tool/image');
        $this->load->model('catalog/category');

        $blog_total = $this->model_catalog_blog->getTotalBlogs($filter_data);

        $results = $this->model_catalog_blog->getBlogs($filter_data);

        foreach ($results as $result) {

            $blog_category = $this->model_catalog_blog->getBlogCategory($result['blog_category_id']);

            $data['blogs'][] = array(
                'blog_id' => $result['blog_id'],
                'category' => $blog_category,
                'title' => $result['title'],
                'theme' => $result['theme'],
                'description' => $result['description'],
                'title_h2' => $result['title_h2'],
                'title_expert' => $result['title_expert'],
                'description_expert' => $result['description_expert'],
                'name_expert' => $result['name_expert'],
                'title_slider' => $result['title_slider'],
                'title_video' => $result['title_video'],
                'video' => $result['video'],
                'status' => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'edit' => $this->url->link('catalog/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $result['blog_id'] . $url, true)
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
        $url .= $this->urlFilter();

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_category'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . '&sort=blog_category_id' . $url, true);
        $data['sort_title'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . '&sort=title' . $url, true);
        $data['sort_theme'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . '&sort=theme' . $url, true);
        $data['sort_status'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
        $data['sort_order'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

        $url = '';
        $url .= $this->urlFilter();

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $blog_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($blog_total - $this->config->get('config_limit_admin'))) ? $blog_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $blog_total, ceil($blog_total / $this->config->get('config_limit_admin')));

        $data['filter_category'] = $filter_category;
        $data['filter_title'] = $filter_title;
        $data['filter_status'] = $filter_status;

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/blog_list', $data));
    }

    protected function getForm()
    {
        $data['text_form'] = !isset($this->request->get['blog_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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

        if (isset($this->error['theme'])) {
            $data['error_theme'] = $this->error['theme'];
        } else {
            $data['error_theme'] = array();
        }

        if (isset($this->error['title_h2'])) {
            $data['error_title_h2'] = $this->error['title_h2'];
        } else {
            $data['error_title_h2'] = array();
        }

        if (isset($this->error['title_expert'])) {
            $data['error_title_expert'] = $this->error['title_expert'];
        } else {
            $data['error_title_expert'] = array();
        }

        if (isset($this->error['name_expert'])) {
            $data['error_name_expert'] = $this->error['name_expert'];
        } else {
            $data['error_name_expert'] = array();
        }

        if (isset($this->error['title_slider'])) {
            $data['error_title_slider'] = $this->error['title_slider'];
        } else {
            $data['error_title_slider'] = array();
        }

        if (isset($this->error['title_video'])) {
            $data['error_title_video'] = $this->error['title_video'];
        } else {
            $data['error_title_video'] = array();
        }

        $url = '';
        $url .= $this->urlFilter();
        $url .= $this->urlSortAndPage();

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['blog_id'])) {
            $data['action'] = $this->url->link('catalog/blog/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/blog/edit', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $this->request->get['blog_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/blog', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $this->load->model('catalog/blog');
        if (isset($this->request->get['blog_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $blog_info = $this->model_catalog_blog->getBlog($this->request->get['blog_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['title'])) {
            $data['title'] = $this->request->post['title'];
        } elseif (!empty($blog_info)) {
            $data['title'] = $blog_info['title'];
        } else {
            $data['title'] = '';
        }

        if (isset($this->request->post['theme'])) {
            $data['theme'] = $this->request->post['theme'];
        } elseif (!empty($blog_info)) {
            $data['theme'] = $blog_info['theme'];
        } else {
            $data['theme'] = '';
        }

        if (isset($this->request->post['title_h2'])) {
            $data['title_h2'] = $this->request->post['title_h2'];
        } elseif (!empty($blog_info)) {
            $data['title_h2'] = $blog_info['title_h2'];
        } else {
            $data['title_h2'] = '';
        }

        if (isset($this->request->post['description'])) {
            $data['description'] = $this->request->post['description'];
        } elseif (!empty($blog_info)) {
            $data['description'] = $blog_info['description'];
        } else {
            $data['description'] = '';
        }

        if (isset($this->request->post['title_expert'])) {
            $data['title_expert'] = $this->request->post['title_expert'];
        } elseif (!empty($blog_info)) {
            $data['title_expert'] = $blog_info['title_expert'];
        } else {
            $data['title_expert'] = '';
        }

        if (isset($this->request->post['description_expert'])) {
            $data['description_expert'] = $this->request->post['description_expert'];
        } elseif (!empty($blog_info)) {
            $data['description_expert'] = $blog_info['description_expert'];
        } else {
            $data['description_expert'] = '';
        }

        if (isset($this->request->post['name_expert'])) {
            $data['name_expert'] = $this->request->post['name_expert'];
        } elseif (!empty($blog_info)) {
            $data['name_expert'] = $blog_info['name_expert'];
        } else {
            $data['name_expert'] = '';
        }

        if (isset($this->request->post['title_slider'])) {
            $data['title_slider'] = $this->request->post['title_slider'];
        } elseif (!empty($blog_info)) {
            $data['title_slider'] = $blog_info['title_slider'];
        } else {
            $data['title_slider'] = '';
        }

        if (isset($this->request->post['title_video'])) {
            $data['title_video'] = $this->request->post['title_video'];
        } elseif (!empty($blog_info)) {
            $data['title_video'] = $blog_info['title_video'];
        } else {
            $data['title_video'] = '';
        }

        if (isset($this->request->post['category'])) {
            $data['category'] = $this->request->post['category'];
        } elseif (!empty($blog_info)) {
            $data['category'] = $blog_info['blog_category_id'];
        } else {
            $data['category'] = '';
        }

        $data['categories'] = $this->model_catalog_blog->getBlogCategories();

        if (isset($this->request->post['date_blog'])) {
            $data['date_blog'] = $this->request->post['date_blog'];
        } elseif (!empty($blog_info)) {
            $timestamp = strtotime($blog_info['date_blog']);
            $data['date_blog'] = date('Y-m-d', $timestamp);
        } else {
            $data['date_blog'] = date('Y-m-d');
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($blog_info)) {
            $data['sort_order'] = $blog_info['sort_order'];
        } else {
            $data['sort_order'] = 0;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($blog_info)) {
            $data['status'] = $blog_info['status'];
        } else {
            $data['status'] = true;
        }

        // Image
        if (isset($this->request->post['image'])) {
            $data['image'] = $this->request->post['image'];
        } elseif (!empty($blog_info)) {
            $data['image'] = $blog_info['image'];
        } else {
            $data['image'] = '';
        }

        // Image
        if (isset($this->request->post['video'])) {
            $data['video'] = $this->request->post['video'];
        } elseif (!empty($blog_info)) {
            $data['video'] = $blog_info['video'];
        } else {
            $data['video'] = '';
        }

        $this->load->model('tool/image');

        if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
        } elseif (!empty($blog_info) && is_file(DIR_IMAGE . $blog_info['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($blog_info['image'], 100, 100);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        // Images
        if (isset($this->request->post['blog_image'])) {
            $blog_images = $this->request->post['blog_image'];
        } elseif (isset($this->request->get['blog_id'])) {
            $blog_images = $this->model_catalog_blog->getBlogImages($this->request->get['blog_id']);
        } else {
            $blog_images = array();
        }

        $data['blog_images'] = array();

        foreach ($blog_images as $blog_image) {
            if (is_file(DIR_IMAGE . $blog_image['image'])) {
                $image = $blog_image['image'];
                $thumb = $blog_image['image'];
            } else {
                $image = '';
                $thumb = 'no_image.png';
            }

            $data['blog_images'][] = array(
                'image' => $image,
                'thumb' => $this->model_tool_image->resize($thumb, 100, 100),
                'sort_order' => $blog_image['sort_order']
            );
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/blog_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/blog')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 128)) {
            $this->error['title'] = $this->language->get('error_title');
        }

        if ((utf8_strlen($this->request->post['theme']) > 128)) {
            $this->error['theme'] = $this->language->get('error_theme');
        }

        if ((utf8_strlen($this->request->post['title_h2']) > 128)) {
            $this->error['title_h2'] = $this->language->get('error_title_h2');
        }

        if ((utf8_strlen($this->request->post['title_expert']) > 128)) {
            $this->error['title_expert'] = $this->language->get('title_expert');
        }

        if ((utf8_strlen($this->request->post['name_expert']) > 128)) {
            $this->error['name_expert'] = $this->language->get('name_expert');
        }

        if ((utf8_strlen($this->request->post['title_slider']) > 128)) {
            $this->error['title_slider'] = $this->language->get('title_slider');
        }

        if ((utf8_strlen($this->request->post['title_video']) > 128)) {
            $this->error['title_video'] = $this->language->get('title_video');
        }

        if (isset($this->request->post['video']) && trim($this->request->post['title_video']) != '') {
            $this->error['title_video'] = $this->language->get('title_video');
        }

        if (isset($this->request->files['video']) && !empty($this->request->files['video']['name'])) {

            if (!is_file($this->request->files['video']['tmp_name'])) {
                $this->error['video'] = 'Файл не существует';
            }

            $content = file_get_contents($this->request->files['video']['tmp_name']);

            if (preg_match('/\<\?php/i', $content)) {
                $this->error['video'] = 'Нельзя использовать PHP в изображении';
            }

            $filetypes = ['mp4'];
            // Sanitize the filename
            $filename = basename(html_entity_decode($this->request->files['video']['name'], ENT_QUOTES, 'UTF-8'));

            if (!is_file($this->request->files['video']['name'])) {
                if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $filetypes)) {
                    $this->error['video'] = 'Неверный тип файла';
                }
            }

            $mime_allowed = ['video/mp4'];
            if (!in_array($this->request->files['video']['type'], $mime_allowed)) {
                $this->error['video'] = 'Неверный тип файла';
            }

            if ($this->request->files['video']['error'] != UPLOAD_ERR_OK) {
                $this->error['video'] = 'Ошибка загрузки файла';
            }

            if ($this->request->files['video']['size'] > 50000000) {
                $this->error['video'] = 'Видео должно весить не более 50мб';
            }
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    protected function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'catalog/blog')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function validateCopy()
    {
        if (!$this->user->hasPermission('modify', 'catalog/blog')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    protected function urlFilter()
    {
        $url = '';

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_model'])) {
            $url .= '&filter_model=' . urlencode(html_entity_decode($this->request->get['filter_model'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_manufacturer'])) {
            $url .= '&filter_manufacturer=' . $this->request->get['filter_manufacturer'];
        }

        if (isset($this->request->get['filter_category'])) {
            $url .= '&filter_category=' . $this->request->get['filter_category'];
        }

        if (isset($this->request->get['filter_price_min'])) {
            $url .= '&filter_price_min=' . $this->request->get['filter_price_min'];
        }
        if (isset($this->request->get['filter_price_max'])) {
            $url .= '&filter_price_max=' . $this->request->get['filter_price_max'];
        }

        if (isset($this->request->get['filter_quantity_min'])) {
            $url .= '&filter_quantity_min=' . $this->request->get['filter_quantity_min'];
        }
        if (isset($this->request->get['filter_quantity_max'])) {
            $url .= '&filter_quantity_max=' . $this->request->get['filter_quantity_max'];
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . $this->request->get['filter_status'];
        }

        return $url;
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

    public function autocomplete()
    {
        $json = array();

        if (isset($this->request->get['filter_title'])) {
            $this->load->model('catalog/blog');

            if (isset($this->request->get['filter_title'])) {
                $filter_title = $this->request->get['filter_title'];
            } else {
                $filter_title = '';
            }

            if (isset($this->request->get['limit'])) {
                $limit = (int)$this->request->get['limit'];
            } else {
                $limit = (int)$this->config->get('config_autocomplete_admin') > 0 ? (int)$this->config->get('config_autocomplete_admin') : 10;
            }

            $filter_data = array(
                'filter_title' => $filter_title,
                'start' => 0,
                'limit' => $limit
            );

            $results = $this->model_catalog_blog->getBlogs($filter_data);

            foreach ($results as $result) {

                $json[] = array(
                    'blog_id' => $result['blog_id'],
                    'title' => strip_tags(html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8')),
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function autocompleteCategory()
    {
        $json = array();

        if (isset($this->request->get['filter_category'])) {
            $this->load->model('catalog/blog');

            if (isset($this->request->get['filter_category'])) {
                $filter_category = $this->request->get['filter_category'];
            } else {
                $filter_category = '';
            }

            if (isset($this->request->get['limit'])) {
                $limit = (int)$this->request->get['limit'];
            } else {
                $limit = (int)$this->config->get('config_autocomplete_admin') > 0 ? (int)$this->config->get('config_autocomplete_admin') : 10;
            }

            $filter_data = array(
                'filter_category' => $filter_category,
                'start' => 0,
                'limit' => $limit
            );

            $results = $this->model_catalog_blog->getBlogCategories($filter_data);

            foreach ($results as $result) {

                $json[] = array(
                    'blog_category_id' => $result['blog_category_id'],
                    'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
