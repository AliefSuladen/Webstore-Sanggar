<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
        $this->load->model('m_fotohome');
        $this->load->model('m_team');
        $this->load->model('m_pesan');
        $this->load->model('m_home');
        
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'isi'   => 'v_home',
            'kategori' => $this->m_kategori->get_all_data(),
            'fotohome' => $this->m_fotohome->get_all_data(),
        );
        $this->load->view('layout/v_wrapper_frontend',$data,FALSE);
    }

    public function layanan(){
        $data = array(
            'kategori' => $this->m_kategori->get_all_data(),
            'team' => $this->m_team->get_all_data(),
            'title' => 'Layanan',
            'isi'   => 'v_layanan'
        );
        $this->load->view('layout/v_wrapper_layanan',$data,FALSE);
        
    }
    public function produk(){
        $data = array(
            'produk' => $this->m_home->get_all_data(),
            'title' => 'Produk',
            'isi'   => 'v_produk'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
        
    }

    public function kategori($id_kategori){
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => 'Kategori : ' . $kategori->nama_kategori,
            'produk' => $this->m_home->get_all_data_barang($id_kategori),
            'isi'   => 'v_kategori'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
        
    }
    public function detail_barang($id_produk){
        $data = array(
            'title' => 'Detail Layanan',
            'gambar' => $this->m_home->gambar_barang($id_produk),
            'produk' => $this->m_home->detail_barang($id_produk),
            'isi'   => 'v_detail'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
    }

    public function promo(){
        $data = array(
            'produk' => $this->m_home->get_all_data_promo(),
            'title' => 'Promo Bulan Ini',
            'isi'   => 'v_promo'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
        
    }

    public function detail_promo($id_promo){
        $data = array(
            'title' => 'Detail Layanan',
            'gambar' => $this->m_home->gambar_barang_promo($id_promo),
            'produk' => $this->m_home->detail_barang_promo($id_promo),
            'isi'   => 'v_detail_promo'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
    }

    public function about()
    {
        $data = array(
            'pesan' => $this->m_pesan->get_all_data(),
            'title' => 'Tentang Kami',
            'isi'   => 'v_about',
            'team' => $this->m_team->get_all_data(),
            'kategori' => $this->m_kategori->get_all_data(),


            'kategori' => $this->m_kategori->get_all_data(),
            //'fotohome' => $this->m_fotohome->get_all_data(),
        );
        $this->load->view('layout/v_wrapper_about',$data,FALSE);
    }


}

/* End of file Home.php */
