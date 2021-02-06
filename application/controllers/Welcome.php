<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
		$this->load->library('pagination');
		$this->load->model('Pos_list_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = site_url('Welcome/index/');  // set url
		$config['total_rows'] = $this->Pos_list_model->get_open_position_nrow(); // get amount of data
		$config['per_page'] = 5 ; // row number per page
		$config['uri_segment'] = 3; // uri index
		$config['num_link'] = round($config['total_rows']/$config['per_page']); // number of page (link)
		
		// bootstrap page_number
		$config['num_tag_open'] = '
		<li class="paginate_button page-item ">';
		$config['num_tag_close'] = '</li>' ;

		// bootstrap current page
		$config['cur_tag_open'] = '
		<li class="paginate_button page-item active" >
		<a aria-controls="DataTables_Table_0" tabindex="0" class="page-link" >' ;
		$config['cur_tag_close'] = '</a></li>' ;

		// bootstrap next button
		$config['next_tag_open'] ='
		<li class="paginate_button page-item next" id="DataTables_Table_0_next">' ;
		$config['next_tag_close'] = '</li>'  ;

		// bootstrap previous button
		$config['prev_tag_open'] = '
		<li class="paginate_button page-item previous" id="DataTables_Table_0_previous">' ;
		$config['prev_tag_close'] = '</li>'  ;

		// bootstrap go to first page button
		$config['first_tag_open'] = ' <li class="paginate_button page-item next" id="DataTables_Table_0_next">' ;
		$config['next_tag_close'] = '</li>'  ;

		// bootstrap go to first page button
		$config['last_tag_open'] = ' <li class="paginate_button page-item next" id="DataTables_Table_0_next">' ;
		$config['last_tag_close'] = '</li>'  ;

		// bootstrap Next and Prev text
		$config['next_link'] = '>';
		$config['prev_link'] = '<';

		// $config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3,0)); #) ? $this->uri->segment(3) : 0 ;
		$results = $this->Pos_list_model->get_open_position_list_limit( $page,$config['per_page']);
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];

		// echo "<pre>";
		// var_dump($results);
		// echo "</pre>";

		$this->load->view('open_pos_list_view', array(
			"data" => $data,
			"result" => $results,
			"limit" => $config['per_page'],
			"start_index" => $page
		));
	}
}
