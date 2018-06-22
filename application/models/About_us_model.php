<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class About_us_model extends CI_Model
{

    public $table = 'about_us';

    public $id = 'id_about_us';

    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_about_us()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_about_us($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows_about_us($q = NULL)
    {
        $this->db->like('id_about_us', $q);
        $this->db->or_like('name_about_us', $q);
        $this->db->or_like('description_about_us', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_about_us($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_about_us', $q);
        $this->db->or_like('name_about_us', $q);
        $this->db->or_like('description_about_us', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_about_us($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_about_us($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_about_us($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
    
    /* End of file About_us_model.php */
    /* Location: ./application/models/About_us_model.php */
    /* Please DO NOT modify this information : */
    /* Created by Khoirul Mustofa 2018-06-22 08:00:48 */