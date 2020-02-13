<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('menu/v_login');
    }

    public function aksi_login()
    {
        $user = $this->input->post('username', true);
        $pass = md5($this->input->post('password', true));

        //rule validasi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {
            $where = array(
                'username' => $user,
                'password' => $pass
            );

            $cekLogin = $this->m_login->cek_login($where)->num_rows();

            if ($cekLogin > 0) {

                $sess_data = array(
                    'username' => $user,
                    'login' => 'OK'
                );

                $this->session->set_userdata($sess_data);

                redirect(base_url('home'));
            } else {
                redirect(base_url('login'));
            }
        } else {
            $this->load->view('menu/v_login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
