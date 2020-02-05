<?php 

class Login extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model("Modellogin");		
	}

	public function index(){
		$data ['title'] = "Login Mahasiswa";
		$this->load->view('login/view_header_login',$data);	
		$this->load->view('login/view_login_mhs');
		$this->load->view('login/view_footer_login');
	}

	public function login_admin(){
		$data ['title'] = "Login Admin";		
		$this->load->view('login/view_header_login',$data);	
		$this->load->view('login/view_login_admin');
		$this->load->view('login/view_footer_login');	

	}

	function aksi_login_admin(){

		$this->form_validation->set_rules('username','Username','required|trim',[
			'required' => 'Username tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('password','Password','required|trim',[
			'required' => 'Password tidak boleh kosong!'
		]);	
		
		if($this->form_validation->run() != false){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'var_username' => $username,
				'var_password' => $password
			);
			$cek = $this->Modellogin->cek_login("tbl_status_login",$where)->num_rows();
			if($cek > 0){

				$data_session = array(			
					'status' => "login"
				);

				$this->session->set_userdata($data_session);

				redirect(base_url("Myadmin"));

			}else{
				echo "Username dan password salah !";
			}
		}
		else{
			$this->login_admin();
		}
	}

	function aksi_login_mhs(){
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$where = array(
			'var_npm' => $npm,
			'var_password' => $password
		);
		$cek = $this->Modellogin->cek_login("tbl_mahasiswa",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("Mahasiswa"));

		}else{
			$this->index();
		}
	}
}