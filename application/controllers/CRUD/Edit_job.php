<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Edit_job extends CI_Controller{

    public function __construct(){
        parent::__construct();

		date_default_timezone_set("Asia/Bangkok");
        $this->load->model('job_list_model');
        $this->load->helper('url');

    }

    public function index(){
 
        //$get_id = $this->input->post('id');

        $job_detail=$this->uri->segment(4); 
        $data = $this->job_list_model->get_job_detail($job_detail);
        $job_type = $this->job_list_model->get_job_type();
        $job_position = $this->job_list_model->get_job_position();
        $ward_list = $this->job_list_model->get_ward();
        
                
        echo "<pre>" ;
        var_dump($data);
        echo "</pre>";

        $this->load->view('CRUD/_edit_job', 
        array(
            'data' => $data,
            'job_type' => $job_type,
            'job_position' => $job_position,
            'ward' => $ward_list,
            'title' => $data['pos_num']." - Edit"
        )  );

    }

}

?>