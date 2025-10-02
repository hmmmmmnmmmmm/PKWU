<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wifi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('role') !== 'admin') {
		// 	redirect('auth');
		// }
		$this->load->model('Wifi_model');
		$this->load->library('session'); // tambahin ini
	}

	public function index()
	{
		$data['transactions'] = $this->Wifi_model->get_transactions();
		$username = $this->session->userdata('username');

		$data['user'] = (object)[
			'username' => $username
		];

		$this->load->view('dashboard', $data);
	}
}
