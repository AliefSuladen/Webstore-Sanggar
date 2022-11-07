<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');    
        $this->db->order_by('id_produk', 'DESC');
        return $this->db->get()->result();
    }
    
    public function get_all_data_kategori(){
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->order_by('id_kategori', 'DESC');
        return $this->db->get()->result();
    }

    public function gambar_barang($id_produk){
        $this->db->select('*');
        $this->db->from('tbl_gambar');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->result();
        }

    public function detail_barang($id_produk){
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');    
    $this->db->where('id_produk', $id_produk);
    
    return $this->db->get()->row();
    }


    public function kategori($id_kategori){
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }

    public function get_all_data_barang($id_kategori){
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori', 'left');    
        $this->db->where('tbl_produk.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }

    public function get_all_data_promo(){
        $this->db->select('*');
        $this->db->from('tbl_promo');
        $this->db->order_by('id_promo', 'DESC');
        return $this->db->get()->result();
    }


    public function detail_barang_promo($id_promo){
        $this->db->select('*');
        $this->db->from('tbl_promo'); 
        $this->db->where('id_promo', $id_promo);
        
        return $this->db->get()->row();
        }

        public function gambar_barang_promo($id_promo){
            $this->db->select('*');
            $this->db->from('tbl_gambarpromo');
            $this->db->where('id_promo', $id_promo);
            return $this->db->get()->result();
            }



    
}

/* End of file produk.php */
