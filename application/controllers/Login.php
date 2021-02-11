<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('encryption');
        $this->load->model('User_login');
    }


    public function index()
    {
        if ($this->uri->segment(3) != null) {
            $loginStatus = $this->uri->segment(3);
        } else {
            $loginStatus = "1";
        }

        $this->load->view(
            'admin/login',
            array(
                'title' => 'Login',
                'status' => $loginStatus
            )
        );
    }

    public function u_login()
    {

        // // for check login session
        //print_r($this->session->userdata); 

        $loginStatus = "1";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if ($this->User_login->loginUser($user, $pass) == "1") {
                $user_data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => TRUE 
                );
                $this->session->set_userdata($user_data);  
                redirect(base_url());
            } else {
                $loginStatus = "0";
                redirect(base_url() . 'login/index/0');
            }
        }
    }

    public function u_logout()
    {
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        
        redirect(base_url() . 'login');
    }
}
