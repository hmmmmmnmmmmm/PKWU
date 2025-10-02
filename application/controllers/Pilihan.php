<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilihan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('role') == NULL) {
		// 	redirect('auth');
		// }
		$this->load->model('Layanan_model');
	}

	public function index()
	{
		$kota = $this->input->get('kota');
		$data['layanan'] = $this->Layanan_model->getAll($kota);
		$data['kota'] = $kota;

		$this->load->view('layanan/index', $data);
	}

}
