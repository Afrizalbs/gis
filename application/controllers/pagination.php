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

    // public function index()
    // {
    //     //set params
    //     $params = array();
    //     //set records per page
    //     $limit_page = 100;
    //     $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
    //     $total = $this->m_data->get_total();

    //     if ($total > 0) {
    //         // get current page records
    //         $params['tb_geoatt_brt'] = $this->m_data->get_current_page($limit_page, $page * $limit_page);

    //         $config['base_url'] = base_url() . 'pagination/index';
    //         $config['total_rows'] = $total;
    //         $config['per_page'] = $limit_page;
    //         $config['uri_segment'] = 3;

    //         //paging configuration
    //         $config['num_links'] = 2;
    //         $config['use_page_numbers'] = TRUE;
    //         $config['reuse_query_string'] = TRUE;

    //         //bootstrap pagination 
    //         $config['full_tag_open'] = '<ul class="pagination">';
    //         $config['full_tag_close'] = '</ul>';
    //         $config['first_link'] = '&laquo; First';
    //         $config['first_tag_open'] = '<li>';
    //         $config['first_tag_close'] = '</li>';
    //         $config['last_link'] = 'Last &raquo';
    //         $config['last_tag_open'] = '<li>';
    //         $config['last_tag_close'] = '</li>';
    //         $config['next_link'] = 'Next';
    //         $config['next_tag_open'] = '<li>';
    //         $config['next_tag_close'] = '<li>';
    //         $config['prev_link'] = 'Prev';
    //         $config['prev_tag_open'] = '<li>';
    //         $config['prev_tag_close'] = '<li>';
    //         $config['cur_tag_open'] = '<li class="active"><a href="#">';
    //         $config['cur_tag_close'] = '</a></li>';
    //         $config['num_tag_open'] = '<li>';
    //         $config['num_tag_close'] = '</li>';

    //         $this->pagination->initialize($config);

    //         // build paging links
    //         $params['links'] = $this->pagination->create_links();
    //     }

    //     $this->load->view('menu/v_daftarabsen', $params);
    // }
}
