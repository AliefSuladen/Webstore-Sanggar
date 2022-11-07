<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_fotoproduk extends CI_Model {
    public function get_all_data(){
        $this->db->select('tbl_produk.* ,COUNT(tbl_gambar.id_produk) as total_gambar');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_gambar', 'tbl_gambar.id_produk = tbl_produk.id_produk', 'left');
        $this->db->group_by('tbl_produk.id_produk');
        $this->db->order_by('tbl_produk.id_produk', 'desc');
        return $this->db->get()->result();
    }
    public function get_data($id_gambar){
        $this->db->select('*');
        $this->db->from('tbl_gambar');
        $this->db->where('id_produk', $id_gambar);
        return $this->db->get()->row();
    }
    
    public function get_gambar($id_produk){
      $this->db->select('*');
      $this->db->from('tbl_gambar');
      $this->db->where('id_produk', $id_produk);
      return $this->db->get()->result();
      
    }
    public function add($data){
        $this->db->insert('tbl_gambar', $data);
    }

    public function delete($data){
        $this->db->where('id_gambar', $data['id_gambar']);
        $this->db->delete('tbl_gambar', $data);    
    }

    public function get_all_data_promo(){
        $this->db->select('tbl_promo.* ,COUNT(tbl_gambarpromo.id_promo) as total_gambar');
        $this->db->from('tbl_promo');
        $this->db->join('tbl_gambarpromo', 'tbl_gambarpromo.id_promo = tbl_promo.id_promo', 'left');
        $this->db->group_by('tbl_promo.id_promo');
        $this->db->order_by('tbl_promo.id_promo', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_promo($id_gambar){
        $this->db->select('*');
        $this->db->from('tbl_gambarpromo');
        $this->db->where('id_promo', $id_gambar);
        return $this->db->get()->row();
    }
    public function get_gambar_promo($id_promo){
        $this->db->select('*');
        $this->db->from('tbl_gambarpromo');
        $this->db->where('id_promo', $id_promo);
        return $this->db->get()->result();
        
      }

      public function add_promo($data){
        $this->db->insert('tbl_gambarpromo', $data);
    }
    
    public function delete_promo($data){
        $this->db->delete('tbl_gambarpromo', $data); 
        $this->db->where('id_gambar', $data['id_gambar']);
           
    }
}