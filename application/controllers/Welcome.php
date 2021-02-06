<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
		$this->load->model('Pos_list_model');
	}

	public function index()
	{
		$results = $this->Pos_list_model->get_open_position_list();
		$this->load->view('open_pos_list_view', array("result" => $results));
	}

}
