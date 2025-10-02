<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	public function index()
	{

		$data = [
			'title' => 'Wi-Fi FnNett'
		];

		$this->load->view('pengguna/home', $data);
	}

	public function bayar()
	{
		$data = [
			'title' => 'Pembayaran'
		];

		$this->load->view('pengguna/bayar', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pengguna');
	}
	public function layanan()
	{
		$kota = $this->input->get('kota');
		$data['layanan'] = $this->Layanan_model->getAll($kota);
		$data['kota'] = $kota;

		$this->load->view('layanan/index', $data);
	}
}
