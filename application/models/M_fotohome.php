<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_fotohome extends CI_Model {

    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_gambarhome');
        $this->db->order_by('id_gambar', 'DESC');
        return $this->db->get()->result();
    }
    public function add($data){
        $this->db->insert('tbl_gambarhome', $data);
    }

    public function delete($data){
        $this->db->where('id_gambar', $data['id_gambar']);
        $this->db->delete('tbl_gambarhome', $data);
        
        
    }
    public function get_data($id_gambar){
        $this->db->select('*');
        $this->db->from('tbl_gambarhome');
        $this->db->where('id_gambar', $id_gambar); 
        return $this->db->get()->row();
    }
}

/* End of file ModelName.php */

