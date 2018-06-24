<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Jobs_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'home/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'home/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'home/';
            $config['first_url'] = base_url() . 'home/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jobs_model->total_rows_jobs($q);
        $home = $this->Jobs_model->get_limit_data_jobs($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'jobs_data' => $home,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'tittle' => 'BKK Khoiurul Mustofa',
            'page' => 'Lowongan Pekerjaan'
        );
        $this->template->load(template() . '/template', template() . '/view_home',$data);
    }
}
