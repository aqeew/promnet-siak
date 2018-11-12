<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Prodi extends CI_Model {
	public function view(){
		return $this->db->get('prodi')->result();
	}
	
	public function view_by($id_prodi){
		$this->db->where('id_prodi', $id_prodi);
		return $this->db->get('prodi')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		if($mode == "save")
			$this->form_validation->set_rules('input_id_prodi', 'ID Prodi', 'required|max_length[10]');
		
		$this->form_validation->set_rules('input_nama_prodi', 'Nama Prodi', 'required|max_length[50]');
		$this->form_validation->set_rules('input_akreditasi', 'Akreditasi', 'required|max_length[15]');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada dataprodi yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan dataprodi ke tabel prodi
	public function save(){
		$dataprodi = array(
			"id_prodi" => $this->input->post('input_id_prodi'),
			"nama_prodi" => $this->input->post('input_nama_prodi'),
			"akreditasi" => $this->input->post('input_akreditasi'),
		);
		
		$this->db->insert('prodi', $dataprodi); // Untuk mengeksekusi perintah insert dataprodi
	}
	
	// Fungsi untuk melakukan ubah dataprodi prodi berdasarkan id_prodi prodi
	public function edit($id_prodi){
		$dataprodi = array(
			"nama_prodi" => $this->input->post('input_nama_prodi'),
			"akreditasi" => $this->input->post('input_akreditasi'),
		);
		
		$this->db->where('id_prodi', $id_prodi);
		$this->db->update('prodi', $dataprodi); // Untuk mengeksekusi perintah update dataprodi
	}
	
	// Fungsi untuk melakukan menghapus dataprodi prodi berdasarkan id_prodi prodi
	public function delete($id_prodi){
		$this->db->where('id_prodi', $id_prodi);
		$this->db->delete('prodi'); // Untuk mengeksekusi perintah delete datadosen
	}
}
