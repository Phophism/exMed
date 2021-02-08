<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('job_list_model');
    }

    public function index()
    {

        $job_type = $this->job_list_model->get_job_type();
        $job_position = $this->job_list_model->get_job_position();
        $ward_list = $this->job_list_model->get_ward(); 
        // echo "<pre>";
        // var_dump($job_type);
        // echo "</pre>";

        $this->load->view(
            'CRUD/_add_job',
            array(
                'job_type' => $job_type,
                'job_position' => $job_position,
                'ward' => $ward_list ,
                'title' => "Edit job detail"
            )
        );
    }
}
