<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_req_payment extends CI_Model {

    public $lent_date;
    public $lent_bor_id; 
    public $lent_pat_id; 
    public $lent_date_return;
    public $lent_sum_pledge;
    public $lent_sum;
    public $lent_sum_price;
    public $lent_pay_status_id;
    public $lent_id;

    function get_all_pm(){
        $sql = "SELECT * 
                FROM req_lent 
                LEFT JOIN req_borrower ON bor_lent_id = lent_id
                LEFT JOIN req_patient ON pat_lent_id = lent_id
                LEFT JOIN req_pay_status ON pay_id = lent_pay_status_id
                ORDER BY lent_id DESC";
        $query = $this->db->query($sql);
        return  $query;
    }
    
    function update(){
       $sql = "UPDATE req_lent SET lent_pay_status_id = 1
               WHERE lent_id = ? ";
        $this->db->query($sql, array($this->lent_id));
    } 
    
    function get_pm_by_id($lent_id){
        $sql = "SELECT * 
                FROM req_lent 
                LEFT JOIN req_borrower ON bor_lent_id = lent_id
                LEFT JOIN req_patient ON pat_lent_id = lent_id
                LEFT JOIN req_pay_status ON pay_id = lent_pay_status_id
                WHERE lent_id = $lent_id";
        $query = $this->db->query($sql);
        return  $query;
    }
    function get_pm_eq_by_id($lent_id){
        $sql = "SELECT * 
                FROM req_lent_detail
                LEFT JOIN req_equipment ON eq_id = detail_eq_id
                LEFT JOIN req_equipment_type ON eq_type_id = type_id
                WHERE detail_rent_id = $lent_id";
        $query = $this->db->query($sql);
        return  $query;
    }
}
?>
