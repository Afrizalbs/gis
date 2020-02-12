<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->input->post()) {
            if ($this->M_login->cek_Login())
                redirect(site_url('home'));
        }
        //tampil halaman login
        $this->load->view('menu/v_login');
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
