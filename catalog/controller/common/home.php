<?php

class ControllerCommonHome extends Controller
{
    public function index()
    {
        $this->document->setTitle($this->config->get('config_meta_title'));
        $this->document->setDescription($this->config->get('config_meta_description'));
        $this->document->setKeywords($this->config->get('config_meta_keyword'));

        if (isset($this->request->get['route'])) {
            $this->document->addLink($this->config->get('config_url'), 'canonical');
        }

        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $data['main_banners'] = array();
        $main_banner = $this->model_design_banner->getBanner(9);
        $data['main_banner_id'] = '9';

        foreach ($main_banner as $main_banners) {
            if (is_file(DIR_IMAGE . $main_banners['image'])) {
                $data['main_banners'][] = array(
                    'banner_id' => '9',
                    'title' => $main_banners['title'],
                    'description' => $main_banners['description'],
                    'is_button' => $main_banners['is_button'],
                    'link' => $main_banners['link'],
                    //'image' => $this->model_tool_image->resize($main_banners['image'], $setting['width'], $setting['height']) //old
                    'image' => $this->model_tool_image->resize($main_banners['image'])
                );
            }
        }

        $this->load->model('setting/module');
        $this->load->model('catalog/product');
        $this->load->model('catalog/category');
        $this->load->model('information/blogs');
        $this->load->model('information/reviews');


        $this->load->model('information/reviews');
        $reviews = $this->model_information_reviews->getReviews();
        $data['reviews'] = [];
        foreach ($reviews as $review) {

            $photos = $this->model_information_reviews->getImages($review['reviews_id']);
            $images = [];
            foreach ($photos as $photo) {
                if ($photo['image']) {
                    $images[] = [
                        'webp' => $this->model_tool_image->resize($photo['image'], 60 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($photo['image'], 60 * 2, null),
                    ];
                } else {
                    $image[] = ['default' => $this->model_tool_image->resize('placeholder.png', 60 * 2)];
                }
            }

            $films = $this->model_information_reviews->getVideos($review['reviews_id']);
            $videos = [];
            foreach ($films as $film) {
                if ($film['video']) {
                    $videos[]['href'] = $film['video'];
                }
            }

            $dateString = $review['date_added'];
            $date = new DateTime($dateString);
            setlocale(LC_ALL, 'russian');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());
            $formattedDate = iconv('windows-1251', 'utf-8', $formattedDate);

            $grade = (int)$review['rating'];
            $grades = [];
            for ($i = 1; $i <= 5; $i++) {
                $class = 'empty';
                if ($i <= $grade) {
                    $class = 'fill';
                }
                $grades[] = $class;
            }

            $data['reviews'][] = [
                'name' => $review['author'],
                'images' => $images,
                'videos' => $videos,
                'initial' => mb_substr($review['author'], 0, 1),
                'grades' => $grades,
                'rating' => (int)$review['rating'] / 100,
                'text' => $review['text'],
                'date' => $formattedDate,
            ];
        }

        $module_id = 35;
        $module_info_hits = $this->model_setting_module->getModule($module_id);
        $id_products_hits = $module_info_hits['product'];
        $products_hits = [];
        foreach ($id_products_hits as $product_id) {
            $products_hits[] = $this->model_catalog_product->getProduct($product_id);
        }
        $data['hits'] = [];
        foreach ($products_hits as $product) {
            if ($product['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if (!is_null($product['special']) && (float)$product['special'] >= 0) {
                $special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $tax_price = (float)$product['special'];
                $percent = '-' . round((((float)$product['price'] - (float)$product['special']) / (float)$product['price']), 2) * 100 . '%';
            } else {
                $special = false;
                $percent = '';
                $tax_price = (float)$product['price'];
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($tax_price, $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$product['rating'];
            } else {
                $rating = false;
            }

            $inWishlist = false;
            if ($this->customer->isLogged()) {
                $inWishlist = $this->model_catalog_product->checkProductInWishlist($product['product_id'], $this->customer->getId());
            }

            $data['hits'][] = array(
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price' => $price,
                'special' => $special,
                'percent' => $percent,
                'tax' => $tax,
                'in_wishlist' => $inWishlist,
                'minimum' => $product['minimum'] > 0 ? $product['minimum'] : 1,
                'rating' => $product['rating'],
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        $module_id = 36;
        $module_info_novelties = $this->model_setting_module->getModule($module_id);
        $id_products_novelties = $module_info_novelties['product'];
        $products_novelties = [];
        foreach ($id_products_novelties as $product_id) {
            $products_novelties[] = $this->model_catalog_product->getProduct($product_id);
        }
        $data['novelties'] = [];
        foreach ($products_novelties as $product) {
            if ($product['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if (!is_null($product['special']) && (float)$product['special'] >= 0) {
                $special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $tax_price = (float)$product['special'];
                $percent = '-' . round((((float)$product['price'] - (float)$product['special']) / (float)$product['price']), 2) * 100 . '%';
            } else {
                $special = false;
                $percent = '';
                $tax_price = (float)$product['price'];
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($tax_price, $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$product['rating'];
            } else {
                $rating = false;
            }

            $inWishlist = false;
            if ($this->customer->isLogged()) {
                $inWishlist = $this->model_catalog_product->checkProductInWishlist($product['product_id'], $this->customer->getId());
            }

            $data['novelties'][] = array(
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price' => $price,
                'special' => $special,
                'percent' => $percent,
                'tax' => $tax,
                'in_wishlist' => $inWishlist,
                'minimum' => $product['minimum'] > 0 ? $product['minimum'] : 1,
                'rating' => $product['rating'],
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        $data['stocks'] = [];
        $products_stocks = $this->model_catalog_product->getProductSpecials();
        foreach ($products_stocks as $product) {
            if ($product['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($product['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($product['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if (!is_null($product['special']) && (float)$product['special'] >= 0) {
                $special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $tax_price = (float)$product['special'];
                $percent = '-' . round((((float)$product['price'] - (float)$product['special']) / (float)$product['price']), 2) * 100 . '%';
            } else {
                $special = false;
                $percent = '';
                $tax_price = (float)$product['price'];
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($tax_price, $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$product['rating'];
            } else {
                $rating = false;
            }

            $inWishlist = false;
            if ($this->customer->isLogged()) {
                $inWishlist = $this->model_catalog_product->checkProductInWishlist($product['product_id'], $this->customer->getId());
            }

            $data['stocks'][] = array(
                'product_id' => $product['product_id'],
                'thumb' => $image,
                'name' => $product['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price' => $price,
                'special' => $special,
                'percent' => $percent,
                'tax' => $tax,
                'in_wishlist' => $inWishlist,
                'minimum' => $product['minimum'] > 0 ? $product['minimum'] : 1,
                'rating' => $product['rating'],
                'href' => $this->url->link('product/product', 'product_id=' . $product['product_id'])
            );
        }

        $useful_from_blog = $this->model_information_blogs->getUsefulFromBlog();

        $data['useful_from_blog'] = [];

        foreach ($useful_from_blog as $blog) {
            if ($blog['image']) {
                $thumb = [
                    'webp' => $this->model_tool_image->resize($blog['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($blog['image'], 256 * 2, null),
                ];
            } else {
                $thumb = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            $dateString = $blog['date_blog'];
            $date = new DateTime($dateString);
            setlocale(LC_ALL, 'russian');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());
            $formattedDate = iconv('windows-1251', 'utf-8', $formattedDate);

            $category_name = $this->model_information_blogs->getBlogCategoryName($blog['blog_category_id']);

            $data['useful_from_blog'][] = [
                'title' => $blog['title'],
                'theme' => $blog['theme'],
                'thumb' => $thumb,
                'category' => $category_name,
                'href' => $this->url->link('information/blog', 'blog_id=' . $blog['blog_id']),
                'date' => $formattedDate,
            ];
        }

        $data['tags'] = $this->model_catalog_category->getCategoriesTags();

        $this->load->model('catalog/information');
        $seo_title = $this->model_catalog_information->getInformation(9);
        $data['seo_title'] = '';
        if ($seo_title) {
            $data['seo_title'] = html_entity_decode($seo_title['title']);
        }
        $seo_description = $this->model_catalog_information->getDescription(9);
        $data['seo_description'] = '';
        if ($seo_description) {
            $data['seo_description'] = html_entity_decode($seo_description);
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        $data['categories'] = $this->load->controller('common/catalog');

        $this->response->setOutput($this->load->view('common/home', $data));
    }
}
