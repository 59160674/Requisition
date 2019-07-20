<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends MY_Controller  {

    public function index(){
        $this->load->model('req/M_req_payment','mpm');
        $mpm = $this->mpm;
        $data['da_pm'] = $this->mpm->get_all_pm()->result();
        $this->output('req/v_payment',$data);
    }
    
    function payment_status(){
        $this->load->model('req/M_req_payment','mpm');
        $mpm = $this->mpm;
        $lent_id = $this->input->post('lent_id');
        
        $mpm->lent_id = $lent_id;
        $mpm->update();
    }
    
    function print_bill($lent_id){
        $this->load->model('req/M_req_payment','mpm');
        $mpm = $this->mpm;
        $data['da_pm_id'] = $this->mpm->get_pm_by_id($lent_id)->result();
        $data['da_table'] = $this->mpm->get_pm_eq_by_id($lent_id)->result();
        $this->load->view('req/v_print',$data);
    }
}
?>
