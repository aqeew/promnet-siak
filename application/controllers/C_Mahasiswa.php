<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Mahasiswa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_Mahasiswa'); 
	}
	
	public function index(){
		$datamahasiswa['mahasiswa'] = $this->M_Mahasiswa->view();
		$this->load->view('./header');
		$this->load->view('mahasiswa/index', $datamahasiswa);
		$this->load->view('./footer');	
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->M_Mahasiswa->validation("save")){ 
				$this->M_Mahasiswa->save(); 
				redirect('C_Mahasiswa');
			}
		}
		$this->load->view('./header');
		$this->load->view('mahasiswa/form_tambah');
		$this->load->view('./footer');	
	}

	public function Mahasiswa_ubah(){
		$datamahasiswa['mahasiswa'] = $this->M_Mahasiswa->view();
		$this->load->view('./header');
		$this->load->view('mahasiswa/v_mahasiswa_ubah', $datamahasiswa);
		$this->load->view('./footer');	
	}
	
	public function ubah($nim){
		if($this->input->post('submit')){ 
			if($this->M_Mahasiswa->validation("update")){ 
				$this->M_Mahasiswa->edit($nim);
				redirect('C_Mahasiswa');
			}
		}
		
		$datamahasiswa['mahasiswa'] = $this->M_Mahasiswa->view_by($nim);
		$this->load->view('./header');
		$this->load->view('mahasiswa/form_ubah', $datamahasiswa);
		$this->load->view('./footer');	
	}
	
	public function hapus($nim){
		$this->M_Mahasiswa->delete($nim); 
		redirect('C_Mahasiswa');
	}
}
