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
                    'image' => $this->model_tool_image->resize($main_banners['image'], $setting['width'], $setting['height'])
                );
            }
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
            ];
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
