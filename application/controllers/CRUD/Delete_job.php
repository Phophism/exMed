<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('job_list_model');
        $this->load->helper('url');
        if (!$this->session->userdata('is_logged_in')) {
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {

        $job_id = $this->uri->segment(4);

        $this->job_list_model->delete_job($job_id);

        redirect('job_list');
    }
}
