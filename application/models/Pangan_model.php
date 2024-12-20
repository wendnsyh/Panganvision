<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangan_model extends CI_Model {

    // Mendapatkan semua data pangan
    public function get_all_pangan() {
        return $this->db->get('Pangan')->result_array();
    }

    // Mendapatkan data pangan berdasarkan ID
    public function get_pangan_by_id($id) {
        return $this->db->get_where('Pangan', ['ID_Pangan' => $id])->row_array();
    }

    // Menambahkan data pangan
    public function insert_pangan($data) {
        return $this->db->insert('Pangan', $data);
    }

    // Memperbarui data pangan
    public function update_pangan($id, $data) {
        $this->db->where('ID_Pangan', $id);
        return $this->db->update('Pangan', $data);
    }

    // Menghapus data pangan
    public function delete_pangan($id) {
        $this->db->where('ID_Pangan', $id);
        return $this->db->delete('Pangan');
    }

    public function search_pangan($keyword) {
        $this->db->like('Jenis_Pangan', $keyword); // Filter berdasarkan kolom 'Jenis_Pangan'
        return $this->db->get('pangan')->result_array(); // Ambil data dari tabel 'pangan'
    }
    
}
