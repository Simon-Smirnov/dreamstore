<?php

class ModelInformationLoyalty extends Model
{

    public function getLoyalties()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "loyalty ORDER BY sort_order");

        return $query->rows;
    }
}