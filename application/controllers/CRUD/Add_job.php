<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Add_job extends CI_Controller{

        public function __construct()
        {
            parent::__construct();


        }

        public function index(){


            $this->load->view('CRUD/_add_job',
            array(
                'title' => "Edit job detail"
            )
        );

        }

    } 

?>
