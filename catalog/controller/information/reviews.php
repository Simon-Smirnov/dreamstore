<?php

class ControllerInformationReviews extends Controller
{

    public function index()
    {
        $this->load->language('information/reviews');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/reviews')
        );

        $this->load->model('information/reviews');
        $reviews = $this->model_information_reviews->getReviews();

        $data['reviews'] = [];
        $data['count_reviews'] = count($reviews);
        $summ_grades = 0;

        $general_grades = [
            '5' => [
                'count' => 0,
                'percent' => 0
            ],
            '4' => [
                'count' => 0,
                'percent' => 0
            ],
            '3' => [
                'count' => 0,
                'percent' => 0
            ],
            '2' => [
                'count' => 0,
                'percent' => 0
            ],
            '1' => [
                'count' => 0,
                'percent' => 0
            ]
        ];

        $this->load->model('tool/image');

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
                    $images[] = $this->model_tool_image->resize('placeholder.png', 60 * 2);
                }
            }
            
            $dateString = $review['date_added'];
            $date = new DateTime($dateString);
            setlocale(LC_TIME, 'ru_RU.UTF-8');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());

            $grade = (int)$review['rating'];
            $summ_grades += $grade;
            $grades = [];
            for ($i = 1; $i <= 5; $i++) {
                $class = 'empty';
                if ($i <= $grade) {
                    $class = 'fill';
                }
                $grades[] = $class;
            }

            $general_grades[$grade]['count']++;
            $general_grades[$grade]['percent'] = round($general_grades[$grade]['count'] / $data['count_reviews'] * 100);

            $data['reviews'][] = [
                'name' => $review['author'],
                'images' => $images,
                'initial' => mb_substr($review['author'], 0, 1),
                'grades' => $grades,
                'rating' => (int)$review['rating'] / 100,
                'text' => $review['text'],
                'date' => $formattedDate,
            ];
        }

        $data['annual_grade'] = round($summ_grades / $data['count_reviews'], 1);
        $data['general_grades'] = $general_grades;

        //$data['faqs'] = [];
        //$id = 0;
        //foreach ($faqsGroup as $faq) {
        //    $faqs = $this->model_information_faq->getAllFaqs($faq['faq_id']);
        //    $data['faqs'][] = [
        //        'id' => $id++,
        //        'faq_id' => $faq['faq_id'],
        //        'name' => $faq['name'],
        //        'children' => $faqs
        //    ];
        //}

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/reviews', $data));
    }
}