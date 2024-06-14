<?php

class ModelInformationReviews extends Model
{

    public function getReviews()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "reviews ORDER BY date_added DESC");

        return $query->rows;
    }

    public function getImages($reviews_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "reviews_image WHERE reviews_id = '" . (int)$reviews_id . "' ORDER BY sort_order");

        return $query->rows;
    }

    public function addReview($data)
    {
        //$this->db->query("INSERT INTO " . DB_PREFIX . "reviews SET author = '" . $this->db->escape($data['author']) . "', email = '" . $this->db->escape($data['email']) . "',  phone = '" . $this->db->escape($data['phone']) . "', customer_id = '" . (int)$this->customer->getId() . "', review = '" . $this->db->escape($data['review']) . "', rating = '" . (int)$data['rating'] . "', date_added = NOW()");
        $this->db->query("INSERT INTO " . DB_PREFIX . "reviews SET author = '" . $this->db->escape($data['author']) . "', email = '" . $this->db->escape($data['email']) . "',  phone = '" . $this->db->escape($data['phone']) . "', text = '" . $this->db->escape($data['text']) . "', rating = '" . (int)$data['rating'] . "', date_added = NOW()");

        $reviews_id = $this->db->getLastId();

        $sort_order = 0;
        if (isset($data['images']) && !empty($data['images'])) {
            foreach ($data['images'] as $image) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "reviews_image SET reviews_id = '" . (int)$reviews_id . "', sort_order = '" . $sort_order . "', image = '" . $image . "'");
                $sort_order++;
            }
        }

        //if (in_array('review', (array)$this->config->get('config_mail_alert'))) {
        //    $this->load->language('mail/review');
        //    $this->load->model('information/reviews');
        //
        //    $subject = sprintf($this->language->get('text_subject'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
        //
        //    $message = $this->language->get('text_waiting') . "\n";
        //    $message .= sprintf($this->language->get('text_reviewer'), html_entity_decode($data['name'], ENT_QUOTES, 'UTF-8')) . "\n";
        //    $message .= sprintf($this->language->get('text_rating'), $data['rating']) . "\n";
        //    $message .= $this->language->get('text_review') . "\n";
        //    $message .= html_entity_decode($data['text'], ENT_QUOTES, 'UTF-8') . "\n\n";
        //
        //    $mail = new Mail($this->config->get('config_mail_engine'));
        //    $mail->parameter = $this->config->get('config_mail_parameter');
        //    $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
        //    $mail->smtp_username = $this->config->get('config_mail_smtp_username');
        //    $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
        //    $mail->smtp_port = $this->config->get('config_mail_smtp_port');
        //    $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
        //
        //    $mail->setTo($this->config->get('config_email'));
        //    $mail->setFrom($this->config->get('config_email'));
        //    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
        //    $mail->setSubject($subject);
        //    $mail->setText($message);
        //    $mail->send();
        //
        //    // Send to additional alert emails
        //    $emails = explode(',', $this->config->get('config_mail_alert_email'));
        //
        //    foreach ($emails as $email) {
        //        if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //            $mail->setTo($email);
        //            $mail->send();
        //        }
        //    }
        //}
    }

}