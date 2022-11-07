<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model {

    public function get_all_data_tentang(){
        $this->db->select('*');
        $this->db->from('tbl_tentang');
        return $this->db->get()->result();
    }

}

/* End M_tenteng.php */
