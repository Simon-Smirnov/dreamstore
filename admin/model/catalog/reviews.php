<?php

class ModelCatalogReviews extends Model
{
    public function addReview($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "review SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "'");

        $review_id = $this->db->getLastId();

        $this->cache->delete('product');

        return $review_id;
    }

    public function getReview($reviews_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "reviews WHERE reviews_id = '" . (int)$reviews_id . "'");

        return $query->row;
    }

    public function getReviews($data = array())
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "reviews r";

        // if (!empty($data['filter_author'])) {
        // 	$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
        // }

        // if (isset($data['filter_status']) && $data['filter_status'] !== '') {
        // 	$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
        // }

        // if (!empty($data['filter_date_added'])) {
        // 	$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        // }

        $sort_data = array(
            'r.author',
            'r.email',
            'r.phone',
            'r.status',
            'r.date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY r.date_added";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalReviews($data = array())
    {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "reviews r";

        // if (!empty($data['filter_product'])) {
        // 	$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'";
        // }

        // if (!empty($data['filter_author'])) {
        // 	$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
        // }

        // if (isset($data['filter_status']) && $data['filter_status'] !== '') {
        // 	$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
        // }

        // if (!empty($data['filter_date_added'])) {
        // 	$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
        // }

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function getTotalReviewsAwaitingApproval()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review WHERE status = '0'");

        return $query->row['total'];
    }

    public function editReview($reviews_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "reviews SET author = '" . $this->db->escape($data['author']) . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', answer = '" . $this->db->escape(strip_tags($data['answer'])) . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE reviews_id = '" . (int)$reviews_id . "'");
    }

    public function changeStatusReview($reviews_id)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "reviews SET `status` = NOT `status` WHERE reviews_id = '" . (int)$reviews_id . "'");
    }

    public function deleteReview($reviews_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "reviews WHERE reviews_id = '" . (int)$reviews_id . "'");
    }

    public function getPhotos($reviews_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "reviews_image WHERE reviews_id = '" . (int)$reviews_id . "' ORDER BY sort_order");

        return $query->rows;

    }
}