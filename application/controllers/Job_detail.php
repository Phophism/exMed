<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Job_detail extends CI_Controller{

    public function __construct(){
        parent::__construct();

		date_default_timezone_set("Asia/Bangkok");
        $this->load->model('Job_list_model');
        $this->load->helper('url');

    }

    public function index(){
 
        //$get_id = $this->input->post('id');

        $job_detail=$this->uri->segment(3); 
        $data = $this->Job_list_model->get_job_detail($job_detail);
   
        // echo "<pre>" ;
        // var_dump($data);
        // echo "</pre>";

        $this->load->view('_job_detail', 
        array(
            'data' => $data,
            'title' => $data['pos_num']." - ".$data['position_name']
        )  );

    }

    public function counter(){
        $job_id=$this->uri->segment(3); 
        $this->Job_list_model->update_view_count($job_id);
        redirect('Job_detail/index/'.$job_id);
    }

}

?>