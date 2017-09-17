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
    public function kandidat_bem(){
        $query =$this->db->get('kandidat_bem');
        if($query->num_rows()>=1){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function kandidat_senat(){
        $query =$this->db->get('kandidat_senat');
        if($query->num_rows()>=1){
            return $query->result_array();
        }else{
            return false;
        }
    }
}