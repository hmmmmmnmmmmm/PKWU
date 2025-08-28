<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }

    public function index() {
        $this->load->view('pembayaran/form');
    }

    public function proses() {
        $data = [
            'nama'       => $this->input->post('nama'),
            'rekening'   => $this->input->post('rekening'),
            'note'       => $this->input->post('note'),
            'jumlah'     => $this->input->post('jumlah')
        ];

        $this->Pembayaran_model->insert($data);
        redirect('pembayaran/sukses');
    }

    public function sukses() {
        echo "<h3>Pembayaran berhasil!</h3>";
        echo "<a href='".site_url('pembayaran')."'>Kembali</a>";
    }
}
