<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagination extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->model('m_data');
    }

    public function index()
    {
        $d['data'] = $this->m_data->show_data();
        $this->load->view('menu/v_daftarabsen', $d);
    }

    public function chart()
    {
        $data['chart'] = $this->m_data->get_chart_data();
        $this->load->view('menu/v_chart', $data);
        print_r($data);
        die();
    }
}
