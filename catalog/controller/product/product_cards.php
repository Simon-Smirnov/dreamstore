<?php

class ControllerProductProductCards extends Controller
{
    public function index($filter_data = [])
    {

        $data = [];

        $this->load->language('product/product');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $this->load->model('catalog/color');
        $this->load->model('setting/module');

        //$results = $this->model_catalog_product->getProducts($filter_data); //old realization

        $results = $this->model_catalog_product->getProductsByFilter($filter_data); //new realization with options, attributes and colors filter

        $data['products'] = [];

        foreach ($results as $result) {
            if ($result['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($result['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($result['image'], 256 * 2, null),
                ];
            } else {
                $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }


            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if (!is_null($result['special']) && (float)$result['special'] >= 0) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $tax_price = (float)$result['special'];
                $percent = '-' . round((((float)$result['price'] - (float)$result['special']) / (float)$result['price']), 2) * 100 . '%';
            } else {
                $special = false;
                $percent = '';
                $tax_price = (float)$result['price'];
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($tax_price, $this->session->data['currency']);
            } else {
                $tax = false;
            }

            if ($this->config->get('config_review_status')) {
                $rating = (int)$result['rating'];
            } else {
                $rating = false;
            }

            $inWishlist = false;
            if ($this->customer->isLogged()) {
                $inWishlist = $this->model_catalog_product->checkProductInWishlist($result['product_id'], $this->customer->getId());
            }

            $this->load->model('catalog/color');
            $colors = [];
            $related_products = $this->model_catalog_product->getProductRelated($result['product_id']);

            foreach ($related_products as $related_product) {
                $hex = $this->model_catalog_color->getColorHex($related_product['color_id']);
                $colors[] = [
                    'hex' => $hex,
                    'color_id' => $related_product['color_id'],
                    'href' => $this->url->link('product/product', 'product_id=' . $related_product['product_id']),
                    'product_id' => $related_product['product_id'],
                ];
            }

            $colors_add = false;
            $colors_lenght = count($colors);
            if ($colors_lenght > 4) {
                $colors_add = (int)$colors_lenght - 4;
                $colors = array_slice($colors, 0, 4);
            }

            $is_hit = false;
            $module_info_hits = $this->model_setting_module->getModule(35);
            if ($module_info_hits && isset($module_info_hits['product']) && in_array($result['product_id'], $module_info_hits['product'])) {
                $is_hit = true;
            }

            $is_novelty = false;
            $module_info_novelties = $this->model_setting_module->getModule(36);
            if ($module_info_novelties && isset($module_info_novelties['product']) && in_array($result['product_id'], $module_info_novelties['product'])) {
                $is_novelty = true;
            }

            $is_stock = false;
            if ($special) {
                $is_stock = true;
            }

            $current_color = $this->model_catalog_color->getColorHex($result['color_id']);

            if (!isset($url)) {
                $url = '';
            }

            $data['products'][] = array(
                'product_id' => $result['product_id'],
                'thumb' => $image,
                'name' => $result['name'],
                'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
                'price' => $price,
                'special' => $special,
                'percent' => $percent,
                'current_color' => $current_color ?? false,
                'colors' => $colors,
                'colors_add' => $colors_add,
                'tax' => $tax,
                'in_wishlist' => $inWishlist,
                'hit' => $is_hit ? 'Хит' : '',
                'novelty' => $is_novelty ? 'Новинка' : '',
                'stock' => $is_stock ? 'Распродажа' : '',
                'minimum' => $result['minimum'] > 0 ? $result['minimum'] : 1,
                'rating' => $result['rating'],
                'href' => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
            );
        }

        return $this->load->view('product/product_cards', $data);
    }
}