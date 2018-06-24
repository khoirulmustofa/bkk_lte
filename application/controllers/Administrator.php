<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Jobs_model');
        $this->load->model('Company_model');
        $this->load->model('About_us_model');
        $this->load->model('Service_flow_candidate_model');
        $this->load->model('Service_flow_company_model');
        $this->load->model('Gallery_model');
        $this->load->model('Management_model');
        $this->load->library('form_validation');
    }

    public function jobs()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/jobs/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/jobs/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/jobs/';
            $config['first_url'] = base_url() . 'administrator/jobs/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jobs_model->total_rows_jobs($q);
        $jobs = $this->Jobs_model->get_limit_data_jobs($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'jobs_data' => $jobs,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'jobs',
            'title' => 'List Jobs'
        );
        $this->template->load('administrator/template', 'administrator/view_jobs_list', $data);
    }

    public function jobs_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/jobs_create_action'),
            'id_jobs' => set_value('id_jobs'),
            'nama_jobs' => set_value('nama_jobs'),
            'description_jobs' => set_value('description_jobs'),
            'general_requirement_jobs' => set_value('general_requirement_jobs'),
            'language_requirement_jobs' => set_value('language_requirement_jobs'),
            'benefits_jobs' => set_value('benefits_jobs'),
            'salary_jobs' => set_value('salary_jobs'),
            'work_location_jobs' => set_value('work_location_jobs'),
            'working_hours_jobs' => set_value('working_hours_jobs'),
            'id_company' => set_value('id_company'),
            'id_employee' => set_value('id_employee'),
            'date_upload' => set_value('date_upload'),
            'date_close' => set_value('date_close'),
            'page' => 'jobs',
            'title' => 'Create Jobs'
        );
        $this->template->load('administrator/template', 'administrator/view_jobs_form', $data);
    }

    public function jobs_create_action()
    {
        $this->jobs_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->jobs_create();
        } else {
            $data = array(
                'nama_jobs' => $this->input->post('nama_jobs', TRUE),
                'description_jobs' => $this->input->post('description_jobs', TRUE),
                'general_requirement_jobs' => $this->input->post('general_requirement_jobs', TRUE),
                'language_requirement_jobs' => $this->input->post('language_requirement_jobs', TRUE),
                'benefits_jobs' => $this->input->post('benefits_jobs', TRUE),
                'salary_jobs' => $this->input->post('salary_jobs', TRUE),
                'work_location_jobs' => $this->input->post('work_location_jobs', TRUE),
                'working_hours_jobs' => $this->input->post('working_hours_jobs', TRUE),
                'id_company' => $this->input->post('id_company', TRUE),
                'id_employee' => $this->input->post('id_employee', TRUE),
                'date_upload' => $this->input->post('date_upload', TRUE),
                'date_close' => $this->input->post('date_close', TRUE)
            );
            
            $this->Jobs_model->insert_jobs($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/jobs'));
        }
    }

    public function jobs_update($id)
    {
        $row = $this->Jobs_model->get_by_id_jobs($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/jobs_update_action'),
                'id_jobs' => set_value('id_jobs', $row->id_jobs),
                'nama_jobs' => set_value('nama_jobs', $row->nama_jobs),
                'description_jobs' => set_value('description_jobs', $row->description_jobs),
                'general_requirement_jobs' => set_value('general_requirement_jobs', $row->general_requirement_jobs),
                'language_requirement_jobs' => set_value('language_requirement_jobs', $row->language_requirement_jobs),
                'benefits_jobs' => set_value('benefits_jobs', $row->benefits_jobs),
                'salary_jobs' => set_value('salary_jobs', $row->salary_jobs),
                'work_location_jobs' => set_value('work_location_jobs', $row->work_location_jobs),
                'working_hours_jobs' => set_value('working_hours_jobs', $row->working_hours_jobs),
                'id_company' => set_value('id_company', $row->id_company),
                'id_employee' => set_value('id_employee', $row->id_employee),
                'date_upload' => set_value('date_upload', $row->date_upload),
                'date_close' => set_value('date_close', $row->date_close),
                'page' => 'jobs',
                'title' => 'Edit Jobs'
            );
            $this->template->load('administrator/template', 'administrator/view_jobs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/jobs'));
        }
    }

    public function jobs_update_action()
    {
        $this->jobs_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->jobs_update($this->input->post('id_jobs', TRUE));
        } else {
            $data = array(
                'nama_jobs' => $this->input->post('nama_jobs', TRUE),
                'description_jobs' => $this->input->post('description_jobs', TRUE),
                'general_requirement_jobs' => $this->input->post('general_requirement_jobs', TRUE),
                'language_requirement_jobs' => $this->input->post('language_requirement_jobs', TRUE),
                'benefits_jobs' => $this->input->post('benefits_jobs', TRUE),
                'salary_jobs' => $this->input->post('salary_jobs', TRUE),
                'work_location_jobs' => $this->input->post('work_location_jobs', TRUE),
                'working_hours_jobs' => $this->input->post('working_hours_jobs', TRUE),
                'id_company' => $this->input->post('id_company', TRUE),
                'id_employee' => $this->input->post('id_employee', TRUE),
                'date_upload' => $this->input->post('date_upload', TRUE),
                'date_close' => $this->input->post('date_close', TRUE)
            );
            
            $this->Jobs_model->update_jobs($this->input->post('id_jobs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/jobs'));
        }
    }

    public function jobs_delete($id)
    {
        $row = $this->Jobs_model->get_by_id_jobs($id);
        
        if ($row) {
            $this->Jobs_model->delete_jobs($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/jobs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/jobs'));
        }
    }

    public function jobs_rules()
    {
        $this->form_validation->set_rules('nama_jobs', 'nama jobs', 'trim|required');
        $this->form_validation->set_rules('description_jobs', 'description jobs', 'trim|required');
        $this->form_validation->set_rules('general_requirement_jobs', 'general requirement jobs', 'trim|required');
        $this->form_validation->set_rules('language_requirement_jobs', 'language requirement jobs', 'trim|required');
        $this->form_validation->set_rules('benefits_jobs', 'benefits jobs', 'trim|required');
        $this->form_validation->set_rules('salary_jobs', 'salary jobs', 'trim|required');
        $this->form_validation->set_rules('work_location_jobs', 'work location jobs', 'trim|required');
        $this->form_validation->set_rules('working_hours_jobs', 'working hours jobs', 'trim|required');
        $this->form_validation->set_rules('id_company', 'id company', 'trim|required');
        $this->form_validation->set_rules('id_employee', 'id employee', 'trim|required');
        $this->form_validation->set_rules('date_upload', 'date upload', 'trim|required');
        $this->form_validation->set_rules('date_close', 'date close', 'trim|required');
        
        $this->form_validation->set_rules('id_jobs', 'id_jobs', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function company()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/company/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/company/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/company/';
            $config['first_url'] = base_url() . 'administrator/company/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Company_model->total_rows_company($q);
        $company = $this->Company_model->get_limit_data_company($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'company_data' => $company,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'Company',
            'title' => 'List Company'
        );
        $this->template->load('administrator/template', 'administrator/view_company_list', $data);
    }

    public function company_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/company_create_action'),
            'id_company' => set_value('id_company'),
            'name_company' => set_value('name_company'),
            'address_company' => set_value('address_company'),
            'email_company' => set_value('email_company'),
            'telepohone_company' => set_value('telepohone_company'),
            'pic_company' => set_value('pic_company'),
            'page' => 'company',
            'title' => 'Create Company'
        );
        $this->template->load('administrator/template', 'administrator/view_company_form', $data);
    }

    public function company_create_action()
    {
        $this->company_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->company_create();
        } else {
            $data = array(
                'name_company' => $this->input->post('name_company', TRUE),
                'address_company' => $this->input->post('address_company', TRUE),
                'email_company' => $this->input->post('email_company', TRUE),
                'telepohone_company' => $this->input->post('telepohone_company', TRUE),
                'pic_company' => $this->input->post('pic_company', TRUE)
            );
            
            $this->Company_model->insert_company($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/company'));
        }
    }

    public function company_update($id)
    {
        $row = $this->Company_model->get_by_id_company($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/company_update_action'),
                'id_company' => set_value('id_company', $row->id_company),
                'name_company' => set_value('name_company', $row->name_company),
                'address_company' => set_value('address_company', $row->address_company),
                'email_company' => set_value('email_company', $row->email_company),
                'telepohone_company' => set_value('telepohone_company', $row->telepohone_company),
                'pic_company' => set_value('pic_company', $row->pic_company),
                'page' => 'company',
                'title' => 'Edit Company'
            );
            $this->template->load('administrator/template', 'administrator/view_company_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/company'));
        }
    }

    public function company_update_action()
    {
        $this->company_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->company_update($this->input->post('id_company', TRUE));
        } else {
            $data = array(
                'name_company' => $this->input->post('name_company', TRUE),
                'address_company' => $this->input->post('address_company', TRUE),
                'email_company' => $this->input->post('email_company', TRUE),
                'telepohone_company' => $this->input->post('telepohone_company', TRUE),
                'pic_company' => $this->input->post('pic_company', TRUE)
            );
            
            $this->Company_model->update_company($this->input->post('id_company', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/company'));
        }
    }

    public function company_delete($id)
    {
        $row = $this->Company_model->get_by_id_company($id);
        
        if ($row) {
            $this->Company_model->delete_company($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/company'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/company'));
        }
    }

    public function company_rules()
    {
        $this->form_validation->set_rules('name_company', 'name company', 'trim|required');
        $this->form_validation->set_rules('address_company', 'address company', 'trim|required');
        $this->form_validation->set_rules('email_company', 'email company', 'trim|required');
        $this->form_validation->set_rules('telepohone_company', 'telepohone company', 'trim|required');
        $this->form_validation->set_rules('pic_company', 'pic company', 'trim|required');
        
        $this->form_validation->set_rules('id_company', 'id_company', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function about_us()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/about_us/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/about_us/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/about_us/';
            $config['first_url'] = base_url() . 'administrator/about_us/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->About_us_model->total_rows_about_us($q);
        $about_us = $this->About_us_model->get_limit_data_about_us($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'about_us_data' => $about_us,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'about_us',
            'title' => 'List About Us'
        );
        $this->template->load('administrator/template', 'administrator/view_about_us_list', $data);
    }

    public function about_us_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/about_us_create_action'),
            'id_about_us' => set_value('id_about_us'),
            'name_about_us' => set_value('name_about_us'),
            'description_about_us' => set_value('description_about_us'),
            'page' => 'about_us',
            'title' => 'Create About Us'
        );
        $this->template->load('administrator/template', 'administrator/view_about_us_form', $data);
    }

    public function about_us_create_action()
    {
        $this->about_us_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->about_us_create();
        } else {
            $data = array(
                'name_about_us' => $this->input->post('name_about_us', TRUE),
                'description_about_us' => $this->input->post('description_about_us', TRUE)
            );
            
            $this->About_us_model->insert_about_us($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/about_us'));
        }
    }

    public function about_us_update($id)
    {
        $row = $this->About_us_model->get_by_id_about_us($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/about_us_update_action'),
                'id_about_us' => set_value('id_about_us', $row->id_about_us),
                'name_about_us' => set_value('name_about_us', $row->name_about_us),
                'description_about_us' => set_value('description_about_us', $row->description_about_us),
                'page' => 'about_us',
                'title' => 'Edit About Us'
            );
            $this->template->load('administrator/template', 'administrator/view_about_us_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/about_us'));
        }
    }

    public function about_us_update_action()
    {
        $this->about_us_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->about_us_update($this->input->post('id_about_us', TRUE));
        } else {
            $data = array(
                'name_about_us' => $this->input->post('name_about_us', TRUE),
                'description_about_us' => $this->input->post('description_about_us', TRUE)
            );
            
            $this->About_us_model->update_about_us($this->input->post('id_about_us', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/about_us'));
        }
    }

    public function about_us_delete($id)
    {
        $row = $this->About_us_model->get_by_id_about_us($id);
        
        if ($row) {
            $this->About_us_model->delete_about_us($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/about_us'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/about_us'));
        }
    }

    public function about_us_rules()
    {
        $this->form_validation->set_rules('name_about_us', 'name about us', 'trim|required');
        $this->form_validation->set_rules('description_about_us', 'description about us', 'trim|required');
        
        $this->form_validation->set_rules('id_about_us', 'id_about_us', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function service_flow_candidate()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/service_flow_candidate/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/service_flow_candidate/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/service_flow_candidate/';
            $config['first_url'] = base_url() . 'administrator/service_flow_candidate/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Service_flow_candidate_model->total_rows_service_flow_candidate($q);
        $service_flow_candidate = $this->Service_flow_candidate_model->get_limit_data_service_flow_candidate($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'service_flow_candidate_data' => $service_flow_candidate,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'service_flow_candidate',
            'title' => 'List Service Flow Candidate'
        );
        $this->template->load('administrator/template', 'administrator/view_service_flow_candidate_list', $data);
    }

    public function service_flow_candidate_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/service_flow_candidate_create_action'),
            'id_service_flow_candidate' => set_value('id_service_flow_candidate'),
            'name_service_flow_candidate' => set_value('name_service_flow_candidate'),
            'description_service_flow_candidate' => set_value('description_service_flow_candidate'),
            'icon_flow_candidate' => set_value('icon_flow_candidate'),
            'page' => 'service_flow_candidate',
            'title' => 'Create Service Flow Candidate'
        );
        $this->template->load('administrator/template', 'administrator/view_service_flow_candidate_form', $data);
    }

    public function service_flow_candidate_create_action()
    {
        $this->service_flow_candidate_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->service_flow_candidate_create();
        } else {
            $data = array(
                'name_service_flow_candidate' => $this->input->post('name_service_flow_candidate', TRUE),
                'description_service_flow_candidate' => $this->input->post('description_service_flow_candidate', TRUE),
                'icon_flow_candidate' => $this->input->post('icon_flow_candidate', TRUE)
            );
            
            $this->Service_flow_candidate_model->insert_service_flow_candidate($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/service_flow_candidate'));
        }
    }

    public function service_flow_candidate_update($id)
    {
        $row = $this->Service_flow_candidate_model->get_by_id_service_flow_candidate($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/service_flow_candidate_update_action'),
                'id_service_flow_candidate' => set_value('id_service_flow_candidate', $row->id_service_flow_candidate),
                'name_service_flow_candidate' => set_value('name_service_flow_candidate', $row->name_service_flow_candidate),
                'description_service_flow_candidate' => set_value('description_service_flow_candidate', $row->description_service_flow_candidate),
                'icon_flow_candidate' => set_value('icon_flow_candidate', $row->icon_flow_candidate),
                'page' => 'service_flow_candidate',
                'title' => 'Edit Service Flow Candidate'
            );
            $this->template->load('administrator/template', 'administrator/view_service_flow_candidate_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/service_flow_candidate'));
        }
    }

    public function service_flow_candidate_update_action()
    {
        $this->service_flow_candidate_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->service_flow_candidate_update($this->input->post('id_service_flow_candidate', TRUE));
        } else {
            $data = array(
                'name_service_flow_candidate' => $this->input->post('name_service_flow_candidate', TRUE),
                'description_service_flow_candidate' => $this->input->post('description_service_flow_candidate', TRUE),
                'icon_flow_candidate' => $this->input->post('icon_flow_candidate', TRUE)
            );
            
            $this->Service_flow_candidate_model->update_service_flow_candidate($this->input->post('id_service_flow_candidate', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/service_flow_candidate'));
        }
    }

    public function service_flow_candidate_delete($id)
    {
        $row = $this->Service_flow_candidate_model->get_by_id_service_flow_candidate($id);
        
        if ($row) {
            $this->Service_flow_candidate_model->delete_service_flow_candidate($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/service_flow_candidate'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/service_flow_candidate'));
        }
    }

    public function service_flow_candidate_rules()
    {
        $this->form_validation->set_rules('name_service_flow_candidate', 'name service flow candidate', 'trim|required');
        $this->form_validation->set_rules('description_service_flow_candidate', 'description service flow candidate', 'trim|required');
        $this->form_validation->set_rules('icon_flow_candidate', 'icon flow candidate', 'trim|required');
        
        $this->form_validation->set_rules('id_service_flow_candidate', 'id_service_flow_candidate', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function service_flow_company()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q != '') {
            $config['base_url'] = base_url() . 'administrator/service_flow_company/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/service_flow_company/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/service_flow_company/';
            $config['first_url'] = base_url() . 'administrator/service_flow_company/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Service_flow_company_model->total_rows_service_flow_company($q);
        $service_flow_company = $this->Service_flow_company_model->get_limit_data_service_flow_company($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'service_flow_company_data' => $service_flow_company,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'service_flow_company',
            'title' => 'List Service Flow Company'
        );
        $this->template->load('administrator/template', 'administrator/view_service_flow_company_list', $data);
    }

    public function service_flow_company_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/service_flow_company_create_action'),
            'id_service_flow_company' => set_value('id_service_flow_company'),
            'name_service_flow_company' => set_value('name_service_flow_company'),
            'description_flow_company' => set_value('description_flow_company'),
            'icon_flow_company' => set_value('icon_flow_company'),
            'page' => 'service_flow_company',
            'title' => 'Create Service Flow Company'
        );
        $this->template->load('administrator/template', 'administrator/view_service_flow_company_form', $data);
        
    }

    public function service_flow_company_create_action()
    {
        $this->service_flow_company_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->service_flow_company_create();
        } else {
            $data = array(
                'name_service_flow_company' => $this->input->post('name_service_flow_company', TRUE),
                'description_flow_company' => $this->input->post('description_flow_company', TRUE),
                'icon_flow_company' => $this->input->post('icon_flow_company', TRUE)
            );
            
            $this->Service_flow_company_model->insert_service_flow_company($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/service_flow_company'));
        }
    }

    public function service_flow_company_update($id)
    {
        $row = $this->Service_flow_company_model->get_by_id_service_flow_company($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/service_flow_company_update_action'),
                'id_service_flow_company' => set_value('id_service_flow_company', $row->id_service_flow_company),
                'name_service_flow_company' => set_value('name_service_flow_company', $row->name_service_flow_company),
                'description_flow_company' => set_value('description_flow_company', $row->description_flow_company),
                'icon_flow_company' => set_value('icon_flow_company', $row->icon_flow_company),
                'page' => 'service_flow_company',
                'title' => 'Edit Service Flow Company'
            );
            $this->template->load('administrator/template', 'administrator/view_service_flow_company_form', $data);
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/service_flow_company'));
        }
    }

    public function service_flow_company_update_action()
    {
        $this->service_flow_company_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->service_flow_company_update($this->input->post('id_service_flow_company', TRUE));
        } else {
            $data = array(
                'name_service_flow_company' => $this->input->post('name_service_flow_company', TRUE),
                'description_flow_company' => $this->input->post('description_flow_company', TRUE),
                'icon_flow_company' => $this->input->post('icon_flow_company', TRUE)
            );
            
            $this->Service_flow_company_model->update_service_flow_company($this->input->post('id_service_flow_company', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/service_flow_company'));
        }
    }

    public function service_flow_company_delete($id)
    {
        $row = $this->Service_flow_company_model->get_by_id_service_flow_company($id);
        
        if ($row) {
            $this->Service_flow_company_model->delete_service_flow_company($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/service_flow_company'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/service_flow_company'));
        }
    }

    public function service_flow_company_rules()
    {
        $this->form_validation->set_rules('name_service_flow_company', 'name service flow company', 'trim|required');
        $this->form_validation->set_rules('description_flow_company', 'description flow company', 'trim|required');
        $this->form_validation->set_rules('icon_flow_company', 'icon flow company', 'trim|required');
        
        $this->form_validation->set_rules('id_service_flow_company', 'id_service_flow_company', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    
    public function gallery()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'administrator/gallery/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/gallery/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/gallery/';
            $config['first_url'] = base_url() . 'administrator/gallery/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Gallery_model->total_rows_gallery($q);
        $gallery = $this->Gallery_model->get_limit_data_gallery($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'gallery_data' => $gallery,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'gallery',
            'title' => 'List Gallery'
        );
        $this->template->load('administrator/template', 'administrator/view_gallery_list', $data);
    }
       
    public function gallery_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/gallery_create_action'),
            'id_gallery' => set_value('id_gallery'),
            'name_gallery' => set_value('name_gallery'),
            'description_gallery' => set_value('description_gallery'),
            'path_gallery' => set_value('path_gallery'),
            'page' => 'gallery',
            'title' => 'Create Gallery'
        );
        $this->template->load('administrator/template', 'administrator/view_gallery_form', $data);
    }
    
    public function gallery_create_action()
    {
        $this->gallery_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this-> gallery_create();
        } else {
            $data = array(
                'name_gallery' => $this->input->post('name_gallery',TRUE),
                'description_gallery' => $this->input->post('description_gallery',TRUE),
                'path_gallery' => $this->input->post('path_gallery',TRUE),
            );
            
            $this->Gallery_model->insert_gallery($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/gallery'));
        }
    }
    
    public function gallery_update($id)
    {
        $row = $this->Gallery_model->get_by_id_gallery($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/gallery_update_action'),
                'id_gallery' => set_value('id_gallery', $row->id_gallery),
                'name_gallery' => set_value('name_gallery', $row->name_gallery),
                'description_gallery' => set_value('description_gallery', $row->description_gallery),
                'path_gallery' => set_value('path_gallery', $row->path_gallery),
                'page' => 'gallery',
                'title' => 'Edit Gallery'
            );
            $this->template->load('administrator/template', 'administrator/view_gallery_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/gallery'));
        }
    }
    
    public function gallery_update_action()
    {
        $this->gallery_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->gallery_update($this->input->post('id_gallery', TRUE));
        } else {
            $data = array(
                'name_gallery' => $this->input->post('name_gallery',TRUE),
                'description_gallery' => $this->input->post('description_gallery',TRUE),
                'path_gallery' => $this->input->post('path_gallery',TRUE),
            );
            
            $this->Gallery_model->update_gallery($this->input->post('id_gallery', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/gallery'));
        }
    }
    
    public function gallery_delete($id)
    {
        $row = $this->Gallery_model->get_by_id_gallery($id);
        
        if ($row) {
            $this->Gallery_model->delete_gallery($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/gallery'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/gallery'));
        }
    }
    
    public function gallery_rules()
    {
        $this->form_validation->set_rules('name_gallery', 'name gallery', 'trim|required');
        $this->form_validation->set_rules('description_gallery', 'description gallery', 'trim|required');
        $this->form_validation->set_rules('path_gallery', 'path gallery', 'trim|required');
        
        $this->form_validation->set_rules('id_gallery', 'id_gallery', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
    
    public function management()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'administrator/management/?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'administrator/management/?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'administrator/management/';
            $config['first_url'] = base_url() . 'administrator/management/';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Management_model->total_rows_management($q);
        $management = $this->Management_model->get_limit_data_management($config['per_page'], $start, $q);
        
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        
        $data = array(
            'management_data' => $management,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'page' => 'management',
            'title' => 'List Management'
        );
        $this->template->load('administrator/template', 'administrator/view_management_list', $data);
    }
    
    public function management_create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/management_create_action'),
            'id_management' => set_value('id_management'),
            'name_management' => set_value('name_management'),
            'description_management' => set_value('description_management'),
            'photo_management' => set_value('photo_management'),
            'page' => 'management',
            'title' => 'Create Management'
        );
        $this->template->load('administrator/template', 'administrator/view_management_form', $data);
    }
    
    public function management_create_action()
    {
        $this->management_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this-> management_create();
        } else {
            $data = array(
                'name_management' => $this->input->post('name_management',TRUE),
                'description_management' => $this->input->post('description_management',TRUE),
                'photo_management' => $this->input->post('photo_management',TRUE),
            );
            
            $this->Management_model->insert_management($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/management'));
        }
    }
    
    public function management_update($id)
    {
        $row = $this->Management_model->get_by_id_management($id);
        
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/management_update_action'),
                'id_management' => set_value('id_management', $row->id_management),
                'name_management' => set_value('name_management', $row->name_management),
                'description_management' => set_value('description_management', $row->description_management),
                'photo_management' => set_value('photo_management', $row->photo_management),
                'page' => 'management',
                'title' => 'Edit Management'
            );
            $this->template->load('administrator/template', 'administrator/view_management_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/management'));
        }
    }
    
    public function management_update_action()
    {
        $this->management_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->management_update($this->input->post('id_management', TRUE));
        } else {
            $data = array(
                'name_management' => $this->input->post('name_management',TRUE),
                'description_management' => $this->input->post('description_management',TRUE),
                'photo_management' => $this->input->post('photo_management',TRUE),
            );
            
            $this->Management_model->update_management($this->input->post('id_management', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('administrator/management'));
        }
    }
    
    public function management_delete($id)
    {
        $row = $this->Management_model->get_by_id_management($id);
        
        if ($row) {
            $this->Management_model->delete_management($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('administrator/management'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/management'));
        }
    }
    
    public function management_rules()
    {
        $this->form_validation->set_rules('name_management', 'name management', 'trim|required');
        $this->form_validation->set_rules('description_management', 'description management', 'trim|required');
        $this->form_validation->set_rules('photo_management', 'photo management', 'trim|required');        
        $this->form_validation->set_rules('id_management', 'id_management', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
    

