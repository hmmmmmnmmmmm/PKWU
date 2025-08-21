<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pelanggan_model');
    }

    public function index() {
        $data['pelanggan'] = $this->Pelanggan_model->get_all();
        $this->load->view('pelanggan/index', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'layanan' => $this->input->post('layanan'),
            ];
            $this->Pelanggan_model->insert($data);
            redirect('pelanggan');
        }
        $this->load->view('pelanggan/tambah');
    }
}
