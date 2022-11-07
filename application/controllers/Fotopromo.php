<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotopromo extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_fotoproduk');
        $this->load->model('m_produk');
        $this->load->model('m_promo');


    }
    

    public function index()
    {
        $data = array(
            'title' => 'Tambah Foto Produk(Promo)',
            'isi'   => 'fotopromo/v_index',
            'user' => $this->m_admin->get_all_data(),
            'fotoproduk' => $this->m_fotoproduk->get_all_data_promo(),
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function add($id_promo){
        $this->form_validation->set_rules('ket', 'Keterangan Foto', 'required', array('required' => '%s Harus Diisi !! '));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarpromo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Add Foto Produk(promo)',
                        'error_upload' => $this->upload->display_errors(),
                        'user' => $this->m_admin->get_all_data(),
                        'produk'=> $this->m_promo->get_data($id_promo),
                        'user' => $this->m_admin->get_all_data(),
                        'gambar' => $this->m_fotoproduk->get_gambar_promo($id_promo),
                        'isi'   => 'fotopromo/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarpromo/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
                        $data = array(
                            'id_promo' => $id_promo,
                            'ket' => $this->input->post('ket'),
                            'gambar' => $upload_data['uploads']['file_name']
                             );
                             $this->m_fotoproduk->add_promo($data);
                             $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan');
                             redirect('fotopromo/add/'.$id_promo);

          }
       } 
        $data = array(
            'title' => 'Add Foto Produk',
            'isi'   => 'fotopromo/v_add',
            'produk'=> $this->m_promo->get_data($id_promo),
            'user' => $this->m_admin->get_all_data(),
            'fotoproduk' => $this->m_fotoproduk->get_gambar_promo($id_promo),
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function delete( $id_promo,$id_gambar )
    {
        //hapus file gambar lamo
        $gambar=$this->m_fotoproduk->get_data_promo($id_gambar);
        if ($gambar->gambar !="") {
            unlink('./asset/gambarpromo/'.$gambar->gambar);
        }
        //end
        $data = array('id_gambar' => $id_gambar );
        $this->m_fotoproduk->delete_promo($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus  ');
         redirect('fotopromo/add/'.$id_promo);
 
    }
    

}