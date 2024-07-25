<?php

class ControllerProductFilter extends Controller
{
    private $option_list = [
        'embroidery' => [14],
        'size' => [15],
        'bedsheet' => [16],
        'pillowcase' => [17],
        'blanket' => [18],
    ];

    private $attribute_list = [
        'material' => [16],
        'density' => [17],
    ];

    public function filter($category_id)
    {
        $data = [];

        $this->load->model('catalog/product');
        $this->load->model('catalog/category');

        $products = $this->model_catalog_product->getProductsByFilter([
            'filter_category_id' => $category_id,
            'filter_sub_category' => true
        ]);

        $categories_path = $this->model_catalog_category->getPathByCategory($category_id);
        $main_category_id = $categories_path[0];

        # Минимальная цена
        if (isset($this->request->get['filter']['price']['from'])) {
            $min_price = $this->request->get['filter']['price']['from'];
        } else {
            $min_price = '';
        }

        #  Максимальная цена
        if (isset($this->request->get['filter']['price']['to'])) {
            $max_price = $this->request->get['filter']['price']['to'];
        } else {
            $max_price = '';
        }

        # Фильтры по опциям
        $filter_options = [];

        if (isset($this->request->get['filter_option'])) {
            foreach ($this->request->get['filter_option'] as $key => $value) {
                foreach ($this->option_list as $option_item) {
                    if (in_array($key, $option_item)) {
                        $parts = explode('|', $value);

                        foreach ($parts as $part) {
                            if (!empty($part)) {
                                $filter_options[$key][] = $part;
                            }
                        }
                        break;
                    }
                }
            }
        }

        # Фильтры по аттрибутам
        $filter_attributes = [];

        if (isset($this->request->get['filter_attribute'])) {
            foreach ($this->request->get['filter_attribute'] as $key => $value) {
                foreach ($this->attribute_list as $attribute_item) {
                    if (in_array($key, $attribute_item)) {
                        $parts = explode('|', $value);

                        foreach ($parts as $part) {
                            if (!empty($part)) {
                                $filter_attributes[$key][] = $part;
                            }
                        }

                        break;
                    }
                }
            }
        }

        # Формирование фильтров для вывода
        $min_limit = 99999;
        $max_limit = 0;

        foreach ($products as $product) {
            # Опции
            $options = $this->model_catalog_product->getProductOptions($product['product_id']);

            foreach ($options as $option) {
                foreach ($this->option_list as $key => $values) {
                    if (in_array($option['option_id'], $this->option_list[$key])) {
                        $node = $data['filter_options'][$key];

                        $data['filter_options'][$key] = $this->createFilterOptionPart($node, $option,
                            $filter_options);
                    }
                }
            }

            # Аттрибуты
            $attribute_groups = $this->model_catalog_product->getProductAttributes($product['product_id']);

            foreach ($attribute_groups as $attribute_group) {
                foreach ($attribute_group['attribute'] as $attribute) {
                    foreach ($this->attribute_list as $key => $value) {
                        if (in_array($attribute['attribute_id'], $this->attribute_list[$key])) {
                            $node = $data['filter_attributes'][$key];

                            $data['filter_attributes'][$key] = $this->createFilterAttributePart($node, $attribute,
                                $filter_attributes);
                        }
                    }
                }
            }

            # Цены
            $price = floor($product['price']);

            if ($product['special']) {
                $price = floor($product['special']);
            }

            if ($price < $min_limit) {
                $min_limit = $price;
            }

            if ($price > $max_limit) {
                $max_limit = $price;
            }
        }

        # Цена
        $data['price']['min']['target'] = $min_price;
        $data['price']['min']['limit'] = $min_limit;

        $data['price']['max']['target'] = $max_price;
        $data['price']['max']['limit'] = $max_limit;

        $this->sortOptions($data['filter_options']);

        $return = [
            'filters' => [
                'price' => [
                    'min' => $min_price,
                    'max' => $max_price
                ],
                'filter_options' => $filter_options,
                'filter_attributes' => $filter_attributes,
            ],
            'view' => $this->load->view('product/filter', $data)
        ];

        return $return;
    }

    private function sortOptions(&$filter_options)
    {
        foreach ($filter_options as &$option) {
            usort($option['values'], function ($a, $b) {
                return $a['sort_order'] <=> $b['sort_order'];
            });
        }
    }

    private function createFilterOptionPart($node, $option, $filters)
    {
        if (empty($node['attribute_id'])) {
            $node['option_id'] = $option['option_id'];
            $node['name'] = $option['name'];
        }

        foreach ($option['product_option_value'] as $value) {
            $value['active'] = false;

            if (!empty($filters) && in_array($value['option_value_id'], $filters[$option['option_id']])) {
                $value['active'] = true;
            }

            $node['values'][$value['option_value_id']] = $value;
        }

        return $node;

        //return [
        //    'option_id' => $option['option_id'],
        //    'name' => $option['name'],
        //    'values' => $values,
        //];
    }

    private function createFilterAttributePart($node, $attribute, $filter_attributes)
    {
        $active = false;

        if (empty($node[$attribute['text']]['attribute_id'])) {
            $node['attribute_id'] = $attribute['attribute_id'];
            $node['name'] = $attribute['name'];
        }

        if (in_array($attribute['text'], $filter_attributes[$attribute['attribute_id']])) {
            $active = true;
        }

        $node['values'][$attribute['text']] = [
            'active' => $active,
            'name' => $attribute['text'],
            'value' => $attribute['value']
        ];

        return $node;
    }

    private function createFilterAttributesOnFixed($node, $attribute, $values, $filter_attributes)
    {
        $node['attribute_id'] = $attribute['attribute_id'];
        $node['name'] = $attribute['name'];

        foreach ($values as $value_) {
            $active = false;

            $name = $value_['name'] ? $value_['name'] : $value_;
            $value = $value_['value'] ? $value_['value'] : null;

            if (in_array($value ? $value : $name, $filter_attributes[$attribute['attribute_id']])) {
                $active = true;
            }

            $node['values'][$name] = [
                'active' => $active,
                'name' => $name,
                'value' => $value,
            ];
        }

        return $node;
    }

    public function sort($params)
    {
        $sorts = [
            'default' => 'По умолчанию',
            'price_desc' => 'Сначала дорогие',
            'price_asc' => 'Сначала дешевые',
            'sale' => 'Сначала со скидкой',
        ];

        if (isset($params['not'])) {
            foreach ($params['not'] as $not) {
                if (isset($sorts[$not])) {
                    unset($sorts[$not]);
                }
            }
        }

        if (isset($this->request->get['sort'])) {
            $sort_select = $this->request->get['sort'];

            switch ($this->request->get['sort']) {
                case 'default':
                    {
                        $sort = 'p.sort_order';
                        $order = 'ASC';
                    }
                    break;

                //case 'quantity': {
                //    $sort = 'p.quantity';
                //    $order = 'DESC';
                //} break;

                case 'price_desc':
                    {
                        $sort = 'p.price';
                        $order = 'DESC';
                    }
                    break;

                case 'price_asc':
                    {
                        $sort = 'p.price';
                        $order = 'ASC';
                    }
                    break;

                case 'sale':
                    {
                        $sort = 'sale';
                        $order = 'DESC';
                    }
                    break;

                case 'popularity':
                default:
                    {
                        $sort = 'p.viewed';
                        $order = 'ASC';
                    }
                    break;
            }
        } else {
            $sort_select = 'default';
            $sort = 'p.sort_order';
            $order = 'ASC';
        }

        $data['sorts'] = $sorts;
        $data['sort_select'] = $sort_select;

        return [
            'sort_select' => $sort_select,
            'sorts' => $sorts,
            'sort' => $sort,
            'order' => $order,
            'view' => $this->load->view('product/sort', $data)
        ];
    }

    public function limit()
    {
        $data['limits'] = [
            '16' => '16',
            '32' => '32',
            '48' => '48',
        ];

        if (isset($this->request->get['limit'])) {
            $limit = $this->request->get['limit'];
        } else {
            $limit = current($data['limits']);
        }

        $data['limit_select'] = $limit;

        return [
            'limit' => $limit,
            'view' => $this->load->view('product/limit', $data)
        ];
    }
}