<?php

class ModelCatalogColors extends Model
{
    public function addColor($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "colors SET `title` = '" . $this->db->escape($data['title']) . "', `hex` = '" . $this->db->escape($data['hex']) . "', sort_order = '" . (int)$data['sort_order'] . "', date_added = NOW(), date_updated = NOW()");
    }

    public function editColor($color_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "colors SET title = '" . $this->db->escape($data['title']) . "', `hex` = '" . $this->db->escape($data['hex']) . "', sort_order = '" . (int)$data['sort_order'] . "', date_updated = NOW() WHERE color_id = '" . (int)$color_id . "'");

        $this->cache->delete('color');
    }

    public function deleteColor($color_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "colors` WHERE color_id = '" . (int)$color_id . "'");

        $this->cache->delete('color');
    }

    public function getColor($color_id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "colors WHERE color_id = '" . (int)$color_id . "'");

        return $query->row;
    }

    public function getColors($data = array())
    {
        if ($data) {
            $sql = "SELECT * FROM " . DB_PREFIX . "colors";

            if (isset($data['filter_title'])) {
                $sql .= " WHERE title LIKE '%" . $this->db->escape($data['filter_title']) . "%'";
            }

            $sort_data = array(
                'title',
                'sort_order'
            );

            if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
                $sql .= " ORDER BY " . $data['sort'];
            } else {
                $sql .= " ORDER BY title";
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
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "colors");
            $colors_data = $query->rows;

            return $colors_data;
        }
    }

    public function getTotalColors()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "colors");

        return $query->row['total'];
    }
}