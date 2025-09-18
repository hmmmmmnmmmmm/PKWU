<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	// public function __construct() {
	//     parent::__construct();
	//     $this->load->model('Wifi_model');
	//     $this->load->library('session'); // tambahin ini
	// }

	public function index()
	{

		$data = [
			'title' => 'Wi-Fi FnNett'
		];

		$this->load->view('pengguna/login', $data);
	}

	public function bayar()
	{
		$data = [
			'title' => 'Pembayaran'
		];

		$this->load->view('pengguna/bayar', $data);
	}
	public function home() 
	{
		$this->load->view('pengguna/home');
	}
	public function logout ()
	{
		$this->session->sess_destroy();
		redirect('pengguna');
	}
}
