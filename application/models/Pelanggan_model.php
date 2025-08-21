<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // pastikan database diload
    }

    public function get_all() {
        return $this->db->get('pelanggan')->result(); 
    }

    public function insert($data) {
        return $this->db->insert('pelanggan', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('pelanggan', ['id' => $id])->row();
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('pelanggan', $data);
    }

    public function delete($id) {
        return $this->db->delete('pelanggan', ['id' => $id]);
    }
}
