<?php

class ControllerProductFilter extends Controller
{
    private $categories_with_filters_moding = [
        1, // Матрасы
        14, // Кровати
        27 // Наматрасники
    ];

    private $option_list = [
        'size'       => [1, 2, 5, 7, 9],
        'materials'  => [8],
        'foundation' => [4],
        'filling'    => [6],
    ];

    private $attribute_list = [
        'softness' => [6],
        'type'     => [1, 3],
        'spring'   => [4],
        'load'     => [7],
    ];

    private $fix_attribute_list = [
        'height' => [5],
    ];

    public function filter($category_id)
    {
        $data = [];

        $this->load->model('catalog/product');
        $this->load->model('catalog/category');

        $products = $this->model_catalog_product->getProducts([
            'filter_category_id'  => $category_id,
            'filter_sub_category' => true
        ]);

        $categories_path  = $this->model_catalog_category->getPathByCategory($category_id);
        $main_category_id = $categories_path[ 0 ];

        # Минимальная цена
        if (isset($this->request->get[ 'filter' ][ 'price' ][ 'from' ])) {
            $min_price = $this->request->get[ 'filter' ][ 'price' ][ 'from' ];
        } else {
            $min_price = '';
        }

        #  Максимальная цена
        if (isset($this->request->get[ 'filter' ][ 'price' ][ 'to' ])) {
            $max_price = $this->request->get[ 'filter' ][ 'price' ][ 'to' ];
        } else {
            $max_price = '';
        }

        # Минимальная высота
        $height_exsist = false;

        # Фильтры по опциям
        $filter_options = [];

        if (isset($this->request->get[ 'filter_option' ])) {
            foreach ($this->request->get[ 'filter_option' ] as $key => $value) {
                foreach ($this->option_list as $option_item) {
                    if (in_array($key, $option_item)) {
                        $parts = explode('|', $value);

                        foreach ($parts as $part) {
                            if ( ! empty($part)) {
                                $filter_options[ $key ][] = $part;
                            }
                        }

                        break;
                    }
                }
            }
        }

        # Фильтры по аттрибутам
        $filter_attributes = [];

        if (isset($this->request->get[ 'filter_attribute' ])) {
            foreach ($this->request->get[ 'filter_attribute' ] as $key => $value) {
                foreach ($this->attribute_list as $attribute_item) {
                    if (in_array($key, $attribute_item)) {
                        $parts = explode('|', $value);

                        foreach ($parts as $part) {
                            if ( ! empty($part)) {
                                $filter_attributes[ $key ][] = $part;
                            }
                        }

                        break;
                    }
                }

                foreach ($this->fix_attribute_list as $attribute_item) {
                    if (in_array($key, $attribute_item)) {
                        if (isset($value[ 'from' ]) && isset($value[ 'to' ])) {
                            $filter_attributes[ $key ][] = $value[ 'from' ].'-'.$value[ 'to' ];
                        } else {
                            $parts = explode('|', $value);

                            foreach ($parts as $part) {
                                if ( ! empty($part)) {
                                    $filter_attributes[ $key ][] = $part;
                                }
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

        $min_height_limit = 99999;
        $max_height_limit = 0;

        foreach ($products as $product) {
            # Опции
            $options = $this->model_catalog_product->getProductOptions($product[ 'product_id' ]);

            foreach ($options as $option) {
                foreach ($this->option_list as $key => $values) {
                    if (in_array($option[ 'option_id' ], $this->option_list[ $key ])) {
                        $node = $data[ 'filter_options' ][ $key ];

                        $data[ 'filter_options' ][ $key ] = $this->createFilterOptionPart($node, $option,
                            $filter_options);
                    }
                }
            }

            # Разбивка некоторых опций на части
            if ( ! empty($data[ 'filter_options' ]) && in_array($main_category_id,
                    $this->categories_with_filters_moding)) {
                foreach ($data[ 'filter_options' ] as $option_key => $option) {
                    if (in_array($option[ 'option_id' ], [1, 7, 5])) {
                        $data[ 'filter_options' ][ $option_key ][ 'with_parts' ] = true;

                        $ws = [];
                        $ls = [];

                        foreach ($option[ 'values' ] as $value) {
                            $default_w = false;
                            $default_l = false;

                            $parts = explode('x', $value[ 'name' ]);

                            if (count($parts) == 2) {
                                if (array_search($parts[ 0 ], array_column($ws, 'value')) === false) {
                                    $ws[] = [
                                        'value'   => (int) $parts[ 0 ],
                                        'default' => $default_w
                                    ];
                                }

                                if (array_search($parts[ 1 ], array_column($ls, 'value')) === false) {
                                    $ls[] = [
                                        'value'   => (int) $parts[ 1 ],
                                        'default' => $default_l
                                    ];
                                }
                            }
                        }

                        if (isset($filter_options[ $option[ 'option_id' ] ])) {
                            foreach ($option[ 'values' ] as $value) {
                                if (in_array($value[ 'option_value_id' ], $filter_options[ $option[ 'option_id' ] ])) {
                                    $value_parts = explode('x', $value[ 'name' ]);

                                    foreach ($ws as $w_key => $w) {
                                        if ($w[ 'value' ] == $value_parts[ 0 ]) {
                                            $ws[ $w_key ][ 'default' ] = true;
                                        }
                                    }

                                    foreach ($ls as $l_key => $l) {
                                        if ($l[ 'value' ] == $value_parts[ 1 ]) {
                                            $ls[ $l_key ][ 'default' ] = true;
                                        }
                                    }
                                }
                            }
                        }

                        $ws = unique_multidim_array($ws, 'value');
                        $ls = unique_multidim_array($ls, 'value');

                        usort($ws, function ($a, $b) {
                            return $a[ 'value' ] <=> $b[ 'value' ];
                        });

                        usort($ls, function ($a, $b) {
                            return $a[ 'value' ] <=> $b[ 'value' ];
                        });

                        foreach ($ws as &$w) {
                            foreach ($option[ 'values' ] as $value) {
                                $parts = explode('x', $value[ 'name' ]);

                                if (count($parts) == 2 && $parts[ 0 ] == $w[ 'value' ]) {
                                    if ( ! isset($w[ 'applyed' ])) {
                                        $w[ 'applyed' ] = [];
                                    }

                                    $w[ 'applyed' ][] = $parts[ 1 ];
                                }
                            }

                            $w[ 'applyed' ] = json_encode($w[ 'applyed' ]);
                        }

                        foreach ($ls as &$l) {
                            foreach ($option[ 'product_option_value' ] as $value) {
                                $parts = explode('x', $value[ 'name' ]);

                                if (count($parts) == 2 && $parts[ 1 ] == $l[ 'value' ]) {
                                    if ( ! isset($l[ 'applyed' ])) {
                                        $l[ 'applyed' ] = [];
                                    }

                                    $l[ 'applyed' ][] = $parts[ 0 ];
                                }
                            }

                            $l[ 'applyed' ] = json_encode($l[ 'applyed' ]);
                        }

                        $data[ 'filter_options' ][ $option_key ][ 'parts' ] = [
                            'width'  => $ws,
                            'length' => $ls
                        ];
                    }
                }
            }

            # Аттрибуты
            $attribute_groups = $this->model_catalog_product->getProductAttributes($product[ 'product_id' ]);

            foreach ($attribute_groups as $attribute_group) {
                foreach ($attribute_group[ 'attribute' ] as $attribute) {
                    foreach ($this->attribute_list as $key => $value) {
                        if (in_array($attribute[ 'attribute_id' ], $this->attribute_list[ $key ])) {
                            $node = $data[ 'filter_attributes' ][ $key ];

                            $data[ 'filter_attributes' ][ $key ] = $this->createFilterAttributePart($node, $attribute,
                                $filter_attributes);
                        }
                    }

                    $type = 'height';
                    if (in_array($attribute[ 'attribute_id' ], $this->fix_attribute_list[ $type ])) {
                        # Высота
                        $height = $attribute[ 'value' ];

                        if ($height) {
                            if ( ! $height_exsist) {
                                if (isset($this->request->get[ 'filter_attribute' ][ $attribute[ 'attribute_id' ] ][ 'from' ])) {
                                    $min_height = $this->request->get[ 'filter_attribute' ][ $attribute[ 'attribute_id' ] ][ 'from' ];
                                } else {
                                    $min_height = '';
                                }

                                #  Максимальная цена
                                if (isset($this->request->get[ 'filter_attribute' ][ $attribute[ 'attribute_id' ] ][ 'to' ])) {
                                    $max_height = $this->request->get[ 'filter_attribute' ][ $attribute[ 'attribute_id' ] ][ 'to' ];
                                } else {
                                    $max_height = '';
                                }

                                $data[ 'filter_attributes' ][ $type ][ 'min' ][ 'target' ] = $min_height;
                                $data[ 'filter_attributes' ][ $type ][ 'max' ][ 'target' ] = $max_height;

                                $data[ 'filter_attributes' ][ $type ][ 'name' ]         = $attribute[ 'name' ];
                                $data[ 'filter_attributes' ][ $type ][ 'attribute_id' ] = $attribute[ 'attribute_id' ];

                                $height_exsist = true;
                            }

                            if ($height <= $min_height_limit) {
                                $min_height_limit = $height;
                            } elseif ($height >= $max_height_limit) {
                                $max_height_limit = $height;
                            }

                            $data[ 'filter_attributes' ][ $type ][ 'min' ][ 'limit' ] = $min_height_limit;
                            $data[ 'filter_attributes' ][ $type ][ 'max' ][ 'limit' ] = $max_height_limit;
                        }
                    }
                }
            }

            # Цены
            $price = floor($product[ 'price' ]);

            if ($product[ 'special' ]) {
                $price = floor($product[ 'special' ]);
            }

            if ($price < $min_limit) {
                $min_limit = $price;
            } elseif ($price > $max_limit) {
                $max_limit = $price;
            }
        }

        if ($main_category_id == 21) {
            foreach ($data['filter_options'] as $key => $option) {
                if ($option['option_id'] == 1) {
                    $data['filter_options'][$key]['name'] = 'Спальное место';
                }
            }
        }

        if ($main_category_id == 22) {
            foreach ($data['filter_options'] as $key => $option) {
                if ($option['option_id'] == 9) {
                    unset($data['filter_options'][$key]);
                }
            }
        }

        # Сортировка значений "Допустимая нагрузка"
        if (isset($data[ 'filter_attributes' ][ 'load' ])) {
            usort($data[ 'filter_attributes' ][ 'load' ][ 'values' ], function ($a, $b) {
                return $a[ 'value' ] <=> $b[ 'value' ];
            });
        }

        # Цена
        $data[ 'price' ][ 'min' ][ 'target' ] = $min_price;
        $data[ 'price' ][ 'min' ][ 'limit' ]  = $min_limit;

        $data[ 'price' ][ 'max' ][ 'target' ] = $max_price;
        $data[ 'price' ][ 'max' ][ 'limit' ]  = $max_limit;

        $this->sortOptions($data[ 'filter_options' ]);

        $return = [
            'filters' => [
                'price'             => [
                    'min' => $min_price,
                    'max' => $max_price
                ],
                'filter_options'    => $filter_options,
                'filter_attributes' => $filter_attributes,
            ],
            'view'    => $this->load->view('product/filter', $data)
        ];

        return $return;
    }

    private function sortOptions(&$filter_options)
    {
        foreach ($filter_options as &$option) {
            usort($option[ 'values' ], function ($a, $b) {
                return $a[ 'sort_order' ] <=> $b[ 'sort_order' ];
            });
        }
    }

    private function createFilterOptionPart($node, $option, $filters)
    {
        if (empty($node[ 'attribute_id' ])) {
            $node[ 'option_id' ] = $option[ 'option_id' ];
            $node[ 'name' ]      = $option[ 'name' ];
        }

        foreach ($option[ 'product_option_value' ] as $value) {
            $value[ 'active' ] = false;

            if ( ! empty($filters) && in_array($value[ 'option_value_id' ], $filters[ $option[ 'option_id' ] ])) {
                $value[ 'active' ] = true;
            }

            $node[ 'values' ][ $value[ 'option_value_id' ] ] = $value;
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

        if (empty($node[ $attribute[ 'text' ] ][ 'attribute_id' ])) {
            $node[ 'attribute_id' ] = $attribute[ 'attribute_id' ];
            $node[ 'name' ]         = $attribute[ 'name' ];
        }

        if (in_array($attribute[ 'text' ], $filter_attributes[ $attribute[ 'attribute_id' ] ])) {
            $active = true;
        }

        $node[ 'values' ][ $attribute[ 'text' ] ] = [
            'active' => $active,
            'name'   => $attribute[ 'text' ],
            'value'  => $attribute[ 'value' ]
        ];

        return $node;
    }

    private function createFilterAttributesOnFixed($node, $attribute, $values, $filter_attributes)
    {
        $node[ 'attribute_id' ] = $attribute[ 'attribute_id' ];
        $node[ 'name' ]         = $attribute[ 'name' ];

        foreach ($values as $value_) {
            $active = false;

            $name  = $value_[ 'name' ] ? $value_[ 'name' ] : $value_;
            $value = $value_[ 'value' ] ? $value_[ 'value' ] : null;

            if (in_array($value ? $value : $name, $filter_attributes[ $attribute[ 'attribute_id' ] ])) {
                $active = true;
            }

            $node[ 'values' ][ $name ] = [
                'active' => $active,
                'name'   => $name,
                'value'  => $value,
            ];
        }

        return $node;
    }

    public function sort($params)
    {
        $sorts = [
            'default'    => 'По умолчанию',
            'price_desc' => 'Сначала дорогие',
            'price_asc'  => 'Сначала дешевые',
            'sale'       => 'Сначала со скидкой',
        ];

        if (isset($params[ 'not' ])) {
            foreach ($params[ 'not' ] as $not) {
                if (isset($sorts[ $not ])) {
                    unset($sorts[ $not ]);
                }
            }
        }

        if (isset($this->request->get[ 'sort' ])) {
            $sort_select = $this->request->get[ 'sort' ];

            switch ($this->request->get[ 'sort' ]) {
                case 'default':
                    {
                        $sort  = 'p.sort_order';
                        $order = 'ASC';
                    }
                    break;

                //case 'quantity': {
                //    $sort = 'p.quantity';
                //    $order = 'DESC';
                //} break;

                case 'price_desc':
                    {
                        $sort  = 'p.price';
                        $order = 'DESC';
                    }
                    break;

                case 'price_asc':
                    {
                        $sort  = 'p.price';
                        $order = 'ASC';
                    }
                    break;

                case 'sale':
                    {
                        $sort  = 'sale';
                        $order = 'DESC';
                    }
                    break;

                case 'popularity':
                default:
                    {
                        $sort  = 'p.viewed';
                        $order = 'ASC';
                    }
                    break;
            }
        } else {
            $sort_select = 'default';
            $sort        = 'p.sort_order';
            $order       = 'ASC';
        }

        $data[ 'sorts' ]       = $sorts;
        $data[ 'sort_select' ] = $sort_select;

        return [
            'sort_select' => $sort_select,
            'sorts'       => $sorts,
            'sort'        => $sort,
            'order'       => $order,
            'view'        => $this->load->view('product/sort', $data)
        ];
    }

    public function limit()
    {
        $data[ 'limits' ] = [
            '16' => '16',
            '32' => '32',
            '48' => '48',
        ];

        if (isset($this->request->get[ 'limit' ])) {
            $limit = $this->request->get[ 'limit' ];
        } else {
            $limit = current($data[ 'limits' ]);
        }

        $data[ 'limit_select' ] = $limit;

        return [
            'limit' => $limit,
            'view'  => $this->load->view('product/limit', $data)
        ];
    }
}