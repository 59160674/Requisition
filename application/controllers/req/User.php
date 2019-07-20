<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller  {

    public function index(){
        $this->load->model('req/M_req_user', 'mus');
        $mus = $this->mus;
        $data['da_us'] = $this->mus->get_all_user()->result();
        $this->output('req/v_user',$data);
    }
    
    function get_user(){
       
        
    }
}
?>
