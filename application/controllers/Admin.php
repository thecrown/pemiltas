<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	//construct fungsinya mirip autoload
	function __construct(){
		parent::__construct();{   
		}
		$this->load->model('Admin_model');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

        $this->load->model('Auth');

        if ( ($this->session->userdata('uname') || $this->session->userdata('pass')) == NULL) {
        	$array = array(
	        	'uname' 	=> $this->input->post('uname'),
	        	'pass' 		=> $this->input->post('pass') 
	        );
	        
	        $this->session->set_userdata( $array );
        }

        $uname 	= $this->session->userdata('uname');
	    $pass	= $this->session->userdata('pass');

	    // die($nim);
        $this->Auth->adminAuth($uname, $pass);

        if($this->Auth->isAdmin() == FALSE){
        	redirect('dashboard/login');
        }
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
			$data['error']="Data already Deleted";
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
	public function hapus_kandidat_bem($id=null){
		$query = $this->Admin_model->hapus_kandidat_bem($id);
		if($query==false){
			$this->daftar_kandidat_bem();
		}else{
			$data['error']="Data already Deleted";
			$data['kandidat'] = $this->Admin_model->kandidat_bem(); 
			$this->load->view('admin/daftar-kandidat-bem',$data);
		}
	}
	//fungsi untuk kandidat ketua BEM
	public function add_kandidat_bem_ketua(){
		$data['error'] = validation_errors();
		$this->load->view('admin/add-kandidat-ketua-bem',$data);
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
				$this->load->view('admin/add-kandidat-ketua-bem',$data);
				
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
						$data['error'] = "Data Failure Upload";
						$this->load->view('admin/add-kandidat-ketua-bem',$data);
					}
			}
		}
		

	//fungsi untuk kandidat wakil BEM	
	public function add_kandidat_bem_wakil(){
		$data['error'] = validation_errors();
		$this->load->view('admin/add-kandidat-wakil-bem',$data);
	}
	public function valid_wakil_bem(){
		$this->form_validation->set_rules('no_urut','No urut','xss_clean|trim|required|numeric');
		$this->form_validation->set_rules('nama_wakil','Nama Ketua','xss_clean|trim|required');
		
		$no_urut = $this->input->post('no_urut');
		$nama_ketua = $this->input->post('nama_wakil');
		
			$config['upload_path'] 		= './assets/img/bem/';
			$config['allowed_types'] 	= 'jpg|jpeg|pdf|png|PNG';
			$config['max_size'] 		= 200048;
			$config['overwrite']		= TRUE;

			$config['file_name'] = url_title("wakabem".$no_urut);
			$this->upload->initialize($config);

			if($this->upload->do_upload('foto_wakil')){
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
				$this->load->view('admin/add-kandidat-wakil-bem',$data);
				
			}else{
					$data=array(
					'nama_wakil'=>$nama_ketua,
					'foto_wakil'=>$file_name
					);
					$datas = $this->Admin_model->insert_wakil_bem($data,$no_urut);
					if($datas){
						redirect('kandidat-bem');
					}else{
						$data['error'] = "Data Failure Upload";
						$this->load->view('admin/add-kandidat-ketua',$data);
					}
			}
	}
	//fungsi untuk edit ketua BEM
	public function update_ketua_bem($id=null){
		$data['ketua'] = $this->Admin_model->get_update_ketua_bem($id); 
		$this->load->view('admin/update-ketua-bem',$data);
	}
	public function valid_update_ketua_bem($id){
		
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
				$data['ketua'] = $this->Admin_model->get_update_ketua_bem($id); 
				$this->load->view('admin/update-ketua-bem',$data);
				
			}else{
					$data=array(
					'no_urut'=>$no_urut,
					'nama_ketua'=>$nama_ketua,
					'angkatan'=>$angkatan,
					'foto_ketua'=>$file_name
					);
					$datas = $this->Admin_model->update_ketua_bem($data,$id);
					if($datas){
						redirect('kandidat-bem');
					}else{
						$data['error'] = "Data Failure Upload";
						$data['ketua'] = $this->Admin_model->get_update_ketua_bem($id); 
						$this->load->view('admin/update-ketua-bem',$data);
					}
			}
		
	}
	public function update_wakil_bem($id=null){
		$data['wakil'] = $this->Admin_model->get_update_wakil_bem($id); 
		$this->load->view('admin/update-wakil-bem',$data);
	}
	public function valid_update_wakil_bem($id){
		
		
		$this->form_validation->set_rules('no_urut','No urut','xss_clean|trim|required|numeric');
		$this->form_validation->set_rules('nama_wakil','Nama Ketua','xss_clean|trim|required');

		$no_urut = $this->input->post('no_urut');
		$nama_ketua = $this->input->post('nama_wakil');
		
		
			$config['upload_path'] 		= './assets/img/bem/';
			$config['allowed_types'] 	= 'jpg|jpeg|png|PNG';
			$config['max_size'] 		= 200048;
			$config['overwrite']		= TRUE;

			$config['file_name'] = url_title("wakabem".$no_urut);
			$this->upload->initialize($config);

			if($this->upload->do_upload('foto_wakil')){
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
				$data['wakil'] = $this->Admin_model->get_update_wakil_bem($id); 
				$this->load->view('admin/update-wakil-bem',$data);
				
			}else{
					$data=array(
					'nama_wakil'=>$nama_ketua,
					'foto_wakil'=>$file_name
					);
					$datas = $this->Admin_model->update_wakil_bem($data,$id);
					if($datas){
						redirect('kandidat-bem');
					}else{
						$data['error'] = "Data Failure Upload";
						$data['wakil'] = $this->Admin_model->get_update_wakil_bem($id); 
						$this->load->view('admin/update-wakil-bem',$data);
					}
			}
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
