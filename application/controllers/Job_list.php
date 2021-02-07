<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_list extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
		$this->load->model('Job_list_model');
		$this->load->helper('form');
	}

	public function index()
	{
		$results = $this->Job_list_model->get_open_position_list();
		$this->load->view('_job_list', 
		array(
			"result" => $results,
			"title" => "รายการงานเปิดรับสมัคร"
		));
	}

}
