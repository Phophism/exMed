<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Job_detail extends CI_Controller{

    public function __construct(){
        parent::__construct();

		date_default_timezone_set("Asia/Bangkok");
        $this->load->model('Job_list_model');

    }

    public function index(){

        $data = $this->Job_list_model->get_job_detail(01);
   
         
        // echo "<pre>" ;
        // var_dump($data);
        // echo "</pre>";

        $this->load->view('_job_detail', 
        array(
            'data' => $data,
            'title' => $data['pos_num']." - ".$data['position_name']
        )  );

    }

}

?>