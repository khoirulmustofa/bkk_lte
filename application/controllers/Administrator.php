<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Jobs_model');
        $this->load->model('Company_model');
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
}
    

