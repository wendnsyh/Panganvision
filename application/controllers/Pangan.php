<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pangan_model');
    }

    // Menampilkan daftar pangan
    public function index() {
        // Ambil input pencarian dari query string
        $search = $this->input->get('search');
    
        // Jika ada pencarian, gunakan model untuk memfilter data
        if ($search) {
            $data['pangan'] = $this->Pangan_model->search_pangan($search);
        } else {
            $data['pangan'] = $this->Pangan_model->get_all_pangan();
        }
    
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('Pangan/index'); // Konten utama
        $this->load->view('template/footer');
    }
    
    

    // Menampilkan form tambah pangan
    public function create() {
        $this->load->view('pangan/create');
    }

    // Menyimpan data pangan baru
    public function store() {
        $this->form_validation->set_rules('jenis_pangan', 'Jenis Pangan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pangan/create');
        } else {
            $data = [
                'Jenis_Pangan' => $this->input->post('jenis_pangan', TRUE)
            ];
            $this->Pangan_model->insert_pangan($data);
            redirect('pangan');
        }
    }

    // Menampilkan form edit pangan
    public function edit($id) {
        $data['pangan'] = $this->Pangan_model->get_pangan_by_id($id);
        if (!$data['pangan']) {
            show_404();
        }
        $this->load->view('pangan/edit', $data);
    }

    // Memperbarui data pangan
    public function update($id) {
        $this->form_validation->set_rules('jenis_pangan', 'Jenis Pangan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['pangan'] = $this->Pangan_model->get_pangan_by_id($id);
            $this->load->view('pangan/edit', $data);
        } else {
            $data = [
                'Jenis_Pangan' => $this->input->post('jenis_pangan', TRUE)
            ];
            $this->Pangan_model->update_pangan($id, $data);
            redirect('pangan');
        }
    }

    // Menghapus data pangan
    public function delete($id) {
        $this->Pangan_model->delete_pangan($id);
        redirect('pangan');
    }
}
