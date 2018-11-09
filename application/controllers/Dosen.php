<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('DosenModel'); 
	}
	
	public function index(){
		$datadosen['dosen'] = $this->DosenModel->view();
		$this->load->view('dosen/index', $datadosen);
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->DosenModel->validation("save")){ 
				$this->DosenModel->save(); 
				redirect('dosen');
			}
		}
		
		$this->load->view('dosen/form_tambah');
	}

	public function dosen_ubah(){
		$datadosen['dosen'] = $this->DosenModel->view();
		$this->load->view('dosen/v_dosen_ubah', $datadosen);
	}
	
	public function ubah($nip){
		if($this->input->post('submit')){ 
			if($this->DosenModel->validation("update")){ 
				$this->DosenModel->edit($nip);
				redirect('dosen');
			}
		}
		
		$datadosen['dosen'] = $this->DosenModel->view_by($nip);
		$this->load->view('dosen/form_ubah', $datadosen);
	}
	
	public function hapus($nip){
		$this->DosenModel->delete($nip); 
		redirect('dosen');
	}
}
