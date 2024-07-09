<?php

class ControllerInformationBlogs extends Controller
{

    public $errors = [];

    public function index()
    {
        $this->load->language('information/blogs');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/blogs')
        );

        $this->load->model('information/blogs');
        $blogs = $this->model_information_blogs->getBlogs();

        $data['blogs'] = [];

        $this->load->model('tool/image');

        foreach ($blogs as $blog) {

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
            setlocale(LC_TIME, 'ru_RU.UTF-8');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());

            $category_name = $this->model_information_blogs->getBlogCategoryName($blog['blog_category_id']);

            $data['blogs'][] = [
                'title' => $blog['title'],
                'theme' => $blog['theme'],
                'thumb' => $thumb,
                'category' => $category_name,
                'href' => $this->url->link('information/blog', 'blog_id=' . $blog['blog_id']),
                'date' => $formattedDate,
            ];
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/blogs', $data));
    }
}