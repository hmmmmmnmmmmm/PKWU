<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function get_user($username)
    {
        return $this->db->where('username', $username)->get('user')->row();
    }

    public function update_user($username, $data)
    {
        return $this->db->where('username', $username)->update('user', $data);
    }
}
