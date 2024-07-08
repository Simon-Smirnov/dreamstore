<?php

class ControllerProductHits extends Controller
{
    public function index()
    {

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('Хиты'),
            'href' => $this->url->link('product/hits')
        );

        $data['heading_title'] = 'Хиты';

        $this->load->model('tool/image');
        $this->load->model('setting/module');
        $this->load->model('catalog/product');

        $this->document->setTitle('Хиты');
        $this->document->setDescription('Хиты');
        $this->document->setKeywords('Хиты');


        $module_id = 35;
        $module_info_hits = $this->model_setting_module->getModule($module_id);
        $id_products_hits = $module_info_hits['product'];
        $products_hits = [];
        foreach ($id_products_hits as $product_id) {
            $products_hits[] = $this->model_catalog_product->getProduct($product_id);
        }
        $data['products'] = [];
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

            $data['products'][] = array(
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

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('product/best_offers', $data));
    }
}