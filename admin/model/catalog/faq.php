<?php

class ModelCatalogFaq extends Model
{
    public function addFaq($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "faq SET `name` = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'");
    }

    public function addFaqAnswer($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "faq_answer SET parent_id = '" . (int)$data['parent_id'] . "', title = '" . $this->db->escape($data['title']) . "', answer = '" . $this->db->escape($data['answer']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "'");

        $this->cache->delete('faq');
    }

    public function editFaq($faq_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "faq SET name = '" . $this->db->escape($data['name']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "' WHERE faq_id = '" . (int)$faq_id . "'");

        $this->cache->delete('faq');
    }

    public function editFaqAnswer($faq_answer_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "faq_answer SET  title = '" . $this->db->escape($data['title']) . "', answer = '" . $this->db->escape($data['answer']) . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "' WHERE faq_answer_id = '" . (int)$faq_answer_id . "'");

        $this->cache->delete('faq');
    }

    public function deleteFaq($faq_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "faq` WHERE faq_id = '" . (int)$faq_id . "'");

        $this->cache->delete('faq');
    }

    public function deleteFaqAnswer($faq_answer_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "faq_answer` WHERE faq_answer_id = '" . (int)$faq_answer_id . "'");
        $this->cache->delete('faq');
    }

    public function getFaq($faq_id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "faq WHERE faq_id = '" . (int)$faq_id . "'");

        return $query->row;
    }

    public function getFaqAnswer($faq_answer_id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "faq_answer WHERE faq_answer_id = '" . (int)$faq_answer_id . "'");

        return $query->row;
    }

    public function getFaqs($data = array())
    {
        if ($data) {
            $sql = "SELECT * FROM " . DB_PREFIX . "faq";

            $sort_data = array(
                'name',
                'sort_order'
            );

            if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
                $sql .= " ORDER BY " . $data['sort'];
            } else {
                $sql .= " ORDER BY name";
            }

            if (isset($data['order']) && ($data['order'] == 'DESC')) {
                $sql .= " DESC";
            } else {
                $sql .= " ASC";
            }

            if (isset($data['start']) || isset($data['limit'])) {
                if (!isset($data['start']) || $data['start'] < 0) {
                    $data['start'] = 0;
                }

                if (!isset($data['limit']) || $data['limit'] < 1) {
                    $data['limit'] = 20;
                }

                $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
            }

            $query = $this->db->query($sql);

            return $query->rows;
        } else {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq");
            $faqs_data = $query->rows;

            return $faqs_data;
        }
    }

    public function getFaqAnswers($parent_id, $data = array())
    {
        if ($data) {
            $sql = "SELECT * FROM " . DB_PREFIX . "faq_answer WHERE parent_id = '" . (int)$parent_id . "'";

            $sort_data = array(
                'title',
                'sort_order'
            );

            if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
                $sql .= " ORDER BY " . $data['sort'];
            } else {
                $sql .= " ORDER BY name";
            }

            if (isset($data['order']) && ($data['order'] == 'DESC')) {
                $sql .= " DESC";
            } else {
                $sql .= " ASC";
            }

            if (isset($data['start']) || isset($data['limit'])) {
                if (!isset($data['start']) || $data['start'] < 0) {
                    $data['start'] = 0;
                }

                if (!isset($data['limit']) || $data['limit'] < 1) {
                    $data['limit'] = 20;
                }

                $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
            }

            $query = $this->db->query($sql);

            return $query->rows;
        } else {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq_answer");
            $faqs_data = $query->rows;

            return $faqs_data;
        }
    }

    public function getInformationDescriptions($information_id)
    {
        $information_description_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_description WHERE information_id = '" . (int)$information_id . "'");

        foreach ($query->rows as $result) {
            $information_description_data[$result['language_id']] = array(
                'title' => $result['title'],
                'description' => $result['description'],
                'meta_h1' => $result['meta_h1'],
                'meta_title' => $result['meta_title'],
                'meta_description' => $result['meta_description'],
                'meta_keyword' => $result['meta_keyword']
            );
        }

        return $information_description_data;
    }

    public function getInformationStores($information_id)
    {
        $information_store_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_to_store WHERE information_id = '" . (int)$information_id . "'");

        foreach ($query->rows as $result) {
            $information_store_data[] = $result['store_id'];
        }

        return $information_store_data;
    }

    public function getInformationSeoUrls($information_id)
    {
        $information_seo_url_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'information_id=" . (int)$information_id . "'");

        foreach ($query->rows as $result) {
            $information_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
        }

        return $information_seo_url_data;
    }

    public function getInformationLayouts($information_id)
    {
        $information_layout_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_to_layout WHERE information_id = '" . (int)$information_id . "'");

        foreach ($query->rows as $result) {
            $information_layout_data[$result['store_id']] = $result['layout_id'];
        }

        return $information_layout_data;
    }

    public function getTotalFaqs()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq");

        return $query->row['total'];
    }

    public function getTotalFaqAnswers($parent_id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "faq_answer WHERE parent_id = '" . (int)$parent_id . "'");

        return $query->row['total'];
    }

    public function getTotalInformationsByLayoutId($layout_id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "information_to_layout WHERE layout_id = '" . (int)$layout_id . "'");

        return $query->row['total'];
    }
}