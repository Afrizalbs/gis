<?php
class M_data extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function show_data()
    {
        $total = $this->db->query("SELECT * FROM tb_geoatt_brt");
        return $total;
    }

    // public function get_current_page($limit, $start)
    // {
    //     $this->db->limit($limit, $start);
    //     $query = $this->db->get('tb_geoatt_brt');
    //     $rows = $query->result();

    //     if ($query->num_rows() > 0) {
    //         foreach ($rows as $row) {
    //             $data[] = $row;
    //         }

    //         return $data;
    //     }

    //     return false;
    // }

    // public function get_total()
    // {
    //     return $this->db->count_all('tb_geoatt_brt');
    // }

    // public function get_location()
    // {
    //     return $this->db
    //         ->select('*')
    //         ->from('tb_geoatt_brt')
    //         ->order_by('id', 'desc')
    //         ->get()->result_array();
    // }


}
