<?php

class ControllerInformationVacancies extends Controller
{

    public $errors = [];

    public function index()
    {
        $this->load->language('information/vacancies');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->language->get('heading_title');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/vacancies')
        );

        $this->load->model('information/vacancy');

        $results = $this->model_information_vacancy->getAllVacancies();

        $data['vacancies'] = [];

        if (!empty($results)) {
            foreach ($results as $result) {
                $data['vacancies'][] = array(
                    'title' => $result['title'],
                    'responsibility' => html_entity_decode($result['responsibility']),
                    //'responsibility' => strip_tags(mb_substr($result['responsibility'], 0, 200)) . '...',
                    //'responsibility' => mb_substr(strip_tags(html_entity_decode($result['responsibility'])), 0, 150) . '...',
                    //'requirements' => html_entity_decode($result['requirements']),
                    //'conditions' => html_entity_decode($result['conditions']),
                    'href' => $this->url->link('information/vacancies/one', 'vacancy_id=' . $result['vacancy_id'])
                );
            }
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/vacancies', $data));
    }

    public function one()
    {
        $this->load->language('information/vacancies');

        $this->load->model('information/vacancy');

        $result = $this->model_information_vacancy->getVacancy($this->request->get['vacancy_id']);

        $data['title'] = $result['title'];
        $data['vacancy_id'] = $result['vacancy_id'];

        $this->document->setTitle($result['title']);

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('breadcrumbs_title'),
            'href' => $this->url->link('information/vacancies')
        );

        $data['breadcrumbs'][] = array(
            'text' => $result['title'],
            'href' => $this->url->link('information/vacancies/one', 'vacancy_id=' . $this->request->get['vacancy_id'])
        );


        $data['title'] = $result['title'];
        $data['responsibility'] = html_entity_decode($result['responsibility']);
        $data['requirements'] = html_entity_decode($result['requirements']);
        $data['conditions'] = html_entity_decode($result['conditions']);
        $data['telephone'] = $this->config->get('config_telephone');
        $data['telephone_for_link'] = str_replace(' ', '', $data['telephone'],);
        $data['email_for_store'] = nl2br($this->config->get('config_email'));
        $data['date_modified'] = $result['date_modified'];

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/vacancy', $data));
    }

    public function addReply()
    {
        $json = array();

        if (isset($this->request->post['name']) && isset($this->request->post['phone']) && isset($this->request->post['email']) && isset($this->request->post['message']) && $this->validate()) {
            $data = [];
            $data['name'] = $this->request->post['name'];
            $data['phone'] = $this->request->post['phone'];
            $data['email'] = $this->request->post['email'];
            $data['message'] = $this->request->post['message'];
            $data['vacancy_id'] = $this->request->post['vacancy_id'];

            if (isset($this->request->files['file']) && !empty($this->request->files['file']['name']) && count($this->request->files['file']['name']) > 1) {

                unset($this->request->files['file']['name'][0]);
                unset($this->request->files['file']['type'][0]);
                unset($this->request->files['file']['tmp_name'][0]);
                unset($this->request->files['file']['error'][0]);
                unset($this->request->files['file']['size'][0]);

                foreach ($this->request->files['file']['tmp_name'] as $file) {
                    if (!is_file($file)) {
                        $this->errors['file'] = 'Файл не существует';
                    }

                    $content = file_get_contents($file);

                    if (preg_match('/\<\?php/i', $content)) {
                        $this->errors['file'] = 'Нельзя использовать PHP в файле';
                    }
                }

                $filetypes = ['pdf', 'odt', 'doc', 'docx'];

                foreach ($this->request->files['file']['name'] as $file) {
                    // Sanitize the filename
                    $filename = basename(html_entity_decode($file, ENT_QUOTES, 'UTF-8'));

                    if (!is_file($file)) {
                        if (!in_array(strtolower(substr(strrchr($filename, '.'), 1)), $filetypes)) {
                            $this->errors['file'] = 'Неверный тип файла';
                        }
                    }
                }

                $mime_allowed = ['application/vnd.oasis.opendocument.text', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf'];

                foreach ($this->request->files['file']['type'] as $file_type) {
                    if (!in_array($file_type, $mime_allowed)) {
                        $this->errors['file'] = 'Неверный тип файла';
                    }
                }

                foreach ($this->request->files['file']['error'] as $file_error) {
                    if ($file_error != UPLOAD_ERR_OK) {
                        $this->errors['file'] = 'Ошибка загрузки файла';
                    }
                }

                foreach ($this->request->files['file']['size'] as $file_size) {
                    if ($file_size > 1000000) {
                        $this->errors['file'] = 'Файл должен весить не более 1мб';
                    }
                }
            }

            if (!isset($this->errors['file'])) {
                foreach ($this->request->files['file']['name'] as $key => $fileMessage) {
                    $filename = basename(html_entity_decode($fileMessage, ENT_QUOTES, 'UTF-8'));
                    // if ((utf8_strlen($filename) > 128)) {
                    //     $filename = mb_substr($filename, -128, 128, 'UTF-8');
                    // }
                    // $file = token(32) . '.' . $filename;

                    $uniqueString = base64_encode(random_bytes(16));
                    $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
                    $file = $uniqueString . '.' . $fileExtension;

                    move_uploaded_file($this->request->files['file']['tmp_name'][$key], DIR_IMAGE . 'catalog/replies/' . $file);
                    $data['files'][] = 'catalog/replies/' . $file;
                }

                $this->load->model('information/reply');
                $this->model_information_reply->addReply($data);
                $json['success'] = 'Спасибо. Мы получили ваши данные и скоро свяжемся с вами.';
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

        if ((utf8_strlen(trim($this->request->post['phone']))) < 9 || (utf8_strlen(trim($this->request->post['phone']))) > 15) {
            $this->errors['phone'] = 'Поле Телефон должен содержать от 9 до 15 символов';
        }

        if ((utf8_strlen(trim($this->request->post['email']))) < 4 || (utf8_strlen(trim($this->request->post['email']))) > 96) {
            $this->errors['email'] = 'Электронная почта должна содержать от 4 до 96 символов';
        }

        if (!isset($this->request->post['agree'])) {
            $this->errors['agree'] = 'Вы должны дать согласие на обработку персональных данных';
        }

        return !$this->errors;
    }
}