<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->database();
    }

    public function get_by_username($username) {
        return $this->db->where('username', $username)
                        ->get('user')
                        ->row();
    }
}