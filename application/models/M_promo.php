<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_promo extends CI_Model {
    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_promo');       
        $this->db->order_by('id_promo', 'DESC');
        return $this->db->get()->result();
    }
    public function get_data($id_promo){
        $this->db->select('*');
        $this->db->from('tbl_promo');
        $this->db->where('id_promo', $id_promo); 
        return $this->db->get()->row();
    }

    public function add($data){
        $this->db->insert('tbl_promo', $data);
    }
    public function edit($data){
        $this->db->where('id_promo', $data['id_promo']);
        $this->db->update('tbl_promo', $data);
    }

    public function delete($data){
        $this->db->where('id_promo', $data['id_promo']);
        $this->db->delete('tbl_promo', $data);
        
    }
    

}
