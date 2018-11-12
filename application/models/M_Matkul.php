<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Matkul extends CI_Model {
	public function view(){
		return $this->db->get('matkul')->result();
	}
	
	public function view_by($id_matkul){
		$this->db->where('id_matkul', $id_matkul);
		return $this->db->get('matkul')->row();
	}
	
	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
		if($mode == "save")
			$this->form_validation->set_rules('input_id_matkul', 'ID Matkul', 'required|max_length[4]');
		
		$this->form_validation->set_rules('input_nama_matkul', 'Nama Matkul', 'required|max_length[50]');
		$this->form_validation->set_rules('input_sks', 'SKS', 'required|numeric|max_length[2]');
			
		if($this->form_validation->run()) // Jika validasi benar
			return TRUE; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada datamatkul yang tidak sesuai validasi
			return FALSE; // Maka kembalikan hasilnya dengan FALSE
	}
	
	// Fungsi untuk melakukan simpan datamatkul ke tabel matkul
	public function save(){
		$datamatkul = array(
			"id_matkul" => $this->input->post('input_id_matkul'),
			"nama_matkul" => $this->input->post('input_nama_matkul'),
			"sks" => $this->input->post('input_sks')
		);
		
		$this->db->insert('matkul', $datamatkul); // Untuk mengeksekusi perintah insert datamatkul
	}
	
	// Fungsi untuk melakukan ubah datamatkul matkul berdasarkan id_matkul matkul
	public function edit($id_matkul){
		$datamatkul = array(
			"nama_matkul" => $this->input->post('input_nama_matkul'),
			"sks" => $this->input->post('input_sks')
		);
		
		$this->db->where('id_matkul', $id_matkul);
		$this->db->update('matkul', $datamatkul); // Untuk mengeksekusi perintah update datamatkul
	}
	
	// Fungsi untuk melakukan menghapus datamatkul matkul berdasarkan id_matkul matkul
	public function delete($id_matkul){
		$this->db->where('id_matkul', $id_matkul);
		$this->db->delete('matkul'); // Untuk mengeksekusi perintah delete datamatkul
	}
}
