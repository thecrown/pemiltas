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
	public function add_pemilih(){
		$data['error'] = validation_errors();
		$this->load->view('admin/add-pemilih',$data);
	}
	public function valid_pemilih(){
		$this->form_validation->set_rules('nim','NIM','xss_clean|trim|required|numeric|max_length[15]');
		$this->form_validation->set_rules('nama','Nama','xss_clean|trim|required');
		$this->form_validation->set_rules('angkatan','Angkatan','xss_clean|trim|required');
		$this->form_validation->set_rules('password','Password','xss_clean|trim|required');
		$this->form_validation->set_rules('password2','Password','xss_clean|trim|required|matches[password]');
		if($this->form_validation->run()==false){
			$this->add_pemilih();
		}else{
			$query = $this->Admin_model->add_pemilih();
			if($query==true){
				$this->daftar_pemilih();
			}else{
				$data['error'] = "Database May Error";
				$this->load->view('admin/add-pemilih',$data);
			}
		}
	}
	public function delete_pemilih($id=null){
		$query = $this->Admin_model->delete_pemilih($id);
		if($query==false){
			$this->daftar_pemilih();
		}else{
			$data['error'] = "System Delete May Error";
			$data['pemilih'] = $this->Admin_model->daftar_pemilih(); 
			$this->load->view('admin/daftar_pemilih',$data);
			
		}
	}
	public function update_pemilih($id=null){
		$data['pemilih'] = $this->Admin_model->get_data_update($id);
		$this->load->view('admin/update-pemilih',$data);
	}
	public function valid_update($id=null){
		
		$this->form_validation->set_rules('nama','Nama','xss_clean|trim|required');
		$this->form_validation->set_rules('angkatan','Angkatan','xss_clean|trim|required');
		$this->form_validation->set_rules('password','Password','xss_clean|trim|required');
		$this->form_validation->set_rules('password2','Password','xss_clean|trim|required|matches[password]');
		if($this->form_validation->run()==false){
			$data['error'] = validation_errors();
			$data['pemilih'] = $this->Admin_model->get_data_update($id);
			$this->load->view('admin/update-pemilih',$data);
		}else{
			$query = $this->Admin_model->do_update_pemilih($id);
			if($query==true){
				$this->daftar_pemilih();
			}else{
				$data['error'] = "Database May Error";
				$data['pemilih'] = $this->Admin_model->get_data_update($id);
				$this->load->view('admin/update-pemilih',$data);
			}
		}
	}
	// fungsi untuk Kandidat BEM
	public function daftar_kandidat_bem(){
		$data['kandidat'] = $this->Admin_model->kandidat_bem(); 
		$this->load->view('admin/daftar-kandidat-bem',$data);
	}
	
	public function add_kandidat_bem(){
		$data['error'] = validation_errors();
		$this->load->view('admin/add-kandidat-ketua',$data);
	}
	public function valid_ketua_bem(){
		$this->form_validation->set_rules('no_urut','No urut','xss_clean|trim|required|numeric');
		$this->form_validation->set_rules('nama_ketua','Nama Ketua','xss_clean|trim|required');
		$this->form_validation->set_rules('angkatan','Angkatan','xss_clean|trim|required');

		$no_urut = $this->input->post('no_urut');
		$nama_ketua = $this->input->post('nama_ketua');
		$angkatan = $this->input->post('angkatan');
		
			$config['upload_path'] 		= './assets/img/bem/';
			$config['allowed_types'] 	= 'jpg|jpeg|pdf|png|PNG';
			$config['max_size'] 		= 200048;
			$config['overwrite']		= TRUE;

			$config['file_name'] = url_title("kabem".$no_urut);
			$this->upload->initialize($config);

			if($this->upload->do_upload('foto_ketua')){
				$upload_data = $this->upload->data(); 
				$file_name = $upload_data['file_name'];
				
				$config2['image_library'] = 'gd2';
				$config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
				$config2['maintain_ratio'] = TRUE;
				$config2['width'] = 200;
				$config2['height'] = 350;
				
				$this->load->library('image_lib',$config2);
				$this->image_lib->clear();
				$this->image_lib->initialize($config2);
				$this->image_lib->resize();

			}else{
				echo "gagal upload foto & data";
			}
			
			if($this->form_validation->run()==false){
				$data['error'] = validation_errors();
				$this->load->view('admin/add-kandidat-ketua',$data);
				
			}else{
					$data=array(
					'no_urut'=>$no_urut,
					'nama_ketua'=>$nama_ketua,
					'angkatan'=>$angkatan,
					'foto_ketua'=>$file_name
					);
					$datas = $this->Admin_model->insert_ketua_bem($data);
					if($datas){
						redirect('kandidat-bem');
					}else{
						$data['error'] = "data gagal diupload";
						$this->load->view('admin/add-kandidat-ketua',$data);
					}
			}
		

		if($this->form_validation->run()==false){
			$data['error'] = validation_errors();
			$data['pemilih'] = $this->Admin_model->get_data_update($id);
			$this->load->view('admin/update-pemilih',$data);
		}else{
			$query = $this->Admin_model->do_update_pemilih($id);
			if($query==true){
				$this->daftar_pemilih();
			}else{
				$data['error'] = "Database May Error";
				$data['pemilih'] = $this->Admin_model->get_data_update($id);
				$this->load->view('admin/update-pemilih',$data);
			}
		}
	}
	public function delete_pasangan(){
		
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
