<?php

class ModelCatalogColor extends Model
{
    public function getColorHex($color_id)
    {
        $query = $this->db->query("SELECT `hex` FROM " . DB_PREFIX . "colors WHERE color_id = '" . (int)$color_id . "'");

        return $query->row['hex'];
    }

    public function getColors()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "colors ORDER BY title");

        return $query->rows;
    }
}