<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_req_user extends CI_Model {
        
    public $use_name;
    public $use_password;
    public $username;
    public $password;
    
    function get_user($username,$password){
        $sql = "SELECT * 
                FROM req_user
                LEFT JOIN req_position ON position_id = use_position_id
                WHERE use_name = '$username' AND use_password = '$password' ";
        $query = $this->db->query($sql);
        return $query;
    }
    
    function get_all_user(){
        $sql = "SELECT * 
                FROM req_user
                LEFT JOIN req_position ON position_id = use_position_id";
        $query = $this->db->query($sql);
        return $query;
    }
}
?>
