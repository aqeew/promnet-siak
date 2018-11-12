<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Matkul extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_Matkul'); 
	}
	
	public function index(){
		$datamatkul['matkul'] = $this->M_Matkul->view();
		$this->load->view('./header');
		$this->load->view('matkul/index', $datamatkul);
		$this->load->view('./footer');	
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->M_Matkul->validation("save")){ 
				$this->M_Matkul->save(); 
				redirect('C_Matkul');
			}
		}
		$this->load->view('./header');
		$this->load->view('matkul/form_tambah');
		$this->load->view('./footer');	
	}

	public function matkul_ubah(){
		$datamatkul['matkul'] = $this->M_Matkul->view();
		$this->load->view('./header');
		$this->load->view('matkul/v_matkul_ubah', $datamatkul);
		$this->load->view('./footer');	
	}
	
	public function ubah($id_matkul){
		if($this->input->post('submit')){ 
			if($this->M_Matkul->validation("update")){ 
				$this->M_Matkul->edit($id_matkul);
				redirect('C_Matkul');
			}
		}
		
		$datamatkul['matkul'] = $this->M_Matkul->view_by($id_matkul);
		$this->load->view('./header');
		$this->load->view('matkul/form_ubah', $datamatkul);
		$this->load->view('./footer');	
	}
	
	public function hapus($id_matkul){
		$this->M_Matkul->delete($id_matkul); 
		redirect('C_Matkul');
	}
}
