<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wifi_model extends CI_Model {

    public function get_transactions() {
        return [
            ["name" => "Asep", "amount" => 100000],
            ["name" => "Asep", "amount" => 100000],
            ["name" => "Asep", "amount" => 100000],
        ];
    }
}
