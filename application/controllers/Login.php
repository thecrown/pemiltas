<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $this->load->view($page.'/login');
	}

	public function user() {
		$this->load->view('user/login');
	}

	public function admin() {
		$this->load->view('admin/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */