<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_req_borrow extends CI_Model {

    public $lent_date;
    public $lent_bor_id; 
    public $lent_pat_id; 
    public $lent_date_return;
    public $lent_sum_pledge;
    public $lent_sum;
    public $lent_sum_price;
    public $lent_pay_status_id;
    public $detail_rent_id;
    public $detail_eq_id;
    public $eq_id;
        
    function insert(){
        $sql = "INSERT INTO req_lent( lent_date_return, lent_sum_pledge, lent_sum, lent_sum_price, lent_pay_status_id, lent_date) 
				VALUES(?,?,?,?,?,NOW())";
        $this->db->query($sql, array($this->lent_date_return,$this->lent_sum_pledge,$this->lent_sum,$this->lent_sum_price,$this->lent_pay_status_id));
    }    
    function insert_detail(){
        $sql = "INSERT INTO req_lent_detail(detail_eq_id, detail_rent_id) 
				VALUES(?,?)";
        $this->db->query($sql, array($this->detail_eq_id,$this->detail_rent_id));
    }    
    
    function update(){
       $sql = "UPDATE req_equipment SET eq_code = ?, eq_name = ?, eq_unit = ?, eq_price = ?, eq_pledge = ?
               WHERE eq_id = ? ";
        $this->db->query($sql, array($this->eq_code,$this->eq_name,$this->eq_unit,$this->eq_price,$this->eq_pledge,$this->eq_id));
    }    
    
    function delete(){
        $sql = "DELETE FROM req_equipment WHERE eq_id = ?";
        $this->db->query($sql, array($this->eq_id));
    }
    
    function get_eq_by_id($eq_id){
        $sql = "SELECT eq_id, eq_code, eq_name, eq_unit, eq_price, eq_pledge, status_name
                FROM req_equipment
                LEFT JOIN req_equipment_status ON eq_status_id = status_id
                WHERE eq_id = '$eq_id'";
        $query = $this->db->query($sql);
        return $query;
    }
    
    function get_all_eq_bor(){
        $sql = "SELECT eq_id, CONCAT(eq_code, ' ', eq_name) AS name, type_code ,eq_unit, eq_price, eq_pledge, status_name
                FROM req_equipment
                LEFT JOIN req_equipment_status ON eq_status_id = status_id
                LEFT JOIN req_equipment_type ON eq_type_id = type_id
                WHERE eq_status_id = 1";
        $query = $this->db->query($sql);
        return  $query;
    }
    
    function get_index(){
        $sql = "SELECT lent_id
                FROM req_lent 
                ORDER BY lent_id DESC 
                LIMIT 1";
        $query = $this->db->query($sql);
        return  $query;
    }
    
    function edit_status_eq($eq_id){
        $sql = "UPDATE req_equipment SET eq_status_id = 4
               WHERE eq_id = '$eq_id' ";
        $query = $this->db->query($sql);
        return  $query;
    }
}
?>
