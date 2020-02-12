<?php

class M_login extends CI_Model
{
    private $_table = "admin";

    public function cek_Login()
    {
        $post = $this->input->post();

        //cari user berdasarkan nama
        $this->db->where('nama', $post["nama"])
            ->or_where('username', $post["nama"]);
        $admin = $this->db->get($this->_table)->row();

        //jika user terdaftar
        if ($admin) {
            //periksa password
            $isPasswordTrue = password_verify($post["password"], $admin->password);
            //perikas role
            $isAdmin = $admin->role == "admin";

            //jika pass benar dan admin
            if ($isPasswordTrue && $isAdmin) {
                $this->session->set_userdata(['user_logged' => $admin]);
                $admin->_updateLastLogin($admin->admin_id);
                return true;
            }
        }

        //login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}
