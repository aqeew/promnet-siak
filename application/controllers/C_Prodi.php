<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Prodi extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_Prodi'); 
	}
	
	public function index(){
		$dataprodi['prodi'] = $this->M_Prodi->view();
		$this->load->view('./header');
		$this->load->view('prodi/index', $dataprodi);
		$this->load->view('./footer');	
	}
	
	public function tambah(){
		if($this->input->post('submit')){ 
			if($this->M_Prodi->validation("save")){ 
				$this->M_Prodi->save(); 
				redirect('C_Prodi');
			}
		}
		$this->load->view('./header');
		$this->load->view('prodi/form_tambah');
		$this->load->view('./footer');	
	}

	public function prodi_ubah(){
		$dataprodi['prodi'] = $this->M_Prodi->view();
		$this->load->view('./header');
		$this->load->view('prodi/v_prodi_ubah', $dataprodi);
		$this->load->view('./footer');	
	}
	
	public function ubah($id_prodi){
		if($this->input->post('submit')){ 
			if($this->M_Prodi->validation("update")){ 
				$this->M_Prodi->edit($id_prodi);
				redirect('C_Prodi');
			}
		}
		
		$dataprodi['prodi'] = $this->M_Prodi->view_by($id_prodi);
		$this->load->view('./header');
		$this->load->view('prodi/form_ubah', $dataprodi);
		$this->load->view('./footer');	
	}
	
	public function hapus($id_prodi){
		$this->M_Prodi->delete($id_prodi); 
		redirect('C_Prodi');
	}
}
