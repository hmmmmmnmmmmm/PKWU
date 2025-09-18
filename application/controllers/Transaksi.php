<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth/login');
        }
        $this->load->model('Transaksi_model');
    }

    public function index() {
        $data['pembayaran'] = $this->Transaksi_model->get_all();
        $this->load->view('transaksi/index', $data);
    }
}
