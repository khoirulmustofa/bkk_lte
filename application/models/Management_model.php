<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Management_model extends CI_Model
{

    public $table = 'management';
    public $id = 'id_management';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_management()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_management($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows_management($q = NULL) {
        $this->db->like('id_management', $q);
	$this->db->or_like('name_management', $q);
	$this->db->or_like('description_management', $q);
	$this->db->or_like('photo_management', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_management($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_management', $q);
	$this->db->or_like('name_management', $q);
	$this->db->or_like('description_management', $q);
	$this->db->or_like('photo_management', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_management($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_management($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_management($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Management_model.php */
/* Location: ./application/models/Management_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-23 02:04:12 */