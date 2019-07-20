<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requisition extends MY_Controller  {

    public function index(){
		$this->load->view('req/v_login');
	}
    
    function login(){
        $this->load->model('req/M_req_user', 'mln');
        $mln = $this->mln;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->mln->get_user($username,$password)->result();
//        echo $data[0]->use_name;
//        echo $data[0]->use_password;
//        echo $data[0]->position_name;
//        echo $data[0]->position_id;
//        echo $data[0]->use_fullname;
//        print_r($data);
        
        if(!empty($data)){
            $user = array(
                'use_fullname' => $data[0]->use_fullname,
                'use_level'    => $data[0]->position_id,
                'use_name'     => $data[0]->use_name,
                'position_name_th' => $data[0]->position_name_th
            );
            $this->session->set_userdata($user);
            $use_level = $_SESSION['use_level'];
            redirect('req/home');
        }else{
            $this->session->unset_userdata(array('use_fullname','use_level','use_name','position_name_th'));
            redirect();
        }
    }
    
    function logout(){
        $this->session->unset_userdata(array('use_fullname','use_level','use_name','position_name_th'));
        redirect();
    }
}
?>