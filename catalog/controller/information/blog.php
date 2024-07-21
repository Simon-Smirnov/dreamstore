<?php

class ControllerInformationBlog extends Controller
{

    public function index()
    {
        $this->load->language('information/blog');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => 'Блог',
            'href' => $this->url->link('information/blog')
        );

        if (isset($this->request->get['blog_id'])) {
            $blog_id = (int)$this->request->get['blog_id'];
        } else {
            $blog_id = 0;
        }

        $this->load->model('information/blogs');

        $blog_info = $this->model_information_blogs->getBlog($blog_id);

        if ($blog_info) {
            if (!empty($blog_info['no_index'])) {
                $this->response->addHeader('X-Robots-Tag: noindex');
            }

            $data['breadcrumbs'][] = array(
                'text' => $blog_info['title'],
                'href' => $this->url->link('information/blog', 'blog_id=' . $this->request->get['blog_id'])
            );

            $this->document->setTitle($blog_info['title']);
            $this->document->setDescription($blog_info['title']);

            $data['blog_id'] = (int)$this->request->get['product_id'];
            $data['title'] = $blog_info['title'];
            $data['description'] = html_entity_decode($blog_info['description'], ENT_QUOTES, 'UTF-8');
            $dateString = $blog_info['date_blog'];
            $date = new DateTime($dateString);
            setlocale(LC_ALL, 'russian');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());
            $formattedDate = iconv('windows-1251', 'utf-8', $formattedDate);
            $data['date'] = $formattedDate;
            $data['title_h2'] = $blog_info['title_h2'];
            $data['title_expert'] = $blog_info['title_expert'];
            $data['description_expert'] = html_entity_decode($blog_info['description_expert'], ENT_QUOTES, 'UTF-8');
            $data['name_expert'] = $blog_info['name_expert'];
            $data['name_expert_first_spell'] = mb_substr($blog_info['name_expert'], 0, 1);
            $data['title_slider'] = $blog_info['title_slider'];
            $data['title_video'] = $blog_info['title_video'];
            $data['video'] = $blog_info['video'];

            $this->load->model('tool/image');

            if ($blog_info['image']) {
                $data['image'] = [
                    'webp' => $this->model_tool_image->resize($blog_info['image'], 256 * 2, null, ['webp' => true]),
                    'default' => $this->model_tool_image->resize($blog_info['image'], 256 * 2, null),
                ];
            } else {
                $data['image'] = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
            }

            $data['images'] = array();

            $results = $this->model_information_blogs->getImages($this->request->get['blog_id']);

            foreach ($results as $result) {
                if ($result['image']) {
                    $data['images'][] = [
                        'webp' => $this->model_tool_image->resize($result['image'], 900 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($result['image'], 900 * 2, null),
                    ];
                } else {
                    $data['images'][] = ['default' => $this->model_tool_image->resize('placeholder.png', 900 * 2)];
                }
            }

            $similar_articles = $this->model_information_blogs->getSimilarArticles($this->request->get['blog_id'], $blog_info['blog_category_id']);

            foreach ($similar_articles as $article) {
                if ($article['image']) {
                    $image = [
                        'webp' => $this->model_tool_image->resize($article['image'], 256 * 2, null, ['webp' => true]),
                        'default' => $this->model_tool_image->resize($article['image'], 256 * 2, null),
                    ];
                } else {
                    $image = ['default' => $this->model_tool_image->resize('placeholder.png', 256 * 2)];
                }

                $dateString = $article['date_blog'];
                $date = new DateTime($dateString);
                setlocale(LC_ALL, 'russian');
                $formattedDate = strftime('%d %B %Y', $date->getTimestamp());
                $formattedDate = iconv('windows-1251', 'utf-8', $formattedDate);

                $data['similar_articles'][] = [
                    'blog_id' => $article['blog_id'],
                    'title' => $article['title'],
                    'theme' => $article['theme'],
                    'thumb' => $image,
                    'date' => $formattedDate,
                    'category_name' => $article['name'],
                    'href' => $this->url->link('information/blog', 'blog_id=' . $article['blog_id']),
                ];
            }

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('information/blog', $data));
        } else {
            $url = '';

            if (isset($this->request->get['path'])) {
                $url .= '&path=' . $this->request->get['path'];
            }

            if (isset($this->request->get['filter'])) {
                $url .= '&filter=' . $this->request->get['filter'];
            }

            if (isset($this->request->get['manufacturer_id'])) {
                $url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
            }

            if (isset($this->request->get['search'])) {
                $url .= '&search=' . $this->request->get['search'];
            }

            if (isset($this->request->get['tag'])) {
                $url .= '&tag=' . $this->request->get['tag'];
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
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('product/product', $url . '&product_id=' . $blog_id)
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
}
