<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotoproduk extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_fotoproduk');
        $this->load->model('m_produk');

    }
    

    public function index()
    {
        $data = array(
            'title' => 'Foto Produk',
            'isi'   => 'fotoproduk/v_index',
            'user' => $this->m_admin->get_all_data(),
            'fotoproduk' => $this->m_fotoproduk->get_all_data(),
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function add($id_produk){
        $this->form_validation->set_rules('ket', 'Keterangan Foto', 'required', array('required' => '%s Harus Diisi !! '));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarbarang/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Add Foto Produk',
                        'error_upload' => $this->upload->display_errors(),
                        'user' => $this->m_admin->get_all_data(),
                        'produk'=> $this->m_produk->get_data($id_produk),
                        'user' => $this->m_admin->get_all_data(),
                        'gambar' => $this->m_fotoproduk->get_gambar($id_produk),
                        'isi'   => 'fotoproduk/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarbarang/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        $data = array(
                            'id_produk' => $id_produk,
                            'ket' => $this->input->post('ket'),
                            'gambar' => $upload_data['uploads']['file_name']
                             );
                             $this->m_fotoproduk->add($data);
                             $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan');
                             redirect('fotoproduk/add/'.$id_produk);

          }
       } 
        $data = array(
            'title' => 'Add Foto Produk',
            'isi'   => 'fotoproduk/v_add',
            'produk'=> $this->m_produk->get_data($id_produk),
            'user' => $this->m_admin->get_all_data(),
            'fotoproduk' => $this->m_fotoproduk->get_gambar($id_produk),
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function delete( $id_produk,$id_gambar )
    {
        //hapus file gambar lamo
        $gambar=$this->m_fotoproduk->get_data($id_gambar);
        if ($gambar->gambar !="") {
            unlink('./asset/gambarbarang/'.$gambar->gambar);
        }
        //end
        $data = array('id_gambar' => $id_gambar );
        $this->m_fotoproduk->delete($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus  ');
         redirect('fotoproduk/add/'.$id_produk);
 
    }

    
    

}