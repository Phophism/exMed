<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		date_default_timezone_set("Asia/Bangkok");

		$this->load->library('pagination');
		$this->load->model('Pos_list_model');

		$config['base_url'] = site_url('Welcome/index');  // set url
		$config['total_rows'] = $this->Pos_list_model->get_open_position_nrow(); // get amount of data
		$config['per_page'] = 5 ; // row number per page
		$config['uri_segment'] = 3; // uri index
		$config['num_link'] = round($config['total_rows']/$config['per_page']); // number of page (link)

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) :0 ;
		$data['results'] = $this->Pos_list_model->get_open_position_list_limit($config['per_page'] ,$page);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];

		echo "<pre>";
		
		echo "</pre>";

		$this->load->view('open_pos_list_view',$data);
	}
}
