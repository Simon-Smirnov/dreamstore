<?php

class ControllerInformationReviews extends Controller
{

    public $errors = [];

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
                    $images[] = ['default' => $this->model_tool_image->resize('placeholder.png', 60 * 2)];
                }
            }

            $results = $this->model_information_reviews->getVideos($review['reviews_id']);

            $videos = [];
            foreach ($results as $result) {
                if ($result['video']) {
                    $videos[]['href'] = $result['video'];
                }
            }

            $dateString = $review['date_added'];
            $date = new DateTime($dateString);
            setlocale(LC_ALL, 'russian');
            $formattedDate = strftime('%d %B %Y', $date->getTimestamp());
            $formattedDate = iconv('windows-1251', 'utf-8', $formattedDate);

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
                'videos' => $videos,
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

    public function add()
    {
        $json = array();

        if (isset($this->request->post['name']) && isset($this->request->post['phone']) && isset($this->request->post['email']) && isset($this->request->post['review']) && isset($this->request->post['grade']) && $this->validate()) {
            $data = [];
            $data['author'] = $this->request->post['name'];
            $data['phone'] = $this->request->post['phone'];
            $data['email'] = $this->request->post['email'];
            $data['text'] = $this->request->post['review'];
            $data['rating'] = $this->request->post['grade'];

            if (isset($this->request->files['image']) && !empty($this->request->files['image']['name']) && count($this->request->files['image']['name']) > 1) {

                unset($this->request->files['image']['name'][0]);
                unset($this->request->files['image']['type'][0]);
                unset($this->request->files['image']['tmp_name'][0]);
                unset($this->request->files['image']['error'][0]);
                unset($this->request->files['image']['size'][0]);

                foreach ($this->request->files['image']['tmp_name'] as $image) {
                    if (!is_file($image)) {
                        $this->errors['image'] = 'Файл не существует';
                    }

                    $content = file_get_contents($image);

                    if (preg_match('/\<\?php/i', $content)) {
                        $this->errors['image'] = 'Нельзя использовать PHP в изображении';
                    }
                }

                $filetypes = ['jpg', 'jpeg', 'png', 'mp4'];

                foreach ($this->request->files['image']['name'] as $image) {
                    // Sanitize the filename
                    $filename = basename(html_entity_decode($image, ENT_QUOTES, 'UTF-8'));

                    if (!is_file($image)) {
                        if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $filetypes)) {
                            $this->errors['image'] = 'Неверный тип файла';
                        }
                    }
                }

                $mime_allowed = ['image/png', 'image/jpeg', 'image/jpg', 'video/mp4'];

                foreach ($this->request->files['image']['type'] as $image_type) {
                    if (!in_array($image_type, $mime_allowed)) {
                        $this->errors['image'] = 'Неверный тип файла';
                    }
                }

                foreach ($this->request->files['image']['error'] as $image_error) {
                    if ($image_error != UPLOAD_ERR_OK) {
                        $this->errors['image'] = 'Ошибка загрузки файла';
                    }
                }

                //foreach ($this->request->files['image']['size'] as $image_size) {
                //    if ($image_size > 5000000) {
                //        $this->errors['image'] = 'Файл должен весить не более 5мб';
                //    }
                //}

                foreach ($this->request->files['image']['size'] as $key => $image_size) {
                    $image_type = $this->request->files['image']['type'][$key];
                    if ($image_type == 'video/mp4') {
                        if ($image_size > 20000000) {
                            $this->errors['image'] = 'Видео должно весить не более 20мб';
                        }
                    } else if ($image_type == 'image/png' || $image_type == 'image/jpeg' || $image_type == 'image/jpg') {
                        if ($image_size > 5000000) {
                            $this->errors['image'] = 'Картинка должна весить не более 5мб';
                        }
                    }
                }
            }

            if (!isset($this->errors['image'])) {
                //foreach ($this->request->files['image']['name'] as $key => $image) {
                //    $filename = basename(html_entity_decode($image, ENT_QUOTES, 'UTF-8'));
                //    if ((utf8_strlen($filename) > 128)) {
                //        $filename = mb_substr($filename, -128, 128, 'UTF-8');
                //    }
                //    $file = token(32) . '.' . $filename;
                //
                //    move_uploaded_file($this->request->files['image']['tmp_name'][$key], DIR_IMAGE . 'catalog/reviews/' . $file);
                //    $data['images'][] = 'catalog/reviews/' . $file;
                //}

                $data['images'] = [];
                $data['videos'] = [];

                foreach ($this->request->files['image']['name'] as $key => $image) {
                    $filename = basename(html_entity_decode($image, ENT_QUOTES, 'UTF-8'));

                    // if (utf8_strlen($filename) > 32) {
                    //     $filename = mb_substr($filename, -32, 32, 'UTF-8');
                    // }
                    // $file = token(32) . '.' . $filename;

                    // if (utf8_strlen($filename) > 32) {
                    //     $filename = mb_substr($filename, -32, 32, 'UTF-8');
                    // }

                    $uniqueString = base64_encode(random_bytes(16));
                    $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
                    $file = $uniqueString . '.' . $fileExtension;

                    $tmpName = $this->request->files['image']['tmp_name'][$key];
                    $fileType = $this->request->files['image']['type'][$key];

                    move_uploaded_file($tmpName, DIR_IMAGE . 'catalog/reviews/' . $file);

                    if ($fileType == 'video/mp4') {
                        $data['videos'][] = 'catalog/reviews/' . $file;
                    } elseif ($fileType == 'image/png' || $fileType == 'image/jpeg') {
                        $data['images'][] = 'catalog/reviews/' . $file;
                    }
                }

                $this->load->model('information/reviews');
                $this->model_information_reviews->addReview($data);
                $json['success'] = 'Спасибо за ваш отзыв! После проверки администратором он будет добавлен на сайт.';
            } else {
                $json['errors'] = $this->errors;
            }
        } else {
            $json['errors'] = $this->errors;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function validate()
    {

        if ((utf8_strlen(trim($this->request->post['name']))) < 2 || (utf8_strlen(trim($this->request->post['name']))) > 64) {
            $this->errors['name'] = 'Поле Имя должно содержать от 2 до 64 символов';
        }

        if ((utf8_strlen(trim($this->request->post['phone']))) < 9 || (utf8_strlen(trim($this->request->post['phone']))) > 20) {
            $this->errors['phone'] = 'Поле Телефон должен содержать от 9 до 15 символов';
        }

        if ((utf8_strlen(trim($this->request->post['email']))) < 4 || (utf8_strlen(trim($this->request->post['email']))) > 96) {
            $this->errors['email'] = 'Электронная почта должна содержать от 4 до 96 символов';
        }

        if ((utf8_strlen(trim($this->request->post['review']))) < 10) {
            $this->errors['review'] = 'Отзыв должен быть минимум 10 символов';
        }

        if (!isset($this->request->post['agree'])) {
            $this->errors['agree'] = 'Вы должны дать согласие на обработку персональных данных';
        }

        return !$this->errors;
    }
}