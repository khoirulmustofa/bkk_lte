<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobs_model extends CI_Model
{

    public $table = 'jobs';

    public $id = 'id_jobs';

    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all_jobs()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_jobs($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows_jobs($q = NULL)
    {
        $this->db->like('id_jobs', $q);
        $this->db->or_like('nama_jobs', $q);
        $this->db->or_like('description_jobs', $q);
        $this->db->or_like('general_requirement_jobs', $q);
        $this->db->or_like('language_requirement_jobs', $q);
        $this->db->or_like('benefits_jobs', $q);
        $this->db->or_like('salary_jobs', $q);
        $this->db->or_like('work_location_jobs', $q);
        $this->db->or_like('working_hours_jobs', $q);
        $this->db->or_like('id_company', $q);
        $this->db->or_like('id_employee', $q);
        $this->db->or_like('date_upload', $q);
        $this->db->or_like('date_close', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data_jobs($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_jobs', $q);
        $this->db->or_like('nama_jobs', $q);
        $this->db->or_like('description_jobs', $q);
        $this->db->or_like('general_requirement_jobs', $q);
        $this->db->or_like('language_requirement_jobs', $q);
        $this->db->or_like('benefits_jobs', $q);
        $this->db->or_like('salary_jobs', $q);
        $this->db->or_like('work_location_jobs', $q);
        $this->db->or_like('working_hours_jobs', $q);
        $this->db->or_like('id_company', $q);
        $this->db->or_like('id_employee', $q);
        $this->db->or_like('date_upload', $q);
        $this->db->or_like('date_close', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert_jobs($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_jobs($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete_jobs($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}

/* End of file Jobs_model.php */
/* Location: ./application/models/Jobs_model.php */
/* Please DO NOT modify this information : */
/* Created by Khoirul Mustofa 2018-06-21 07:35:25 */