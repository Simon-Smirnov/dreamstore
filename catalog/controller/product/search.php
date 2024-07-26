<?php

class ControllerProductSearch extends Controller
{
    public function index()
    {
        $this->load->language('product/search');

        $this->load->model('catalog/category');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        if (isset($this->request->get['search'])) {
            $search = $this->request->get['search'];
        } else {
            $search = '';
        }

        if (isset($this->request->get['tag'])) {
            $tag = $this->request->get['tag'];
        } elseif (isset($this->request->get['search'])) {
            $tag = $this->request->get['search'];
        } else {
            $tag = '';
        }

        if (isset($this->request->get['description'])) {
            $description = $this->request->get['description'];
        } else {
            $description = '';
        }

        if (isset($this->request->get['category_id'])) {
            $category_id = $this->request->get['category_id'];
        } else {
            $category_id = 0;
        }

        if (isset($this->request->get['sub_category'])) {
            $sub_category = $this->request->get['sub_category'];
        } else {
            $sub_category = '';
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'p.sort_order';
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

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
        }

        //if (isset($this->request->get['search'])) {
        //    $this->document->setTitle($this->language->get('heading_title') . ' - ' . $this->request->get['search']);
        //} elseif (isset($this->request->get['tag'])) {
        //    $this->document->setTitle($this->language->get('heading_title') . ' - ' . $this->language->get('heading_tag') . $this->request->get['tag']);
        //} else {
        $this->document->setTitle($this->language->get('heading_title'));
        //}

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $url = '';

        if (isset($this->request->get['search'])) {
            $url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['tag'])) {
            $url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['description'])) {
            $url .= '&description=' . $this->request->get['description'];
        }

        if (isset($this->request->get['category_id'])) {
            $url .= '&category_id=' . $this->request->get['category_id'];
        }

        if (isset($this->request->get['sub_category'])) {
            $url .= '&sub_category=' . $this->request->get['sub_category'];
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
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('product/search', $url)
        );

        //if (isset($this->request->get['search'])) {
        //    $data['heading_title'] = $this->language->get('heading_title') . ' - ' . $this->request->get['search'];
        //} else {
        $data['heading_title'] = $this->language->get('heading_title');
        //}

        $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

        $data['compare'] = $this->url->link('product/compare');

        // 3 Level Category Search
        $data['categories'] = array();

        $categories_1 = $this->model_catalog_category->getCategories(0);

        foreach ($categories_1 as $category_1) {
            $level_2_data = array();

            $categories_2 = $this->model_catalog_category->getCategories($category_1['category_id']);

            foreach ($categories_2 as $category_2) {
                $level_3_data = array();

                $categories_3 = $this->model_catalog_category->getCategories($category_2['category_id']);

                foreach ($categories_3 as $category_3) {
                    $level_3_data[] = array(
                        'category_id' => $category_3['category_id'],
                        'name' => $category_3['name'],
                    );
                }

                $level_2_data[] = array(
                    'category_id' => $category_2['category_id'],
                    'name' => $category_2['name'],
                    'children' => $level_3_data
                );
            }

            $data['categories'][] = array(
                'category_id' => $category_1['category_id'],
                'name' => $category_1['name'],
                'children' => $level_2_data
            );
        }

        $data['products'] = array();

        if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
            $filter_data = array(
                'filter_name' => $search,
                'filter_tag' => $tag,
                'filter_description' => $description,
                'filter_category_id' => $category_id,
                'filter_sub_category' => $sub_category,
                'sort' => $sort,
                'order' => $order,
                'start' => ($page - 1) * $limit,
                'limit' => $limit
            );

            //$product_total = $this->model_catalog_product->getTotalProducts($filter_data);
            $product_total = $this->model_catalog_product->getTotalProductsByFilter($filter_data);

            $data['total'] = $product_total;

            $data['product_cards'] = $this->load->controller('product/product_cards', $filter_data);

            //$results = $this->model_catalog_product->getProducts($filter_data);
            //
            //foreach ($results as $result) {
            //    if ($result['image']) {
            //        $image = [
            //            'webp' => $this->model_tool_image->resize($result['image'], 256 * 2, null, ['webp' => true]),
            //            'default' => $this->model_tool_image->resize($result['image'], 256 * 2, null),
            //        ];
            //    } else {
            //        $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            //    }
            //
            //    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            //        $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            //    } else {
            //        $price = false;
            //    }
            //
            //    if (!is_null($result['special']) && (float)$result['special'] >= 0) {
            //        $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            //        $tax_price = (float)$result['special'];
            //        $percent = '-' . round((((float)$result['price'] - (float)$result['special']) / (float)$result['price']), 2) * 100 . '%';
            //    } else {
            //        $special = false;
            //        $percent = '';
            //        $tax_price = (float)$result['price'];
            //    }
            //
            //    if ($this->config->get('config_tax')) {
            //        $tax = $this->currency->format($tax_price, $this->session->data['currency']);
            //    } else {
            //        $tax = false;
            //    }
            //
            //    if ($this->config->get('config_review_status')) {
            //        $rating = (int)$result['rating'];
            //    } else {
            //        $rating = false;
            //    }
            //
            //    $inWishlist = false;
            //    if ($this->customer->isLogged()) {
            //        $inWishlist = $this->model_catalog_product->checkProductInWishlist($result['product_id'], $this->customer->getId());
            //    }
            //
            //    $data['products'][] = array(
            //        'product_id' => $result['product_id'],
            //        'thumb' => $image,
            //        'name' => $result['name'],
            //        'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
            //        'price' => $price,
            //        'special' => $special,
            //        'percent' => $percent,
            //        'tax' => $tax,
            //        'in_wishlist' => $inWishlist,
            //        'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
            //        'rating' => $result['rating'],
            //        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
            //    );
            //}

            $url = '';

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $data['sorts'] = array();

            $data['sorts'][] = array(
                'text' => $this->language->get('text_default'),
                'value' => 'p.sort_order-ASC',
                'href' => $this->url->link('product/search', 'sort=p.sort_order&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_name_asc'),
                'value' => 'pd.name-ASC',
                'href' => $this->url->link('product/search', 'sort=pd.name&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_name_desc'),
                'value' => 'pd.name-DESC',
                'href' => $this->url->link('product/search', 'sort=pd.name&order=DESC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_asc'),
                'value' => 'p.price-ASC',
                'href' => $this->url->link('product/search', 'sort=p.price&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_price_desc'),
                'value' => 'p.price-DESC',
                'href' => $this->url->link('product/search', 'sort=p.price&order=DESC' . $url)
            );

            if ($this->config->get('config_review_status')) {
                $data['sorts'][] = array(
                    'text' => $this->language->get('text_rating_desc'),
                    'value' => 'rating-DESC',
                    'href' => $this->url->link('product/search', 'sort=rating&order=DESC' . $url)
                );

                $data['sorts'][] = array(
                    'text' => $this->language->get('text_rating_asc'),
                    'value' => 'rating-ASC',
                    'href' => $this->url->link('product/search', 'sort=rating&order=ASC' . $url)
                );
            }

            $data['sorts'][] = array(
                'text' => $this->language->get('text_model_asc'),
                'value' => 'p.model-ASC',
                'href' => $this->url->link('product/search', 'sort=p.model&order=ASC' . $url)
            );

            $data['sorts'][] = array(
                'text' => $this->language->get('text_model_desc'),
                'value' => 'p.model-DESC',
                'href' => $this->url->link('product/search', 'sort=p.model&order=DESC' . $url)
            );

            $url = '';

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
            }

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            $data['limits'] = array();

            $limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

            sort($limits);

            foreach ($limits as $value) {
                $data['limits'][] = array(
                    'text' => $value,
                    'value' => $value,
                    'href' => $this->url->link('product/search', $url . '&limit=' . $value)
                );
            }

            $url = '';

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
            }

            if (isset($this->request->get['description'])) {
                $url .= '&description=' . $this->request->get['description'];
            }

            if (isset($this->request->get['category_id'])) {
                $url .= '&category_id=' . $this->request->get['category_id'];
            }

            if (isset($this->request->get['sub_category'])) {
                $url .= '&sub_category=' . $this->request->get['sub_category'];
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
            $pagination->url = $this->url->link('product/search', $url . '&page={page}');

            $data['pagination'] = $pagination->render();

            $data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

            if (isset($this->request->get['search']) && $this->config->get('config_customer_search')) {
                $this->load->model('account/search');

                if ($this->customer->isLogged()) {
                    $customer_id = $this->customer->getId();
                } else {
                    $customer_id = 0;
                }

                if (isset($this->request->server['REMOTE_ADDR'])) {
                    $ip = $this->request->server['REMOTE_ADDR'];
                } else {
                    $ip = '';
                }

                $search_data = array(
                    'keyword' => $search,
                    'category_id' => $category_id,
                    'sub_category' => $sub_category,
                    'description' => $description,
                    'products' => $product_total,
                    'customer_id' => $customer_id,
                    'ip' => $ip
                );

                $this->model_account_search->addSearch($search_data);
            }
        }

        $data['search'] = $search;
        $data['description'] = $description;
        $data['category_id'] = $category_id;
        $data['sub_category'] = $sub_category;

        $data['sort'] = $sort;
        $data['order'] = $order;
        $data['limit'] = $limit;

        if ($page > 1) {
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

        $this->response->setOutput($this->load->view('product/search', $data));
    }

    public function getSearchModal()
    {
        $data = [];

        if (isset($this->request->post['search'])) {
            //$searchString = $this->model_catalog_product->getSearchResults($searchString);
        }

        $module_id = 34;
        $this->load->model('setting/module');

        $module_info = $this->model_setting_module->getModule($module_id);
        $id_products_recomended = $module_info['product'];

        $this->load->model('catalog/product');
        foreach ($id_products_recomended as $product_id) {
            $products_recomended[] = $this->model_catalog_product->getProduct($product_id);
        }

        $data['products_recomended'] = [];

        $this->load->model('tool/image');
        foreach ($products_recomended as $product) {
            if ($product['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            $data['products_recomended'][] = [
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'price' => $this->currency->format($product['price'], $this->config->get('config_currency')),
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            ];
        }

        $this->response->setOutput($this->load->view('product/search_modal', $data));
        //return $this->load->view('product/search_modal', $data);
    }

    public function quickTips()
    {
        $data = [];

        if (isset($this->request->post['phrase']) && $this->request->post['phrase'] != '') {
            $filter_data = array(
                'filter_name' => $this->request->post['phrase'],
                'limit' => 12
            );

            $this->load->model('catalog/product');
            $results = $this->model_catalog_product->getProductsByFilter($filter_data);

            $this->load->model('tool/image');
            $data['products'] = [];
            if (isset($results) && !empty($results)) {
                foreach ($results as $result) {
                    if ($result['image']) {
                        $image = [
                            'webp' => $this->model_tool_image->resize($result['image'], 256 * 2, null, ['webp' => true]),
                            'default' => $this->model_tool_image->resize($result['image'], 256 * 2, null),
                        ];
                    } else {
                        $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
                    }

                    $data['products'][] = [
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'name' => $result['name'],
                        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                        'price' => $this->currency->format($result['price'], $this->config->get('config_currency')),
                    ];
                }
            }
        }
        $this->response->setOutput($this->load->view('product/search_quick_tips', $data));
    }
}
