<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasangan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pemasangan_model');
        $this->load->library('session');
    }

    public function index() {
        // Menampilkan form lokasi dan layanan
        $this->load->view('layanan/form_penawaran');
    }

    public function simpan() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('layanan', 'Layanan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('pemasangan');
        }

        $data = [
            'nama'     => $this->input->post('nama', TRUE),
            'kota'     => $this->input->post('kota', TRUE),
            'layanan'  => $this->input->post('layanan', TRUE),
            'harga'    => $this->input->post('harga', TRUE)
        ];

        $this->Pemasangan_model->insert($data);
        $this->session->set_flashdata('sukses', 'Pemasangan berhasil disimpan.');
        redirect('pemasangan/sukses');
    }

    public function sukses() {
        $this->load->view('pengguna/sukses_pemasangan');
    }
}
