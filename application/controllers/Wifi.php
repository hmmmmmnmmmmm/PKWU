<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wifi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Wifi_model');
    }

    public function index() {
        // Ambil data transaksi dari model
        $data['transactions'] = $this->Wifi_model->get_transactions();
        $data['user'] = "Asep"; // Contoh user login (nanti bisa diganti session)

        $this->load->view('dashboard', $data);
    }
}
