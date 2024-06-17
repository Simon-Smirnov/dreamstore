<?php

class ModelCatalogReply extends Model
{
    public function addVacancy($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "vacancy SET title = '" . $this->db->escape($data['title']) . "', responsibility = '" . $this->db->escape($data['responsibility']) . "', requirements = '" . $this->db->escape($data['requirements']) . "', conditions = '" . $this->db->escape($data['conditions']) . "', date_modified = '" . $this->db->escape($data['date_modified']) . "', status = '" . (int)$data['status'] . "', sort_order = '" . (int)$data['sort_order'] . "', date_added = NOW()");

        $vacancy_id = $this->db->getLastId();

        $this->cache->delete('vacancy');

        return $vacancy_id;
    }

    public function editVacancy($vacancy_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "vacancy SET title = '" . $this->db->escape($data['title']) . "', responsibility = '" . $this->db->escape($data['responsibility']) . "', requirements = '" . $this->db->escape($data['requirements']) . "', conditions = '" . $this->db->escape($data['conditions']) . "', date_modified = '" . $this->db->escape($data['date_modified']) . "', status = '" . (int)$data['status'] . "', sort_order = '" . (int)$data['sort_order'] . "' WHERE vacancy_id = '" . (int)$vacancy_id . "'");

        $this->cache->delete('vacancy');
    }

    public function deleteVacancy($vacancy_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "vacancy WHERE vacancy_id = '" . (int)$vacancy_id . "'");

        $this->cache->delete('vacancy');
    }

    public function getVacancy($vacancy_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "vacancy WHERE vacancy_id = '" . (int)$vacancy_id . "'");

        return $query->row;
    }

    public function getReplies($data = array())
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "reply";

        $sort_data = array(
            'name',
            'email',
            'message',
            'date_added',
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY date_added";
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
    }

    public function getProductFilters($product_id)
    {
        $product_filter_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_filter WHERE product_id = '" . (int)$product_id . "'");

        foreach ($query->rows as $result) {
            $product_filter_data[] = $result['filter_id'];
        }

        return $product_filter_data;
    }

    public function getTotalReplies()
    {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "reply";

        $query = $this->db->query($sql);

        return $query->row['total'];
    }
}
