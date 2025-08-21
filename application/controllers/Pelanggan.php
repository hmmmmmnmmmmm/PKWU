<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_all();
        $this->load->view('pelanggan/index', $data);
    }

    public function tambah()
    {
        if ($this->input->post()) {
            $data = [
                'nama'   => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->Pelanggan_model->insert($data);
            redirect('pelanggan');
        } else {
            $this->load->view('pelanggan/tambah');
        }
    }

    public function detail($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->get_by_id($id);
        $this->load->view('pelanggan/detail', $data);
    }
}
