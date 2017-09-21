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
    public function add_pemilih(){
        $data = array(
            'idpemilih'=>$this->input->post('nim'),
            'nama_pemilih'=>$this->input->post('nama'),
            'angkatan'=>$this->input->post('angkatan'),
            'password_pemilih'=>$this->input->post('password'),
            'status'=>'Belom'
        );
        $query = $this->db->insert('pemilih',$data);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function delete_pemilih($id){
        $where = array(
            'idpemilih'=>$id
        );
        $query = $this->db->delete('pemilih',$where);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    public function get_data_update($id){
        $where = array(
            'idpemilih'=>$id
        );
        $query = $this->db->get_where('pemilih',$where);
        if($query->num_rows()>=0){
            return $query->result_array();
        }else{
            return false;
        }
    }
    public function do_update_pemilih($id){
        $where = array(
            'idpemilih'=>$id
        );
        $data = array(
            'nama_pemilih'=>$this->input->post('nama'),
            'angkatan'=>$this->input->post('angkatan'),
            'password_pemilih'=>$this->input->post('password')
        );
        $query = $this->db->update('pemilih',$data,$where);
        if($query==true){
            return true;
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
    //hitung hasil vote dengan no urut 1
    public function hitung_bem_1(){
        $where =array(
            'BEM'=>1
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 2
    public function hitung_bem_2(){
        $where =array(
            'BEM'=>2
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 3
    public function hitung_bem_3(){
        $where =array(
            'BEM'=>3
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 4
    public function hitung_bem_4(){
        $where =array(
            'BEM'=>4
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 1 senar
    public function hitung_senat_1(){
        $where =array(
            'SENAT'=>1
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 2 senat
    public function hitung_senat_2(){
        $where =array(
            'SENAT'=>2
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 3 senat
    public function hitung_senat_3(){
        $where =array(
            'SENAT'=>3
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    //hitung hasil vote dengan no urut 4 senat
    public function hitung_senat_4(){
        $where =array(
            'SENAT'=>4
        );
        $this->db->where($where);
        $this->db->from('hasil_vote');
        $query = $this->db->count_all_results();

         if($query>=0){
             return $query;
          }else{
              return false;
          }
    }
    
    
    
}