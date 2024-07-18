<?php

class ControllerInformationAtelier extends Controller
{
    public function index()
    {
        $this->load->language('information/atelier');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->setDescription($this->language->get('heading_title'));
        $this->document->setKeywords($this->language->get('heading_title'));

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/atelier')
        );

        if (!empty($information_info['no_index'])) {
            $this->response->addHeader('X-Robots-Tag: noindex');
        }

        $category_id = MODELS_CATEGORY_ID;

        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {

            $data['models'] = array();

            $filter_data = array(
                'filter_category_id' => $category_id,
                'limit' => 8
            );

            $results = $this->model_catalog_product->getProducts($filter_data);

            foreach ($results as $result) {
                if ($result['image']) {
                    $image = [
                        'webp' => $this->model_tool_image->resize($result['image'], 200 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($result['image'], 200 * 2, null),
                    ];
                } else {
                    $image = ['default' => $this->model_tool_image->resize('placeholder.png', 200 * 2)];
                }

                $images = [];
                $images_from_db = $this->model_catalog_product->getProductImages($result['product_id']);
                if ($images_from_db) {
                    foreach ($images_from_db as $image_from_db) {
                        if ($image_from_db['image']) {
                            $images[] = [
                                'webp' => $this->model_tool_image->resize($image_from_db['image'], 200 * 2, null, ['webp' => true]),
                                'default' => $this->model_tool_image->resize($image_from_db['image'], 200 * 2, null),
                            ];
                        } else {
                            $image[] = ['default' => $this->model_tool_image->resize('placeholder.png', 200 * 2)];
                        }
                    }
                }

                if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                    $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                } else {
                    $price = false;
                }

                $data['models'][] = array(
                    'product_id' => $result['product_id'],
                    'thumb' => $image,
                    'images' => $images,
                    'name' => $result['name'],
                    'description' => strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')),
                    'price' => $price,
                );
            }

            $data['continue'] = $this->url->link('common/home');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('product/giftcard', $data));
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        $data['categories'] = $this->load->controller('common/catalog');

        $this->response->setOutput($this->load->view('information/atelier', $data));
    }

    public function showmoremodels()
    {

        $page = 0;

        if (isset($this->request->post['page'])) {
            $page = $this->request->post['page'];
        }

        $category_id = MODELS_CATEGORY_ID;

        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {

            $data['models'] = array();

            $filter_data = array(
                'filter_category_id' => $category_id,
                'start' => 8 * ($page - 1),
                'limit' => 8
            );

            $results = $this->model_catalog_product->getProducts($filter_data);

            if ($results) {
                foreach ($results as $result) {
                    if ($result['image']) {
                        $image = [
                            'webp' => $this->model_tool_image->resize($result['image'], 200 * 2, null, ['webp' => true]),
                            'default' => $this->model_tool_image->resize($result['image'], 200 * 2, null),
                        ];
                    } else {
                        $image = ['default' => $this->model_tool_image->resize('placeholder.png', 200 * 2)];
                    }

                    $images = [];
                    $images_from_db = $this->model_catalog_product->getProductImages($filter_data);
                    if ($images_from_db) {
                        foreach ($images_from_db as $image_from_db) {
                        }
                    }

                    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                    } else {
                        $price = false;
                    }

                    $data['models'][] = array(
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'images' => $images,
                        'name' => $result['name'],
                        'description' => strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')),
                        'price' => $price,
                    );
                }
                $this->response->setOutput($this->load->view('information/models', $data));
            }
        }
    }

    public function showOneModel()
    {

        $product_id = 0;

        if (isset($this->request->post['id'])) {
            $product_id = $this->request->post['id'];
        }

        $this->load->model('catalog/category');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $result = $this->model_catalog_product->getProduct($product_id);

        if ($result['image']) {
            $data['thumb'] = [
                'webp' => $this->model_tool_image->resize($result['image'], 200 * 2, null, ['webp' => true]),
                'default' => $this->model_tool_image->resize($result['image'], 200 * 2, null),
            ];
        } else {
            $data['thumb'] = ['default' => $this->model_tool_image->resize('placeholder.png', 200 * 2)];
        }

        $data['images'] = [];
        $images_from_db = $this->model_catalog_product->getProductImages($result['product_id']);
        if ($images_from_db) {
            foreach ($images_from_db as $image_from_db) {
                if ($image_from_db['image']) {
                    $data['images'][] = [
                        'webp' => $this->model_tool_image->resize($image_from_db['image'], 200 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($image_from_db['image'], 200 * 2, null),
                    ];
                } else {
                    $data['images'][] = ['default' => $this->model_tool_image->resize('placeholder.png', 200 * 2)];
                }
            }
        }

        $data['description'] = strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'));
        $data['name'] = $result['name'];

        $this->response->setOutput(json_encode([
            'html' => $this->load->view('information/atelier_model_content', $data)
        ]));

        //$this->response->setOutput($this->load->view('information/models', $data));
    }
}
