<?php
class ControllerCommonCatalog extends Controller {

	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

        $this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
            if ($category['image']) {
                $image = [
                    'webp' => $this->model_tool_image->resize($category['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($category['image'], 256 * 2, null),
                ];
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', 256 * 2);
            }

			if ($category['top']) {
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
                    'image'    => $image,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

        return $data['categories'];
	}
}
