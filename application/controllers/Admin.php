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
		$data['pemilih'] = $this->Admin_model->daftar_pemilih(); 
		$this->load->view('admin/daftar-kandidat-bem');
	}
	public function daftar_kandidat_senat(){
		$data['pemilih'] = $this->Admin_model->daftar_pemilih(); 
		$this->load->view('admin/daftar-kandidat-senat');
	}
}
