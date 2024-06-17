<?php

class ControllerCatalogVacancies extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('catalog/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/vacancy');

        $this->getList();
    }

    public function add()
    {
        $this->load->language('catalog/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/vacancy');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

            $this->model_catalog_vacancy->addVacancy($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('catalog/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/vacancy');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_vacancy->editVacancy($this->request->get['vacancy_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('catalog/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/vacancy');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $vacancy_id) {
                $this->model_catalog_vacancy->deleteVacancy($vacancy_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList()
    {

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'pd.name';
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

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/vacancies/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/vacancies/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['products'] = array();

        $filter_data = array(
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $category_by_id = array();

        $this->load->model('tool/image');
        $this->load->model('catalog/category');

        $vacancies_total = $this->model_catalog_vacancy->getTotalVacancies($filter_data);

        $results = $this->model_catalog_vacancy->getVacancies($filter_data);

        $data['vacancies'] = [];

        foreach ($results as $result) {
            $data['vacancies'][] = [
                'vacancy_id' => $result['vacancy_id'],
                'title' => $result['title'],
                'responsibility' => html_entity_decode($result['responsibility']),
                'requirements' => html_entity_decode($result['requirements']),
                'conditions' => html_entity_decode($result['conditions']),
                'status' => $result['status'],
                'sort_order' => $result['sort_order'],
                'date_added' => $result['date_added'],
                'edit' => $this->url->link('catalog/vacancies/edit', 'user_token=' . $this->session->data['user_token'] . '&vacancy_id=' . $result['vacancy_id'] . $url, true)
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

        $data['sort_title'] = $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . '&sort=title' . $url, true);
        $data['sort_status'] = $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
        $data['sort_order'] = $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $vacancies_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($vacancies_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($vacancies_total - $this->config->get('config_limit_admin'))) ? $vacancies_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $vacancies_total, ceil($vacancies_total / $this->config->get('config_limit_admin')));


        $this->load->model('catalog/manufacturer');
        $this->load->model('catalog/category');

        if (isset($filter_manufacturer)) {
            if ($filter_manufacturer == 0) {
                $data['filter_manufacturer_name'] = $this->language->get('text_no_manufacturer');
            } else {
                $manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($filter_manufacturer);

                if ($manufacturer_info) {
                    $data['filter_manufacturer_name'] = $manufacturer_info['name'];
                } else {
                    $data['filter_manufacturer_name'] = '';
                    $filter_manufacturer = null;
                }
            }
        }

        if (isset($filter_category)) {
            if ($filter_category == 0) {
                $data['filter_category_name'] = $this->language->get('text_no_category');
            } else {
                $category_info = $this->model_catalog_category->getCategory($filter_category);

                if ($category_info) {
                    $data['filter_category_name'] = $category_info['name'];
                } else {
                    $data['filter_category_name'] = '';
                    $filter_category = null;
                }
            }
        }

        $data['filter_name'] = $filter_name;
        $data['filter_model'] = $filter_model;
        $data['filter_manufacturer'] = $filter_manufacturer;
        $data['filter_category'] = $filter_category;
        $data['filter_price_min'] = $filter_price_min;
        $data['filter_price_max'] = $filter_price_max;
        $data['filter_quantity_min'] = $filter_quantity_min;
        $data['filter_quantity_max'] = $filter_quantity_max;
        $data['filter_status'] = $filter_status;

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/vacancies_list', $data));
    }

    protected function getForm()
    {
        $data['text_form'] = !isset($this->request->get['vacancy_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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

        $url = '';
        $url .= $this->urlSortAndPage();

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['vacancy_id'])) {
            $data['action'] = $this->url->link('catalog/vacancies/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/vacancies/edit', 'user_token=' . $this->session->data['user_token'] . '&vacancy_id=' . $this->request->get['vacancy_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['vacancy_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $vacancy_info = $this->model_catalog_vacancy->getVacancy($this->request->get['vacancy_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['title'])) {
            $data['title'] = $this->request->post['title'];
        } elseif (!empty($vacancy_info)) {
            $data['title'] = $vacancy_info['title'];
        } else {
            $data['title'] = "";
        }

        if (isset($this->request->post['responsibility'])) {
            $data['responsibility'] = $this->request->post['responsibility'];
        } elseif (!empty($vacancy_info)) {
            $data['responsibility'] = $vacancy_info['responsibility'];
        } else {
            $data['responsibility'] = "";
        }

        if (isset($this->request->post['requirements'])) {
            $data['requirements'] = $this->request->post['requirements'];
        } elseif (!empty($vacancy_info)) {
            $data['requirements'] = $vacancy_info['requirements'];
        } else {
            $data['requirements'] = "";
        }

        if (isset($this->request->post['conditions'])) {
            $data['conditions'] = $this->request->post['conditions'];
        } elseif (!empty($vacancy_info)) {
            $data['conditions'] = $vacancy_info['conditions'];
        } else {
            $data['conditions'] = "";
        }

        if (isset($this->request->post['date_modified'])) {
            $data['date_modified'] = $this->request->post['date_modified'];
        } elseif (!empty($product_info)) {
            $data['date_modified'] = ($product_info['date_modified'] != '0000-00-00') ? $product_info['date_modified'] : '';
        } else {
            $data['date_modified'] = date('Y-m-d');
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($vacancy_info)) {
            $data['sort_order'] = $vacancy_info['sort_order'];
        } else {
            $data['sort_order'] = 1;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($vacancy_info)) {
            $data['status'] = $vacancy_info['status'];
        } else {
            $data['status'] = true;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/vacancies_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/vacancies')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['title']) < 1) || (utf8_strlen($this->request->post['title']) > 128)) {
            $this->error['title'] = $this->language->get('error_title');
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    protected function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'catalog/vacancies')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
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

        if (isset($this->request->get['filter_name']) || isset($this->request->get['filter_model'])) {
            $this->load->model('catalog/product');
            $this->load->model('catalog/option');

            if (isset($this->request->get['filter_name'])) {
                $filter_name = $this->request->get['filter_name'];
            } else {
                $filter_name = '';
            }

            if (isset($this->request->get['filter_model'])) {
                $filter_model = $this->request->get['filter_model'];
            } else {
                $filter_model = '';
            }

            if (isset($this->request->get['limit'])) {
                $limit = (int)$this->request->get['limit'];
            } else {
                $limit = (int)$this->config->get('config_autocomplete_admin') > 0 ? (int)$this->config->get('config_autocomplete_admin') : 10;
            }

            $filter_data = array(
                'filter_name' => $filter_name,
                'filter_model' => $filter_model,
                'start' => 0,
                'limit' => $limit
            );

            $results = $this->model_catalog_product->getProducts($filter_data);

            foreach ($results as $result) {
                $option_data = array();

                $product_options = $this->model_catalog_product->getProductOptions($result['product_id']);

                foreach ($product_options as $product_option) {
                    $option_info = $this->model_catalog_option->getOption($product_option['option_id']);

                    if ($option_info) {
                        $product_option_value_data = array();

                        foreach ($product_option['product_option_value'] as $product_option_value) {
                            $option_value_info = $this->model_catalog_option->getOptionValue($product_option_value['option_value_id']);

                            if ($option_value_info) {
                                $product_option_value_data[] = array(
                                    'product_option_value_id' => $product_option_value['product_option_value_id'],
                                    'option_value_id' => $product_option_value['option_value_id'],
                                    'name' => $option_value_info['name'],
                                    'price' => (float)$product_option_value['price'] ? $this->currency->format($product_option_value['price'], $this->config->get('config_currency')) : false,
                                    'price_prefix' => $product_option_value['price_prefix']
                                );
                            }
                        }

                        $option_data[] = array(
                            'product_option_id' => $product_option['product_option_id'],
                            'product_option_value' => $product_option_value_data,
                            'option_id' => $product_option['option_id'],
                            'name' => $option_info['name'],
                            'type' => $option_info['type'],
                            'value' => $product_option['value'],
                            'required' => $product_option['required']
                        );
                    }
                }

                $json[] = array(
                    'product_id' => $result['product_id'],
                    'name' => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
                    'model' => $result['model'],
                    'option' => $option_data,
                    'price' => $result['price']
                );
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
