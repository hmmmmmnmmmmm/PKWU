<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        return $this->db->get('pelanggan')->result();
    }

    public function insert($data) {
        return $this->db->insert('pelanggan', $data);
    }
}
