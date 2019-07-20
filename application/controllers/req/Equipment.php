<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipment extends MY_Controller  {

    public function index(){
        $this->load->model('req/M_req_equipment', 'meq');
        $meq = $this->meq;
        $data["da_eq"] = $this->meq->get_all_eq()->result();
        $data["da_op"] = $this->meq->get_type()->result();
        $this->output('req/v_equipment',$data);
    }
    
    function add_eq(){
        $this->load->model('req/M_req_equipment', 'meq');
        $meq = $this->meq;
        $eq_code = $this->input->post('eq_code');
        $eq_name = $this->input->post('eq_name');
        $eq_type = $this->input->post('eq_type');
        $eq_unit = $this->input->post('eq_unit');
        $eq_price = $this->input->post('eq_price');
        $eq_pledge = $this->input->post('eq_pledge');

//        echo $eq_unit_id;
        $meq->eq_code = $eq_code;
        $meq->eq_name = $eq_name;
        $meq->eq_type = $eq_type;
        $meq->eq_unit = $eq_unit;
        $meq->eq_price = $eq_price;
        $meq->eq_pledge = $eq_pledge;
        
        $data = $meq->get_all_eq()->result();
        foreach($data as $value){
            if($value->eq_code == $eq_code && $value->eq_type_id == $eq_type){
				echo "false";
				die;
            }
        }
        $meq->insert();
        
    }
    
    function eq_delete(){
        $this->load->model('req/M_req_equipment', 'meq');
        $meq = $this->meq;
        $eq_id = $this->input->post('eq_id');
        $meq->eq_id = $eq_id;
        $meq->delete();
    }
    
    function get_eq_by_id(){
        $this->load->model('req/M_req_equipment', 'meq');
        $meq = $this->meq;
        $eq_id = $this->input->post('eq_id');
        $data = $this->meq->get_eq_by_id($eq_id)->row_array();
        echo json_encode($data);
    }
    
    function eq_update(){
        $this->load->model('req/M_req_equipment', 'meq');
        $meq = $this->meq;
        $eq_id = $this->input->post('eq_id_edit');
        $eq_code = $this->input->post('eq_code_edit');
        $eq_name = $this->input->post('eq_name_edit');
        $eq_type_id = $this->input->post('eq_type_edit');
        $eq_unit = $this->input->post('eq_unit_edit');
        $eq_price = $this->input->post('eq_price_edit');
        $eq_pledge = $this->input->post('eq_pledge_edit');

        $meq->eq_code = $eq_code;
        $meq->eq_id = $eq_id;
        $meq->eq_name = $eq_name;
        $meq->eq_type_id = $eq_type_id;
        $meq->eq_unit = $eq_unit;
        $meq->eq_price = $eq_price;
        $meq->eq_pledge = $eq_pledge;
        
        $data = $meq->get_all_eq()->result();
        foreach($data as $value){
            if($value->eq_id == $eq_id){
				$da = '1';
                echo json_encode($da);
                // echo "1 = ".$value->eq_id." 2 = ".$eq_id."   ";
				die;
            }
        }
        $meq->update();
        
    }
}
?>
