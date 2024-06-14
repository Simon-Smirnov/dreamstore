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

        $this->load->model('catalog/product');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_product->addProduct($this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function edit()
    {
        $this->load->language('catalog/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/product');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_product->editProduct($this->request->get['product_id'], $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getForm();
    }

    public function delete()
    {
        $this->load->language('catalog/product');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/product');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $product_id) {
                $this->model_catalog_product->deleteProduct($product_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';
            $url .= $this->urlFilter();
            $url .= $this->urlSortAndPage();

            $this->response->redirect($this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true));
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

        $data['add'] = $this->url->link('catalog/product/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/product/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

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

        $product_total = $this->model_catalog_vacancy->getTotalVacancies($filter_data);

        $results = $this->model_catalog_vacancy->getVacancies($filter_data);

        $data['vacancies'] = [];

        foreach ($results as $result) {
            $data['vacancies'][] = [
                'id_vacancy' => $result['id_vacancy'],
                'title' => $result['title'],
                'responsibility' => $result['responsibility'],
                'requirements' => $result['requirements'],
                'conditions' => $result['conditions'],
                'status' => $result['status'],
                'sort_order' => $result['sort_order'],
                'date_added' => $result['date_added'],
                'edit' => $this->url->link('catalog/vacancies/edit', 'user_token=' . $this->session->data['user_token'] . '&id_vacancy=' . $result['id_vacancy'] . $url, true)
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
        $url .= $this->urlFilter();

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_name'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=pd.name' . $url, true);
        $data['sort_model'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=p.model' . $url, true);
        $data['sort_manufacturer'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=manufacturer' . $url, true);
        $data['sort_price'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=p.price' . $url, true);
        $data['sort_quantity'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=p.quantity' . $url, true);
        $data['sort_status'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=p.status' . $url, true);
        $data['sort_order'] = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . '&sort=p.sort_order' . $url, true);

        $url = '';
        $url .= $this->urlFilter();

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $product_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($product_total - $this->config->get('config_limit_admin'))) ? $product_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $product_total, ceil($product_total / $this->config->get('config_limit_admin')));


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
        $data['text_form'] = !isset($this->request->get['id_vacancy']) ? $this->language->get('text_add') : $this->language->get('text_edit');

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
            'href' => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        if (!isset($this->request->get['id_vacancy'])) {
            $data['action'] = $this->url->link('catalog/vacancies/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/vacancies/edit', 'user_token=' . $this->session->data['user_token'] . '&id_vacancy=' . $this->request->get['id_vacancy'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/vacancies', 'user_token=' . $this->session->data['user_token'] . $url, true);

        if (isset($this->request->get['id_vacancy']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $product_info = $this->model_catalog_vacancy->getVacancy($this->request->get['id_vacancy']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($product_info)) {
            $data['sort_order'] = $product_info['sort_order'];
        } else {
            $data['sort_order'] = 1;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($product_info)) {
            $data['status'] = $product_info['status'];
        } else {
            $data['status'] = true;
        }

        if (isset($this->request->post['product_special'])) {
            $product_specials = $this->request->post['product_special'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_specials = $this->model_catalog_product->getProductSpecials($this->request->get['product_id']);
        } else {
            $product_specials = array();
        }

        $data['product_specials'] = array();

        foreach ($product_specials as $product_special) {
            $data['product_specials'][] = array(
                'customer_group_id' => $product_special['customer_group_id'],
                'priority' => $product_special['priority'],
                'price' => $product_special['price'],
                'date_start' => ($product_special['date_start'] != '0000-00-00') ? $product_special['date_start'] : '',
                'date_end' => ($product_special['date_end'] != '0000-00-00') ? $product_special['date_end'] : ''
            );
        }

        // Image
        if (isset($this->request->post['image'])) {
            $data['image'] = $this->request->post['image'];
        } elseif (!empty($product_info)) {
            $data['image'] = $product_info['image'];
        } else {
            $data['image'] = '';
        }

        $this->load->model('tool/image');

        if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
        } elseif (!empty($product_info) && is_file(DIR_IMAGE . $product_info['image'])) {
            $data['thumb'] = $this->model_tool_image->resize($product_info['image'], 100, 100);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        // Images
        if (isset($this->request->post['product_image'])) {
            $product_images = $this->request->post['product_image'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_images = $this->model_catalog_product->getProductImages($this->request->get['product_id']);
        } else {
            $product_images = array();
        }

        $data['product_images'] = array();

        foreach ($product_images as $product_image) {
            if (is_file(DIR_IMAGE . $product_image['image'])) {
                $image = $product_image['image'];
                $thumb = $product_image['image'];
            } else {
                $image = '';
                $thumb = 'no_image.png';
            }

            $data['product_images'][] = array(
                'image' => $image,
                'thumb' => $this->model_tool_image->resize($thumb, 100, 100),
                'sort_order' => $product_image['sort_order']
            );
        }

        // Downloads
        $this->load->model('catalog/download');

        if (isset($this->request->post['product_download'])) {
            $product_downloads = $this->request->post['product_download'];
        } elseif (isset($this->request->get['product_id'])) {
            $product_downloads = $this->model_catalog_product->getProductDownloads($this->request->get['product_id']);
        } else {
            $product_downloads = array();
        }

        $data['product_downloads'] = array();

        foreach ($product_downloads as $download_id) {
            $download_info = $this->model_catalog_download->getDownload($download_id);

            if ($download_info) {
                $data['product_downloads'][] = array(
                    'download_id' => $download_info['download_id'],
                    'name' => $download_info['name']
                );
            }
        }

        if (isset($this->request->post['product_related'])) {
            $products = $this->request->post['product_related'];
        } elseif (isset($this->request->get['product_id'])) {
            $products = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);
        } else {
            $products = array();
        }

        $data['product_relateds'] = array();

        foreach ($products as $product_id) {
            $related_info = $this->model_catalog_product->getProduct($product_id);

            if ($related_info) {
                $data['product_relateds'][] = array(
                    'product_id' => $related_info['product_id'],
                    'name' => $related_info['name']
                );
            }
        }

        if (isset($this->request->post['points'])) {
            $data['points'] = $this->request->post['points'];
        } elseif (!empty($product_info)) {
            $data['points'] = $product_info['points'];
        } else {
            $data['points'] = '';
        }

        if (isset($this->request->post['product_reward'])) {
            $data['product_reward'] = $this->request->post['product_reward'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_reward'] = $this->model_catalog_product->getProductRewards($this->request->get['product_id']);
        } else {
            $data['product_reward'] = array();
        }

        if (isset($this->request->post['no_index'])) {
            $data['no_index'] = $this->request->post['no_index'];
        } elseif (isset($product_info['no_index'])) {
            $data['no_index'] = $product_info['no_index'];
        } else {
            $data['no_index'] = 0;
        }

        if (isset($this->request->post['product_seo_url'])) {
            $data['product_seo_url'] = $this->request->post['product_seo_url'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_seo_url'] = $this->model_catalog_product->getProductSeoUrls($this->request->get['product_id']);
        } else {
            $data['product_seo_url'] = array();
        }

        if (isset($this->request->post['product_layout'])) {
            $data['product_layout'] = $this->request->post['product_layout'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_layout'] = $this->model_catalog_product->getProductLayouts($this->request->get['product_id']);
        } else {
            $data['product_layout'] = array();
        }

        $this->load->model('design/layout');

        $data['layouts'] = $this->model_design_layout->getLayouts();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/vacancies_form', $data));
    }

    protected function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'catalog/product')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        foreach ($this->request->post['product_description'] as $language_id => $value) {
            if ((utf8_strlen($value['name']) < 1) || (utf8_strlen($value['name']) > 255)) {
                $this->error['name'][$language_id] = $this->language->get('error_name');
            }
        }

        if ((utf8_strlen($this->request->post['model']) < 1) || (utf8_strlen($this->request->post['model']) > 255)) {
            $this->error['model'] = $this->language->get('error_model');
        }

        if ($this->request->post['product_seo_url']) {
            $this->load->model('design/seo_url');

            foreach ($this->request->post['product_seo_url'] as $store_id => $language) {
                foreach ($language as $language_id => $keyword) {
                    if (!empty($keyword)) {
                        if (count(array_keys($language, $keyword)) > 1) {
                            $this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
                        }

                        $seo_urls = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);

                        foreach ($seo_urls as $seo_url) {
                            if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['product_id']) || (($seo_url['query'] != 'product_id=' . $this->request->get['product_id'])))) {
                                $this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');

                                break;
                            }
                        }
                    }
                }
            }
        }

        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }

        return !$this->error;
    }

    protected function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'catalog/product')) {
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
