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

    public function get_a_location($where = array())
    {
        return $this->db
            ->select('*')
            ->where($where)
            ->get('tb_geoatt_brt')
            ->row();
    }

    public function delete($where = array())
    {
        $this->db->delete('tb_geoatt_brt', $where);
        return $this->db->affected_rows();
    }
}
