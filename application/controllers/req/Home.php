<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller  {

    public function index(){
        $this->output('req/v_home');
    }
    
    function dashboard(){
        $this->output('req/v_dashboard');
    }
    
    
}
?>