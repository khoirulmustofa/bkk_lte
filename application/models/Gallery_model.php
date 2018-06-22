<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

    public $table = 'gallery';
    public $id = 'id_gallery';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_gallery()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_gallery($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows_gallery($q = NULL) {
        $this->db->like('id_gallery', $q);
	$this->db->or_like('name_gallery', $q);
	$this->db->or_like('description_gallery', $q);
	$this->db->or_like('path_gallery', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_gallery($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_gallery', $q);
	$this->db->or_like('name_gallery', $q);
	$this->db->or_like('description_gallery', $q);
	$this->db->or_like('path_gallery', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_gallery($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_gallery($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_gallery($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Gallery_model.php */
/* Location: ./application/models/Gallery_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-22 09:17:02 */