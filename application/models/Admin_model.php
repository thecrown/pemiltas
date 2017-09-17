<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
    public function daftar_pemilih(){
        $query = $this->db->get('pemilih');
        if($query->num_rows()>=1){
            return $query->result_array();
        }else{
            return false;
        }   
    }
}