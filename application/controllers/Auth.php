<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
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

        if($data == NULL){
            $this->session->set_flashdata('error', 'Username Tidak Ditemukan');
            redirect('auth');
        }
        elseif($data->password === $password){
            $sess = [
                'nama'      => $data->nama,
                'username'  => $data->username,
            ];
            $this->session->set_userdata($sess);
            redirect('Wifi');
        }
        else{
            $this->session->set_flashdata('error', 'Password Salah');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}