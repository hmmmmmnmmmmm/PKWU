<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    private $table = 'pembayaran';

    public function get_all() {
        $this->db->order_by('created_at', 'DESC');
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update_status($id, $status, $note = null) {
    $data = ['status' => $status];
    if ($note) {
        $data['note'] = $note;
    }
    $this->db->where('id', $id);
    $this->db->update('pembayaran', $data);
}

}
