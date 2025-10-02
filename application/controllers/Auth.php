<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = md5(trim((string)$this->input->post('password')));

		$this->load->model('User_model');
		$data = $this->User_model->get_by_username($username);

		if ($data == NULL) {
			$this->session->set_flashdata('error', 'Username Tidak Ditemukan');
			redirect('auth');
		} elseif ($data->password === $password) {
			$sess = [
				'nama'      => $data->nama,
				'username'  => $data->username,
			];
			$this->session->set_userdata($sess);
			if ($data->role == 'admin') {
				redirect('wifi');
			} else {
				redirect('pengguna');
			}
		} else {
			$this->session->set_flashdata('notifikasi', '<div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                          <i class="ri-error-warning-fill text-danger me-2"></i>
                          <div class="me-auto fw-medium">Check Again</div>
                          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">Password Salah</div>
                      </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
