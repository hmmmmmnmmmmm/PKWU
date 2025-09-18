<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi_model');
	}

	public function index()
	{
		$data['transaksi'] = $this->Transaksi_model->get_all(); // Gunakan 'transaksi' untuk view
		$this->load->view('transaksi/index', $data);
	}
	public function setujui($id)
	{
		$this->load->model('Transaksi_model');
		$this->Transaksi_model->update_status($id, 'berhasil', 'Pembayaran disetujui oleh admin.');

		$this->session->set_flashdata('success', 'Pembayaran telah disetujui.');
		redirect('transaksi');
	}
}
