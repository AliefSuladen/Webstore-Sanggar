<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pesan');
        
    }
    

    public function index()
    {
        $data = array(
            //'kontak' => $this->m_kontak->get_all_data_promo(),
            'title' => 'Hubungi Kami',
            'isi'   => 'v_kontak'
        );
        $this->load->view('layout/v_wrapper_produk',$data,FALSE);
    }

    public function add(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'pesan' => $this->input->post('pesan'),
             );
             $this->m_pesan->add($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
             redirect('kontak');

    }


}
