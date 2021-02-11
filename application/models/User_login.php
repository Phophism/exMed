<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_login extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function loginUser($username, $password)
    {
        $this->db->select('user_password');
        $this->db->where('username',$username);
        $this->db->from('tb_user');
        $psw = $this->db->get()->result();
        foreach($psw as $data){
            $p = $data->user_password;
        }

        if(isset($p) && $password == $this->pass_decryption($p)){
            return "1";
        }else
            return "0"; 
    }

    private function pass_decryption($password)
    {
        return $this->encryption->decrypt($password);
    }

}
