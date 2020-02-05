<?php 

class Myadmin extends CI_Controller {

	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model("Modeladmin");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}	

	public function index(){
		$data ['title'] = "Halaman Admin";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();
		$this->load->view('admin/view_header_admin',$data);
		$this->load->view('admin/view_sidebar');
		$this->load->view('admin/view_dashboard',$data);
		$this->load->view('admin/view_footer_admin');
	}

	public function tambahdata(){	
		$data ['title'] = "Tambah Data Mahasiswa | Sekolah Tinggi Teknologi Bandung";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();
		$this->load->view('admin/view_header_admin',$data);
		$this->load->view('admin/view_sidebar_mhs');
		$this->load->view('modul/view_tambahdata',$data);
		$this->load->view('admin/view_footer_admin');

	}

	public function editdata($id=null){
		if(is_null($id)){
			$this->session->set_flashdata('message3','<div class="alert alert-success" role="alert">Data tidak ada</div>');
			redirect('Myadmin');
		}
		$where = array('int_id_mahasiswa' => $id);
		$data ['title'] = "Edit Data Mahasiswa | Sekolah Tinggi Teknologi Bandung";
		$data ['datamhs'] = $this->Modeladmin->edit_data($where, 'tbl_mahasiswa')->row_array();
		$this->load->view('admin/view_header_admin',$data);
		$this->load->view('admin/view_sidebar_mhs');
		$this->load->view('modul/view_editdata',$data);
		$this->load->view('admin/view_footer_admin');
	}

	public function aksi_tambah_data(){

		$this->form_validation->set_rules('npm','NPM','required|trim',[
			'required' => 'NPM tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama','Nama','required|trim',[
			'required' => 'Nama tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('semester','Semester','required|trim',[
			'required' => 'Semester tidak boleh kosong!'
		]);
		
		if($this->form_validation->run() != false){

			$npm = $this->input->post('npm');
			$nama =$this->input->post('nama');
			$semester =$this->input->post('semester');
			$status =$this->input->post('status');
			$status= 0;
			$data = array(
				'var_npm'=> $npm, 
				'var_nama'=> $nama,
				'int_semester'=> $semester,
				'int_status'=> $status
			);	

			$this->Modeladmin->tambah_data($data,'tbl_mahasiswa');	
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');
			redirect('Myadmin');
		}

		else{
			$this->tambahdata();
		}

	}

	public function aksi_edit_data(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama =$this->input->post('nama');
		$semester =$this->input->post('semester');	

		$data = array(
			'var_npm'=> $npm, 
			'var_nama'=> $nama,
			'int_semester'=> $semester
		);	

		$where = array(
			'int_id_mahasiswa' => $id
		);

		$this->Modeladmin->update_data($where,$data,'tbl_mahasiswa');
		$this->session->set_flashdata('message1','<div class="alert alert-success" role="alert">Data Berhasil diubah</div>');
		redirect('Myadmin');
	}	

	function hapus($id){		
		$where = array('int_id_mahasiswa' => $id);
		$this->Modeladmin->hapus_data($where,'tbl_mahasiswa');
		$this->session->set_flashdata('message2','<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
		redirect('Myadmin');
	}

	/*function aksi(){
		$this->form_validation->set_rules('npm','NPM','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('semester','Semester','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$data ['title'] = "TAMBAH DATA | Sekolah Tinggi Teknologi Bandung";
			$data ['tampil'] = $this->Modeladmin->tampilkan_data();
			$this->load->view('headadm',$data);
			$this->load->view('modul/view_tambahdata',$data);
			$this->load->view('footadm');
		}
	}*/

}
?>