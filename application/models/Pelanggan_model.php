<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		$this->db->order_by('id_pelanggan', 'DESC');
		return $this->db->get('pelanggan')->result();
	}

	public function insert($data)
	{
		return $this->db->insert('pelanggan', $data);
	}
	public function get_by_id($id)
	{
		return $this->db->get_where('pelanggan', ['id_pelanggan' => $id])->row();
	}
}
