<?php

class Visitas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function num_visitas() {
        return $this->db->get('visitas')->num_rows();
    }

    public function get_visitas($per_page) {
        $datos=  $this->db->get('visitas',$per_page,$this->uri->segment(3));
        return $datos->result_array();
    }

}
