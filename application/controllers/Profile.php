<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->library('session');
        // if (!$this->session->userdata('username')) {
        //     redirect('auth/login');
        // }
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $data['judul'] = 'Profile';
        $data['user'] = $this->Profile_model->get_user($username);
        $this->load->view('profile/index', $data);
    }

    public function edit()
    {
        $username = $this->session->userdata('username');
        $data['user'] = $this->Profile_model->get_user($username);
        $this->load->view('profile/edit', $data); 
    }

    public function update()
    {
        $username = $this->session->userdata('username');

        $data = [
            'nama' => $this->input->post('nama')
        ];

        if ($this->input->post('password')) {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        }

        $this->Profile_model->update_user($username, $data);
        $this->session->set_flashdata('success', 'Profil berhasil diperbarui!');
        redirect('profile');
    }
}
