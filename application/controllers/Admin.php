<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	//construct fungsinya mirip autoload
	function __construct(){
		parent::__construct();{   
		}
		$this->load->model('Admin_model'); 
	}
	//end construct
	public function index()
	{
		$this->load->view('admin/layout');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}
	public function daftar_pemilih(){
		$data['pemilih'] = $this->Admin_model->daftar_pemilih(); 
		$this->load->view('admin/daftar_pemilih',$data);
	}
	public function daftar_kandidat_bem(){
		$data['kandidat'] = $this->Admin_model->kandidat_bem(); 
		$this->load->view('admin/daftar-kandidat-bem',$data);
	}
	public function daftar_kandidat_senat(){
		$data['kandidat'] = $this->Admin_model->kandidat_senat(); 
		$this->load->view('admin/daftar-kandidat-senat',$data);
	}
	public function hitung_vote(){
		$data['no1']=$this->Admin_model->hitung_bem_1();
		$data['no2']=$this->Admin_model->hitung_bem_2();
		$data['no3']=$this->Admin_model->hitung_bem_3();
		$data['no4']=$this->Admin_model->hitung_bem_4();
		$data['nos1']=$this->Admin_model->hitung_senat_1();
		$data['nos2']=$this->Admin_model->hitung_senat_2();
		$data['nos3']=$this->Admin_model->hitung_senat_3();
		$data['nos4']=$this->Admin_model->hitung_senat_4();				
		$this->load->view('admin/hasil-vote',$data);
		// echo $data;
		// var_dump($data);
	}
}
