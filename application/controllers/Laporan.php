<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('session');
        // if (!$this->session->userdata('role')) {
        //     redirect('auth/login');
        // }
    }

    public function index() {
        $data['laporan'] = $this->Laporan_model->get_all();
        $data['judul'] = 'Data Laporan';
        $this->load->view('laporan/index', $data);
    }
}
