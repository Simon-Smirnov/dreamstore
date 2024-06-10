<?php

class ModelInformationFaq extends Model
{

    public function getGroupFaqs()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq ORDER BY sort_order");

        return $query->rows;
    }

    public function getAllFaqs($parent_id)
    {
        //$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_answer fa ON (f.faq_id = fa.parent_id) ORDER BY fа.sort_order");
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq_answer WHERE parent_id = '" . (int)$parent_id . "' ORDER BY sort_order");

        return $query->rows;
    }
}