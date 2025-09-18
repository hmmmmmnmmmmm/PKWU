<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wifi_model extends CI_Model
{

	public function get_transactions()
	{
		$this->db->select('nama as name, jumlah as amount, status, created_at');
		$this->db->from('pembayaran');
		$this->db->order_by('created_at', 'DESC');
		$this->db->limit(5);
		return $this->db->get()->result_array();
	}
}
