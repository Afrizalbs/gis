<?php

class M_login extends CI_Model
{
    public function get($username)
    {
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row();

        return $result;
    }
}
