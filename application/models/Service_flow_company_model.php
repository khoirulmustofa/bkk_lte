<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Service_flow_company_model extends CI_Model
{

    public $table = 'service_flow_company';

    public $id = 'id_service_flow_company';

    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_service_flow_company()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_service_flow_company($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows_service_flow_company($q = NULL)
    {
        $this->db->like('id_service_flow_company', $q);
        $this->db->or_like('name_service_flow_company', $q);
        $this->db->or_like('description_flow_company', $q);
        $this->db->or_like('icon_flow_company', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_service_flow_company($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_service_flow_company', $q);
        $this->db->or_like('name_service_flow_company', $q);
        $this->db->or_like('description_flow_company', $q);
        $this->db->or_like('icon_flow_company', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_service_flow_company($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_service_flow_company($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_service_flow_company($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Service_flow_company_model.php */
/* Location: ./application/models/Service_flow_company_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-22 08:50:48 */