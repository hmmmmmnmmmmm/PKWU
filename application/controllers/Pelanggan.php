<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

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
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'layanan' => $this->input->post('layanan'),
			];
			$this->Pelanggan_model->insert($data);
			redirect('pelanggan');
		}
		$this->load->view('pelanggan/tambah');
	}
	public function get_all()
	{
		return $this->db->select('*')->from('pelanggan')->get()->result();
	}
	public function detail($id)
	{
		$data['pelanggan'] = $this->Pelanggan_model->get_by_id($id);
		$this->load->view('pelanggan/detail', $data);
	}
	public function delete($id)
	{
		$where = [
			'id_pelanggan' => $id
		];
		$this->db->delete('pelanggan', $where);

		$this->session->set_flashdata('notifikasi', '
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data pelanggan berhasil dihapus!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	');

		redirect('pelanggan/index');
	}
}
