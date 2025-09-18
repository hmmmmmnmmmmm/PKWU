<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wifi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth/login');
        }
        $this->load->model('Wifi_model');
    }

    public function index() {
        $data['transactions'] = $this->Wifi_model->get_transactions();
        $data['judul'] = 'Wi-Fi Monitoring';
        $username = $this->session->userdata('username');

        if ($username) {
            $this->db->where('username', $username);
            $data['user'] = $this->db->get('user')->row();
        } else {
            $data['user'] = null;
        }

        $this->load->view('dashboard', $data);
    }
}