<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_pesan');
        $this->load->model('m_tentang');
    }
    

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi'   => 'v_admin',
            'user' => $this->m_admin->get_all_data(),
            'total_barang' => $this->m_admin->total_barang(),
            'total_kategori' => $this->m_admin->total_kategori(),
            'total_promo' => $this->m_admin->total_promo(),
            'total_foto' => $this->m_admin->total_foto(),
            'pesan' => $this->m_pesan->get_all_data()

        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    
    public function delete_pesan($id_pesan){
        $data = array(
            'id_pesan' => $id_pesan);
             $this->m_pesan->delete($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
             redirect('admin');

    }
    public function tentang()
    {
        $data = array(
            'title' => 'Tentang Website',
            'isi'   => 'v_tentang',
            'user' => $this->m_admin->get_all_data(),
            'tentang' => $this->m_tentang->get_all_data_tentang()
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

}

/* End of file Home.php */
