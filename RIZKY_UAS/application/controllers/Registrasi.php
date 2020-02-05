<?php 

class Registrasi extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('ModelLogin');
		$this->load->model('ModelRegister');

	}

	public function index(){
		$data ['title'] = "Registrasi Mahasiswa";
		$this->load->view('login/view_header_login',$data);
		$this->load->view('login/view_regis_mahasiswa');
		$this->load->view('login/view_footer_login');
	}

	public function aksi_register(){
		$npm = $this->input->post('npm');
		$username = $this->input->post('npm');
		$password = $this->input->post('password');
		$where = array(
			'var_npm'=> $npm
		);	
		$cek = $this->ModelLogin->cek_login("tbl_mahasiswa",$where)->num_rows();

		if($cek > 0){
			$cekStatus = $this->ModelLogin->cek_login("tbl_mahasiswa",$where)->row_array();
			if ($cekStatus['int_status'] == "1") {
				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Npm anda sudah terdaftar silahkan login</div>');				
				redirect(base_url("Login/index"));
			}else{
				$data = array(
					'var_password' =>  $password, 
					'int_status' => '1'
				);
				$where = array('var_npm' => $npm );
				$this->ModelRegister->aksi_register_mhs($where, $data, "tbl_mahasiswa");

				$data1 = array(
					'var_username' => $username,
					'var_password' =>  $password 				
				);
				$where = array('var_npm' => $npm );
				$this->ModelRegister->aksi_register_mhs($where, $data, "tbl_mahasiswa");


				$this->session->set_flashdata('msg1', '<div class="alert alert-success" role="alert">Register berhasil silahkan login</div>');			
				redirect(base_url("Login/index"));
			}

		}else{
			$this->session->set_flashdata('msg2', '<div class="alert alert-success" role="alert">Belum terdaftar</div>');
			redirect(base_url("Registrasi/index"));
		}
	}
}