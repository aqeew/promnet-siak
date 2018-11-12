<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Dosen extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_Dosen'); 
	}
	
	public function index(){
		$datadosen['dosen'] = $this->M_Dosen->view();
		$this->load->view('./header');
		$this->load->view('dosen/index', $datadosen);
		$this->load->view('./footer');	
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->M_Dosen->validation("save")){ 
				$this->M_Dosen->save(); 
				redirect('C_Dosen');
			}
		}
		$this->load->view('./header');
		$this->load->view('dosen/form_tambah');
		$this->load->view('./footer');	
	}

	public function dosen_ubah(){
		$datadosen['dosen'] = $this->M_Dosen->view();
		$this->load->view('./header');
		$this->load->view('dosen/v_dosen_ubah', $datadosen);
		$this->load->view('./footer');	
	}
	
	public function ubah($nip){
		if($this->input->post('submit')){ 
			if($this->M_Dosen->validation("update")){ 
				$this->M_Dosen->edit($nip);
				redirect('C_Dosen');
			}
		}
		
		$datadosen['dosen'] = $this->M_Dosen->view_by($nip);
		$this->load->view('./header');
		$this->load->view('dosen/form_ubah', $datadosen);
		$this->load->view('./footer');	
	}
	
	public function hapus($nip){
		$this->M_Dosen->delete($nip); 
		redirect('C_Dosen');
	}
}
