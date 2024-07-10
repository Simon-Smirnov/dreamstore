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

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['category_id'])) {
            $category_id = (int)$this->request->get['category_id'];
        } else {
            $category_id = '';
        }

        $data['category_id'] = $category_id;

        $data['href_all'] = $this->url->link('information/blogs');
        $data['href_news'] = $this->url->link('information/blogs', 'category_id=1');
        $data['href_useful'] = $this->url->link('information/blogs', 'category_id=2');

        $limit = 12;

        $this->load->model('tool/image');
        $this->load->model('information/blogs');

        $filter_data = array(
            'filter_category_id' => $category_id,
            'start' => ($page - 1) * $limit,
            'limit' => $limit
        );

        $blog_total = $this->model_information_blogs->getBlogsTotalWithFilters($filter_data);
        $blogs = $this->model_information_blogs->getBlogsWithFilters($filter_data);

        $data['blogs'] = [];

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

        $url = '';
        if (isset($this->request->get['category_id'])) {
            $url .= 'category_id=' . $this->request->get['category_id'];
        }

        $pagination = new Pagination();
        $pagination->total = $blog_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        if ($url != '') {
            $pagination->url = $this->url->link('information/blogs', $url . '&page={page}');
        } else {
            $pagination->url = $this->url->link('information/blogs', 'page={page}');
        }


        $data['pagination'] = $pagination->render(true);

        $data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($blog_total - $limit)) ? $blog_total : ((($page - 1) * $limit) + $limit), $blog_total, ceil($blog_total / $limit));

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/blogs', $data));
    }

    private function getBlogs($filters)
    {
        $blogs = $this->model_information_blogs->getBlogsWithFilters($filters);

        $items = [];

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

            $items[] = [
                'title' => $blog['title'],
                'theme' => $blog['theme'],
                'thumb' => $thumb,
                'category' => $category_name,
                'href' => $this->url->link('information/blog', 'blog_id=' . $blog['blog_id']),
                'date' => $formattedDate,
            ];
        }

        return $items;
    }
}