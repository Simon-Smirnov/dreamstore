<?php

class ModelInformationAdvice extends Model
{

    public function getGroupAdvices()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "advice ORDER BY sort_order");

        return $query->rows;
    }

    public function getAllAdvices($parent_id)
    {
        //$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "faq f LEFT JOIN " . DB_PREFIX . "faq_answer fa ON (f.faq_id = fa.parent_id) ORDER BY fа.sort_order");
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "advice_answer WHERE parent_id = '" . (int)$parent_id . "' ORDER BY sort_order");

        return $query->rows;
    }
}