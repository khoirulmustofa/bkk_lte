<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Company_model extends CI_Model
{

    public $table = 'company';

    public $id = 'id_company';

    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_company()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_company($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows_company($q = NULL)
    {
        $this->db->like('id_company', $q);
        $this->db->or_like('name_company', $q);
        $this->db->or_like('address_company', $q);
        $this->db->or_like('email_company', $q);
        $this->db->or_like('telepohone_company', $q);
        $this->db->or_like('pic_company', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_company($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_company', $q);
        $this->db->or_like('name_company', $q);
        $this->db->or_like('address_company', $q);
        $this->db->or_like('email_company', $q);
        $this->db->or_like('telepohone_company', $q);
        $this->db->or_like('pic_company', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_company($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_company($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_company($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Company_model.php */
/* Location: ./application/models/Company_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-21 10:06:18 */