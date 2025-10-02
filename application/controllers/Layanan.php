<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
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

		$this->load->view('layanan/daftar_layanan', $data);
	}

	public function tambah()
	{
		if ($this->input->post()) {
			$data = [
				'nama_layanan' => $this->input->post('nama_layanan'),
				'kecepatan'    => $this->input->post('kecepatan'),
				'harga'        => $this->input->post('harga'),
				'kota'         => $this->input->post('kota'),
			];
			$this->Layanan_model->insert($data);
			redirect('layanan');
		} else {
			$this->load->view('layanan/tambah');
		}
	}

	public function hapus($id)
	{
		$this->Layanan_model->delete($id);
		redirect('layanan');
	}
	public function edit($id)
	{
		$data['layanan'] = $this->Layanan_model->get_by_id($id);

		if (!$data['layanan']) {
			show_404();
		}

		$this->load->view('layanan/edit', $data);
	}

	public function update()
	{
		$id = $this->input->post('id_layanan');
		$data = [
			'nama_layanan' => $this->input->post('nama_layanan'),
			'kecepatan'    => $this->input->post('kecepatan'),
			'harga'        => $this->input->post('harga'),
			'kota'   => $this->input->post('kota'),
		];
		$this->Layanan_model->update($id, $data);
		redirect('layanan');
	}
}
