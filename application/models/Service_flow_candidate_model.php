<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Service_flow_candidate_model extends CI_Model
{

    public $table = 'service_flow_candidate';

    public $id = 'id_service_flow_candidate';

    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_service_flow_candidate()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_service_flow_candidate($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows_service_flow_candidate($q = NULL)
    {
        $this->db->like('id_service_flow_candidate', $q);
        $this->db->or_like('name_service_flow_candidate', $q);
        $this->db->or_like('description_service_flow_candidate', $q);
        $this->db->or_like('icon_flow_candidate', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_service_flow_candidate($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_service_flow_candidate', $q);
        $this->db->or_like('name_service_flow_candidate', $q);
        $this->db->or_like('description_service_flow_candidate', $q);
        $this->db->or_like('icon_flow_candidate', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_service_flow_candidate($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_service_flow_candidate($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_service_flow_candidate($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Service_flow_candidate_model.php */
/* Location: ./application/models/Service_flow_candidate_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-22 08:27:07 */