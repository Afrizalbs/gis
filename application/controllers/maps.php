<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function view($id = null)
    {
        if ($id == null) {
            redirect('');
        }
        $data['view_lokasi'] = $this->m_data->get_a_location(['id' => $id]);
        $this->load->view('menu/v_maps', $data);
    }
}
