<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow_equipment extends MY_Controller  {
    
    public function index(){
        $this->load->model('req/M_req_borrow', 'mbr');
        $this->load->model('req/M_req_person', 'mps');
        $mbr = $this->mbr;
        $mps = $this->mps;
        $data["da_eq"] = $this->mbr->get_all_eq_bor()->result();
        $data["da_po"] = $this->mps->get_all_provinces()->result();
        $data["da_am"] = $this->mps->get_all_amphures()->result();
        $data["da_di"] = $this->mps->get_all_districts()->result();
        $this->output('req/v_borrow_equipment',$data);
    }
    
    function get_eq_by_id(){
        $this->load->model('req/M_req_borrow', 'meq');
        $meq = $this->meq;
        $eq_id = $this->input->post('eq_id');
        $data = $this->meq->get_eq_by_id($eq_id)->row_array();
        echo json_encode($data);
    }
    
    function add_bor(){
        
        $this->load->model('req/M_req_borrow', 'mbr');
        $mbr = $this->mbr;
        $last_index = $this->mbr->get_index()->result();
        echo json_encode($last_index);
        if($last_index == NULL){
            $index = 1;
            echo $index;
        }else{
            foreach($last_index as $in) {
                $index = $in->lent_id+1;
                echo $index;
            }
        }
            
        $this->load->model('req/M_req_person', 'mps');
        $mps = $this->mps;
        $bor_fullname = $this->input->post('bor_fullname');
        $bor_age = $this->input->post('bor_age');
        $bor_relation = $this->input->post('bor_relation');
        $bor_idennumber = $this->input->post('bor_idennumber');
        $bor_house_number = $this->input->post('bor_house_number');
        $bor_village = $this->input->post('bor_village');
        $bor_sub_district_id = $this->input->post('bor_sub_district_id');
        $bor_district_id = $this->input->post('bor_district_id');
        $bor_province_id = $this->input->post('bor_province_id');
        $bor_phone = $this->input->post('bor_phone');
        
        $mps->bor_fullname = $bor_fullname;
        $mps->bor_age = $bor_age;
        $mps->bor_relation = $bor_relation;
        $mps->bor_idennumber = $bor_idennumber;
        $mps->bor_house_number = $bor_house_number;
        $mps->bor_village = $bor_village;
        $mps->bor_sub_district_id = $bor_sub_district_id;
        $mps->bor_district_id = $bor_district_id;
        $mps->bor_province_id = $bor_province_id;
        $mps->bor_phone = $bor_phone;
        $mps->bor_lent_id = $index;
        $mps->insert_borrower();
        
        $pat_fullname = $this->input->post('pat_fullname');
        $pat_age = $this->input->post('pat_age');
        $pat_sick = $this->input->post('pat_sick');
        $pat_idennumber = $this->input->post('pat_idennumber');
        $pat_house_number = $this->input->post('pat_house_number');
        $pat_village = $this->input->post('pat_village');
        $pat_sub_district_id = $this->input->post('pat_sub_district_id');
        $pat_district_id = $this->input->post('pat_district_id');
        $pat_province_id = $this->input->post('pat_province_id');
        
        $mps->pat_fullname = $pat_fullname;
        $mps->pat_age = $pat_age;
        $mps->pat_sick = $pat_sick;
        $mps->pat_idennumber = $pat_idennumber;
        $mps->pat_house_number = $pat_house_number;
        $mps->pat_village = $pat_village;
        $mps->pat_sub_district_id = $pat_sub_district_id;
        $mps->pat_district_id = $pat_district_id;
        $mps->pat_province_id = $pat_province_id;
        $mps->pat_lent_id = $index;
        $mps->insert_patient();
        
        $lent_sum_pledge = 0;
        $lent_sum_price = 0;
        $lent_sum = 0;
        $eq_price = $this->input->post('eq_price');
        $eq_pledge = $this->input->post('eq_pledge');
		$eq_id = $this->input->post('eq_id');
        foreach($eq_id as $key => $value){
            $lent_sum_pledge += $eq_pledge[$key];
            $lent_sum_price += $eq_price[$key];

		}
        $lent_sum = $lent_sum_price + $lent_sum_pledge;
        $mbr->lent_sum_price = $lent_sum_price;
        $mbr->lent_sum_pledge = $lent_sum_pledge;
        $mbr->lent_sum = $lent_sum;
        $mbr->lent_pay_status_id = 2;
        $mbr->insert();
        
		foreach($eq_id as $key => $value){
            $mbr->detail_eq_id = $value;
            $mbr->detail_rent_id = $index;
            $mbr->insert_detail();
            $mbr->edit_status_eq($value);
		} 
        redirect('req/Payment');
	}
}
?>
