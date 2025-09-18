<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasangan_model extends CI_Model {

    private $table = 'pemasangan';

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function get_all() {
        return $this->db->order_by('created_at', 'DESC')->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }
}
