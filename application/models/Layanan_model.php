<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan_model extends CI_Model
{

	public function getAll($kota = null)
	{
		if ($kota) {
			$this->db->where('kota', $kota);
		}
		return $this->db->get('layanan')->result();
	}

	public function insert($data)
	{
		return $this->db->insert('layanan', $data);
	}
	public function get_by_id($id)
	{
		return $this->db->get_where('layanan', ['id_layanan' => $id])->row();
	}

	public function update($id, $data)
	{
		$this->db->where('id_layanan', $id);
		return $this->db->update('layanan', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('layanan', ['id_layanan' => $id]);
	}
}
