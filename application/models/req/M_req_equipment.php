<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_req_equipment extends CI_Model {

    public $unit_id;
    public $unit_name; 
    public $eq_id; 
    public $eq_code;
    public $eq_name;
    public $eq_type;
    public $eq_type_id;
    public $eq_unit;
    public $eq_price;
    public $eq_pledge;
        
    function insert(){
        $sql = "INSERT INTO req_equipment(eq_code, eq_name, eq_type_id, eq_unit, eq_price, eq_pledge) 
				VALUES(?,?,?,?,?,?)";
        $this->db->query($sql, array($this->eq_code,$this->eq_name,$this->eq_type,$this->eq_unit,$this->eq_price,$this->eq_pledge));
    }    
    
    function update(){
       $sql = "UPDATE req_equipment SET eq_code = ?, eq_name = ?, eq_type_id = ?, eq_unit = ?, eq_price = ?, eq_pledge = ?
               WHERE eq_id = ? ";
        $this->db->query($sql, array($this->eq_code,$this->eq_name,$this->eq_type_id,$this->eq_unit,$this->eq_price,$this->eq_pledge,$this->eq_id));
    }    
    
    function delete(){
        $sql = "DELETE FROM req_equipment WHERE eq_id = ?";
        $this->db->query($sql, array($this->eq_id));
    }
    
//    function get_unit(){
//        $sql = "SELECT * FROM req_equipment_unit";
//        $query = $this->db->query($sql);
//        return  $query;
//    } 

   function get_type(){
       $sql = "SELECT * FROM req_equipment_type";
       $query = $this->db->query($sql);
       return  $query;
   }    
    
    function get_all_eq(){
        $sql = "SELECT eq_id, type_code , eq_code , eq_name, type_name AS eq_type, eq_type_id, eq_unit, eq_price, eq_pledge, status_name
                FROM req_equipment
                LEFT JOIN req_equipment_type on eq_type_id = type_id
                LEFT JOIN req_equipment_status ON eq_status_id = status_id";
        $query = $this->db->query($sql);
        return  $query;
    }
    
    function get_eq_by_id($eq_id){
        $sql = "SELECT eq_id, eq_code , eq_name,type_name AS eq_type, eq_type_id, eq_unit, eq_price, eq_pledge, status_name
                FROM req_equipment
                LEFT JOIN req_equipment_type on eq_type_id = type_id
                LEFT JOIN req_equipment_status ON eq_status_id = status_id
                WHERE eq_id = '$eq_id'";
        $query = $this->db->query($sql);
        return $query;
    }
    function get_all_eq_bor(){
        $sql = "SELECT eq_id, CONCAT(eq_code, ' ', eq_name) AS name,type_name AS eq_type , eq_type_id , eq_unit, eq_price, eq_pledge, status_name
                FROM req_equipment
                LEFT JOIN req_equipment_status ON eq_status_id = status_id
                LEFT JOIN req_equipment_type on eq_type_id = type_id
                WHERE eq_status_id = 1";
        $query = $this->db->query($sql);
        return  $query;
    }
}
?>
