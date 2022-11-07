<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        return $this->db->get()->result();
    }
    
    public function total_barang(){
        return $this->db->get('tbl_produk')->num_rows();
    }

    public function total_kategori(){
        return $this->db->get('tbl_kategori')->num_rows();
    }

    public function total_promo(){
        return $this->db->get('tbl_promo')->num_rows();
    }

    public function total_foto(){
        return $this->db->get('tbl_gambarhome')->num_rows();
    }

}

/* End of file M_admin.php */
