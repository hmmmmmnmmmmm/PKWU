<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('role') == NULL) {
		// 	redirect('auth');
		// }
		$this->load->model('Pembayaran_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('pengguna/bayar'); // view form pembayaran
	}

	public function proses()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('rekening', 'Nomor Rekening', 'required');
		$this->form_validation->set_rules('tipe', 'Tipe Rekening', 'required|in_list[bca,bri,mandiri,bni,dana,bsi]');
		$this->form_validation->set_rules('jumlah', 'Jumlah Pembayaran', 'required|regex_match[/^[\d.,]+$/]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('pembayaran');
		}

		// Format jumlah dari '200.000,00' ke angka decimal
		$raw_jumlah = $this->input->post('jumlah');
		$jumlah = str_replace('.', '', $raw_jumlah); // hapus titik ribuan
		$jumlah = str_replace(',', '.', $jumlah); // ganti koma jadi titik

		$data = [
			'nama'     => $this->input->post('nama', TRUE),
			'rekening' => $this->input->post('rekening', TRUE),
			'note'     => $this->input->post('note', TRUE),
			'tipe'     => $this->input->post('tipe', TRUE),
			'jumlah'   => $jumlah
		];

		$this->Pembayaran_model->insert($data);
		$this->session->set_flashdata('sukses', 'Pembayaran berhasil diproses.');
		redirect('pembayaran/sukses');
	}

	public function sukses()
	{
		$this->load->view('pengguna/sukses');
	}
}
