<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    public function index() {
        $kota = $this->input->get('kota');

        // Simulasi data berdasarkan kota
        $layananData = [
            'solo' => [
                ['nama' => 'Paket Hemat 20Mbps', 'kecepatan' => '20Mbps', 'harga' => 150000],
                ['nama' => 'Paket Pro 50Mbps', 'kecepatan' => '50Mbps', 'harga' => 250000],
                ['nama' => 'Paket Ultra 100Mbps', 'kecepatan' => '100Mbps', 'harga' => 350000],
            ],
            'yogyakarta' => [
                ['nama' => 'Paket Lite 10Mbps', 'kecepatan' => '10Mbps', 'harga' => 100000],
                ['nama' => 'Paket Family 30Mbps', 'kecepatan' => '30Mbps', 'harga' => 200000],
            ],
            'semarang' => [
                ['nama' => 'Paket Starter 25Mbps', 'kecepatan' => '25Mbps', 'harga' => 180000],
                ['nama' => 'Paket Premium 75Mbps', 'kecepatan' => '75Mbps', 'harga' => 300000],
            ],
        ];

        $layanan = isset($layananData[$kota]) ? $layananData[$kota] : [];

        $data = [
            'kota' => $kota,
            'layanan' => $layanan
        ];

        $this->load->view('layanan/index', $data);
    }
	public function tambah() {
		// Logika untuk menambahkan layanan baru
		// Misalnya, menampilkan form untuk input data layanan baru
		$this->load->view('layanan/tambah');
	}
}
