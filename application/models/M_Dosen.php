<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Dosen extends CI_Model {
	public function view(){
		return $this->db->get('dosen')->result();
	}
	
	public function view_by($nip){
		$this->db->where('nip', $nip);
		return $this->db->get('dosen')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		if($mode == "save")
			$this->form_validation->set_rules('input_nip', 'NIS', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_telp', 'Telp', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada datadosen yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan datadosen ke tabel dosen
	public function save(){
		$datadosen = array(
			"nip" => $this->input->post('input_nip'),
			"nama" => $this->input->post('input_nama'),
			"telp" => $this->input->post('input_telp'),
			"alamat" => $this->input->post('input_alamat')
		);
		
		$this->db->insert('dosen', $datadosen); // Untuk mengeksekusi perintah insert datadosen
	}
	
	// Fungsi untuk melakukan ubah datadosen dosen berdasarkan nip dosen
	public function edit($nip){
		$datadosen = array(
			"nama" => $this->input->post('input_nama'),
			"telp" => $this->input->post('input_telp'),
			"alamat" => $this->input->post('input_alamat')
		);
		
		$this->db->where('nip', $nip);
		$this->db->update('dosen', $datadosen); // Untuk mengeksekusi perintah update datadosen
	}
	
	// Fungsi untuk melakukan menghapus datadosen dosen berdasarkan nip dosen
	public function delete($nip){
		$this->db->where('nip', $nip);
		$this->db->delete('dosen'); // Untuk mengeksekusi perintah delete datadosen
	}
}
