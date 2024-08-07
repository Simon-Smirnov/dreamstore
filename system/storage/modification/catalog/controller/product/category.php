<?php

class ControllerProductCategory extends Controller
{
    public function index()
    {

        $this->load->language('product/category');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        //if (isset($this->request->get['filter'])) {
        //    $filter = $this->request->get['filter'];
        //} else {
        //    $filter = '';
        //}
        //
        //if (isset($this->request->get['sort'])) {
        //    $sort = $this->request->get['sort'];
        //} else {
        //    $sort = 'p.sort_order';
        //}
        //
        //if (isset($this->request->get['order'])) {
        //    $order = $this->request->get['order'];
        //} else {
        //    $order = 'ASC';
        //}

        $data['is_line'] = false;
        if (isset($this->request->get['line']) && $this->request->get['line'] == 'true') {
            $data['is_line'] = true;
        }

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        # Сортировка
        $sort_data = $this->load->controller('product/filter/sort');
        $sort = $sort_data['sort'];
        $order = $sort_data['order'];
        $data['sort_select'] = $sort_data['sort_select'];
        $data['sorts'] = $sort_data['view'];

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = 15; //$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string)$this->request->get['path']);

            $category_id = (int)array_pop($parts);

            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = (int)$path_id;
                } else {
                    $path .= '_' . (int)$path_id;
                }

                $category_info = $this->model_catalog_category->getCategory($path_id);

                if ($category_info) {
                    $data['breadcrumbs'][] = array(
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path . $url)
                    );
                }
            }
        } else {
            $category_id = 0;
        }

        # Фильтры
        $filter_data = $this->load->controller('product/filter/filter', $category_id);
        $data['filters'] = $filter_data['view'];

        $category_info = $this->model_catalog_category->getCategory($category_id);

        if ($category_info) {
            if (!empty($category_info['no_index'])) {
                $this->response->addHeader('X-Robots-Tag: noindex');
            }

            if (empty($category_info['meta_title'])) {
                $category_info['meta_title'] = $category_info['name'];
            }

            $this->document->setTitle($category_info['meta_title']);
            $this->document->setDescription($category_info['meta_description']);
            $this->document->setKeywords($category_info['meta_keyword']);

            if (!empty($category_info['meta_h1'])) {
                $data['heading_title'] = $category_info['meta_h1'];
            } else {
                $data['heading_title'] = $category_info['name'];
            }

            $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

            // Set the last category breadcrumb
            $data['breadcrumbs'][] = array(
                'text' => $category_info['name'],
                'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'])
            );

            if ($category_info['image']) {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            } else {
                $data['thumb'] = '';
            }

            $data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');

            $data['compare'] = $this->url->link('product/compare');

            $url = '';

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['categories'] = array();

            $results = $this->model_catalog_category->getCategories($category_id);

            foreach ($results as $result) {

                if ($result['image']) {
                    $image = [
                        'webp' => $this->model_tool_image->resize($result['image'], 256 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($result['image'], 256 * 2, null),
                    ];
                } else {
                    $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
                }

                $data['categories'][] = array(
                    'name' => $result['name'],
                    'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url),
                    'image' => $image
                );
            }

            $data['products'] = array();

            $filter_data = array(

			'filter_sub_category' => true,
			
                'filter_category_id' => $category_id,
                'filter_sub_category' => true,
                'filter_filter' => [],
                'filter_custom' => $filter_data['filters'],
                'sort' => $sort,
                'order' => $order,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );

            //$product_total = $this->model_catalog_product->getTotalProducts($filter_data);
            $product_total = $this->model_catalog_product->getTotalProductsByFilter($filter_data);

            $data['product_cards'] = $this->load->controller('product/product_cards', $filter_data);

            $url = '';

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $url = '';

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = [];

            $limits = array_unique([
                $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'),
                25,
                50,
                75,
                100
            ]);

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = [
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&limit=' . $value)
                ];
            }

            $url = '';

            if (isset($this->request->get['filter'])) {
                foreach ($this->request->get['filter'] as $filter_key => $filter_object) {
                    if (is_array($filter_object)) {
                        foreach ($filter_object as $part_key => $part) {
                            $url .= "&filter[$filter_key][$part_key]=" . $part;
                        }
                    } else {
                        $url .= "&filter[$filter_key]=" . $filter_object;
                    }
                }
            }

            if (isset($this->request->get['filter_attribute'])) {
                foreach ($this->request->get['filter_attribute'] as $filter_key => $filter_object) {
                    if (is_array($filter_object)) {
                        foreach ($filter_object as $part_key => $part) {
                            $url .= "&filter_attribute[$filter_key][$part_key]=" . $part;
                        }
                    } else {
                        $url .= "&filter_attribute[$filter_key]=" . $filter_object;
                    }
                }
            }

            if (isset($this->request->get['filter_option'])) {
                foreach ($this->request->get['filter_option'] as $filter_key => $filter_value) {
                    if (is_array($filter_value)) {
                        foreach ($filter_value as $part_key => $part) {
                            $url .= "&filter_option[$filter_key][$part_key]=" . $part;
                        }
                    } else {
                        $url .= "&filter_option[$filter_key]=" . $filter_value;
                    }
                }
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $pagination = new Pagination();
            $pagination->total = $product_total;
            $pagination->page = $page;
            $pagination->limit = $limit;
            $pagination->url = $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&page={page}');

            $data['pagination'] = $pagination->render(true);

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
            if ($page == 1 || $this->config->get('config_seo_canonical_first')) {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id']), 'canonical');
            } else {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . $page), 'canonical');
            }

            if ($page > 1) {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . (($page - 2) ? '&page=' . ($page - 1) : '')), 'prev');
            }

            if ($limit && ceil($product_total / $limit) > $page) {
                $this->document->addLink($this->url->link('product/category', 'path=' . $category_info['category_id'] . '&page=' . ($page + 1)), 'next');
            }

            $data['sort'] = $sort;
            $data['order'] = $order;
            $data['limit'] = $limit;

            $data['continue'] = $this->url->link('common/home');

            if ($page > 1) {
                if ($this->config->get('config_seo_no_description')) {
                    $data['thumb'] = false;
                    $data['description'] = '';
                }
                if ($this->config->get('config_seo_title_page')) {
                    $this->document->setTitle(sprintf("%s (%s - %s)", $this->document->getTitle(), $this->language->get('text_page'), $page));
                }
                if ($this->config->get('config_seo_meta_description_page') && $text = $this->document->getDescription()) {
                    $this->document->setDescription(sprintf("%s (%s - %s)", $text, $this->language->get('text_page'), $page));
                }
            }

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('product/category', $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
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

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('product/category', $url)
            );

            $this->document->setTitle($this->language->get('text_error'));

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }

    //private function getProductsByCategoryId($filter_data)
    //{
    //    $product_total = $this->model_catalog_product->getTotalProducts($filter_data);
    //
    //    $results = $this->model_catalog_product->getProducts($filter_data);
    //
    //    $products = [];
    //
    //    foreach ($results as $result) {
    //        if ($result['image']) {
    //            $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
    //        } else {
    //            $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
    //        }
    //
    //        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
    //            $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
    //        } else {
    //            $price = false;
    //        }
    //
    //        if (!is_null($result['special']) && (float)$result['special'] >= 0) {
    //            $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
    //            $tax_price = (float)$result['special'];
    //        } else {
    //            $special = false;
    //            $tax_price = (float)$result['price'];
    //        }
    //
    //        if ($this->config->get('config_tax')) {
    //            $tax = $this->currency->format($tax_price, $this->session->data['currency']);
    //        } else {
    //            $tax = false;
    //        }
    //
    //        if ($this->config->get('config_review_status')) {
    //            $rating = (int)$result['rating'];
    //        } else {
    //            $rating = false;
    //        }
    //
    //        $products[] = array(
    //            'product_id' => $result['product_id'],
    //            'thumb' => $image,
    //            'name' => $result['name'],
    //            'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
    //            'price' => $price,
    //            'special' => $special,
    //            'tax' => $tax,
    //            'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
    //            'rating' => $result['rating'],
    //            'href' => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
    //        );
    //    }
    //
    //    return [
    //        'products' => $products,
    //        'total' => $product_total,
    //    ];
    //}
}
