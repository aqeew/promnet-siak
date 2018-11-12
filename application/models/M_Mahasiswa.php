<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model {
	public function view(){
		return $this->db->get('mahasiswa')->result();
	}
	
	public function view_by($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('mahasiswa')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		if($mode == "save")
			$this->form_validation->set_rules('input_nim', 'NIM', 'required|numeric|max_length[11]');
		
		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_angkatan', 'Angkatan', 'required|numeric|max_length[15]');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada datamahasiswa yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan datamahasiswa ke tabel mahasiswa
	public function save(){
		$datamahasiswa = array(
			"nim" => $this->input->post('input_nim'),
			"nama" => $this->input->post('input_nama'),
			"angkatan" => $this->input->post('input_angkatan')
		);
		
		$this->db->insert('mahasiswa', $datamahasiswa); // Untuk mengeksekusi perintah insert datamahasiswa
	}
	
	// Fungsi untuk melakukan ubah datamahasiswa mahasiswa berdasarkan nim mahasiswa
	public function edit($nim){
		$datamahasiswa = array(
			"nama" => $this->input->post('input_nama'),
			"angkatan" => $this->input->post('input_angkatan')
		);
		
		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $datamahasiswa); // Untuk mengeksekusi perintah update datamahasiswa
	}
	
	// Fungsi untuk melakukan menghapus datamahasiswa mahasiswa berdasarkan nim mahasiswa
	public function delete($nim){
		$this->db->where('nim', $nim);
		$this->db->delete('mahasiswa'); // Untuk mengeksekusi perintah delete datamahasiswa
	}
}
