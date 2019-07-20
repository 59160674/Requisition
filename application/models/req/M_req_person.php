<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_req_person extends CI_Model {

    public $bor_fullname;
    public $bor_age; 
    public $bor_idennumber; 
    public $bor_house_number;
    public $bor_village;
    public $bor_sub_district_id;
    public $bor_district_id;
    public $bor_province_id;
    public $bor_relation;
    public $bor_phone;
    public $pat_fullname;
    public $pat_age; 
    public $pat_idennumber;
    public $pat_house_number;
    public $pat_village;
    public $pat_sub_district_id;
    public $pat_district_id;
    public $pat_province_id;
    public $pat_sick;
    public $bor_lent_id;
    public $pat_lent_id;
        
    function insert_borrower(){
        $sql = "INSERT INTO req_borrower(bor_fullname, bor_age, bor_idennumber, bor_house_number, bor_village, bor_sub_district_id,               bor_district_id, bor_province_id, bor_relation, bor_phone, bor_lent_id) 
				VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->bor_fullname,$this->bor_age,$this->bor_idennumber,$this->bor_house_number,$this->bor_village,$this->bor_sub_district_id,$this->bor_district_id,$this->bor_province_id,$this->bor_relation,$this->bor_phone,$this->bor_lent_id));
    }    
    function insert_patient(){
        $sql = "INSERT INTO req_patient(pat_fullname, pat_age, pat_idennumber, pat_house_number, pat_village, pat_sub_district_id,               pat_district_id, pat_province_id, pat_sick, pat_lent_id) 
				VALUES(?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($this->pat_fullname,$this->pat_age,$this->pat_idennumber,$this->pat_house_number,$this->pat_village,$this->pat_sub_district_id,$this->pat_district_id,$this->pat_province_id,$this->pat_sick,$this->pat_lent_id));
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
    
    function get_all_provinces(){
        $sql = "SELECT id, name_th FROM provinces";
        $query = $this->db->query($sql);
        return  $query;
    }
    function get_all_amphures(){
        $sql = "SELECT id, name_th 
                FROM amphures
                WHERE province_id = 7";
        $query = $this->db->query($sql);
        return  $query;
    }
    function get_all_districts(){
        $sql = "SELECT id, name_th FROM districts";
        $query = $this->db->query($sql);
        return  $query;
    }
    
}
?>
