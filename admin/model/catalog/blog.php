<?php

class ModelCatalogBlog extends Model
{
    public function addBlog($data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "blog SET blog_category_id = '" . (int)$data['category'] . "', title = '" . $this->db->escape($data['title']) . "', theme = '" . $this->db->escape($data['theme']) . "', title_h2 = '" . $this->db->escape($data['title_h2']) . "', description = '" . $this->db->escape($data['description']) . "', image = '" . $this->db->escape($data['image']) . "', title_expert = '" . $this->db->escape($data['title_expert']) . "', description_expert = '" . $this->db->escape($data['description_expert']) . "', name_expert = '" . $this->db->escape($data['name_expert']) . "', title_slider = '" . $this->db->escape($data['title_slider']) . "', title_video = '" . $this->db->escape($data['title_video']) . "', video = '" . $this->db->escape($data['video']) . "', status = '" . $this->db->escape($data['status']) . "', sort_order = '" . (int)$data['sort_order'] . "', date_blog = '" . $this->db->escape($data['date_blog']) . "', date_added = NOW(), date_modified = NOW()");

        $blog_id = $this->db->getLastId();

        if (isset($data['blog_image'])) {
            foreach ($data['blog_image'] as $blog_image) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_image SET blog_id = '" . (int)$blog_id . "', image = '" . $this->db->escape($blog_image['image']) . "', sort_order = '" . (int)$blog_image['sort_order'] . "'");
            }
        }

        $this->cache->delete('blog');

        return $blog_id;
    }

    public function editBlog($blog_id, $data)
    {
        $this->db->query("UPDATE " . DB_PREFIX . "blog SET blog_category_id = '" . (int)$data['category'] . "', title = '" . $this->db->escape($data['title']) . "', theme = '" . $this->db->escape($data['theme']) . "', title_h2 = '" . $this->db->escape($data['title_h2']) . "', description = '" . $this->db->escape($data['description']) . "', image = '" . $this->db->escape($data['image']) . "', title_expert = '" . $this->db->escape($data['title_expert']) . "', description_expert = '" . $this->db->escape($data['description_expert']) . "', name_expert = '" . $this->db->escape($data['name_expert']) . "', title_slider = '" . $this->db->escape($data['title_slider']) . "', title_video = '" . $this->db->escape($data['title_video']) . "', video = '" . $this->db->escape($data['video']) . "', status = '" . $this->db->escape($data['status']) . "', sort_order = '" . (int)$data['sort_order'] . "', date_blog = '" . $this->db->escape($data['date_blog']) . "', date_modified = NOW() WHERE blog_id = '" . (int)$blog_id . "'");

        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_image WHERE blog_id = '" . (int)$blog_id . "'");

        if (isset($data['blog_image'])) {
            foreach ($data['blog_image'] as $blog_image) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "blog_image SET blog_id = '" . (int)$blog_id . "', image = '" . $this->db->escape($blog_image['image']) . "', sort_order = '" . (int)$blog_image['sort_order'] . "'");
            }
        }

        $this->cache->delete('blog');
    }

    public function deleteBlog($blog_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog WHERE blog_id = '" . (int)$blog_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "blog_image WHERE blog_id = '" . (int)$blog_id . "'");

        $this->cache->delete('blog');
    }

    public function getBlog($blog_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog WHERE blog_id = '" . (int)$blog_id . "'");

        return $query->row;
    }

    public function getBlogCategory($blog_category_id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "blog_category  WHERE blog_category_id = '" . (int)$blog_category_id . "'");

        return $query->row;
    }

    public function getBlogCategories()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_category");

        return $query->rows;
    }

    protected function sqlFilter($data)
    {
        $sql = '';

        if (!empty($data['filter_title'])) {
            $sql .= " AND title LIKE '%" . $this->db->escape($data['filter_title']) . "%'";
        }

        if (!empty($data['filter_category'])) {
            $sql .= " AND bc.name LIKE '%" . $this->db->escape($data['filter_category']) . "%'";
        }

        if (isset($data['filter_status']) && $data['filter_status'] !== '') {
            $sql .= " AND status = '" . (int)$data['filter_status'] . "'";
        }

        return $sql;
    }

    public function getBlogs($data = array())
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "blog b";

        if (isset($data['filter_category'])) {
            $sql .= " LEFT JOIN " . DB_PREFIX . "blog_category bc ON (b.blog_category_id = bc.blog_category_id)";
        }

        $sql .= " WHERE 1=1 ";

        $sql .= $this->sqlFilter($data);

        $sql .= " GROUP BY blog_id";

        $sort_data = array(
            'b.title',
            'theme',
            'category',
            'status',
            'sort_order'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY b.title";
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

    public function getBLogsByCategoryId($category_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (p.product_id = p2c.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p2c.category_id = '" . (int)$category_id . "' ORDER BY pd.name ASC");

        return $query->rows;
    }

    public function getBlogImages($blog_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_image WHERE blog_id = '" . (int)$blog_id . "' ORDER BY sort_order ASC");

        return $query->rows;
    }

    public function getTotalBlogs($data = array())
    {
        $sql = "SELECT COUNT(*) as total FROM " . DB_PREFIX . "blog b";

        if (isset($data['filter_category'])) {
            $sql .= " LEFT JOIN " . DB_PREFIX . "blog_category bc ON (b.blog_category_id = bc.blog_category_id)";
        }

        $sql .= " WHERE 1=1 ";

        $sql .= $this->sqlFilter($data);

        $query = $this->db->query($sql);

        return $query->row['total'];
    }
}
