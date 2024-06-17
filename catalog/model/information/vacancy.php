<?php

class ModelInformationVacancy extends Model
{

    public function getAllVacancies()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "vacancy WHERE status = 1 ORDER BY sort_order");

        return $query->rows;
    }

    public function getVacancy($vacancy_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "vacancy WHERE vacancy_id = " . (int)$vacancy_id);
        return $query->row;
    }
}