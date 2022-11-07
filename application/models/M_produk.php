<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');
        
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get()->result();
    }
    public function get_data($id_produk){
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');
        $this->db->where('id_produk', $id_produk); 
        return $this->db->get()->row();
    }

    public function add($data){
        $this->db->insert('tbl_produk', $data);
    }
    public function edit($data){
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('tbl_produk', $data);
    }

    public function delete($data){
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('tbl_produk', $data);
        
    }
    

}

/* End of file produk.php */
