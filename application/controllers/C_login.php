<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tampilan_login');
	}

	public function getlogin(){
		if($this->model_login->getlogin($this->input->post('username'),$this->input->post('password'))){
			$data = $this->model_login->selectByUsername($this->input->post('username'))->row_array();

			$userdata = array(
				'id_usernama'=>$data['id_usernama'],
				'username'=>$data['username'],
				'password'=>$data['password'],
				'nama_lengkap'=>$data['nama_lengkap']
				);
			$this->session->set_userdata($userdata);
			redirect('home');
		}else{
			redirect('C_login');
		}
	}
	public function logout(){
		$this->session->session_destroy();
		redirect('C_login');
	}

}
