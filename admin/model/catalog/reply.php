<?php

class ModelCatalogReply extends Model
{

    public function deleteReply($reply_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "reply WHERE reply_id = '" . (int)$reply_id . "'");

        $this->cache->delete('reply');
    }

    public function getReply($reply_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "reply WHERE reply_id = '" . (int)$reply_id . "'");

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

    public function getTotalReplies()
    {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "reply";

        $query = $this->db->query($sql);

        return $query->row['total'];
    }

    public function getReplyFiles($reply_id)
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "reply_files WHERE reply_id = '" . (int)$reply_id . "' ORDER BY sort_order";

        $query = $this->db->query($sql);

        return $query->rows;
    }

}
