<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
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

    public function delete($id = null)
    {
        if ($id == null) {
            redirect('');
        }

        $result = $this->m_data->delete(['id' => $id]);
        if ($result) {
            $this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Successful.</div>');
            redirect('pagination');
        } else {
            $this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Failed.</div>');
            redirect('pagination');
        }
    }
}
