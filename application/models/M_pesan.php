<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {
    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_pesan');
        $this->db->order_by('id_pesan', 'DESC');
        return $this->db->get()->result();
    }

    public function add($data){
        $this->db->insert('tbl_pesan', $data);
    }
    

    public function delete($data){
        $this->db->where('id_pesan', $data['id_pesan']);
        $this->db->delete('tbl_pesan', $data);
        
        
    }
    

}

/* End of file kategori.php */
