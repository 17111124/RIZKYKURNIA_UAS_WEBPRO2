<?php  
class Mahasiswa extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model("Modellogin");	

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}	
	}

	public function index(){
		$data ['title'] = "Halaman Mahasiswa";				
		$this->load->view('user/view_header_user',$data);		
		$this->load->view('user/view_home_user');
		$this->load->view('user/view_footer_user');
	}
}


?>