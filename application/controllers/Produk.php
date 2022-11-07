<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_produk');
        $this->load->model('m_kategori');

    }

    // List all your items
    public function index( )
    {
        $data = array(
            'title' => 'Produk',
            'isi'   => 'produk/v_produk',
            'produk'=> $this->m_produk->get_all_data(),
            'user' => $this->m_admin->get_all_data()
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    // Add a new item
    public function add(){
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required',array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required',array('required' => '%s Harus Diisi !! '));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarbarang/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar_produk";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Tambah Produk',
                        'error_upload' => $this->upload->display_errors(),
                        'kategori'=>$this->m_kategori->get_all_data(),
                        'produk'=> $this->m_produk->get_all_data(),
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'produk/v_add',
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
                            'nama_produk' => $this->input->post('nama_produk'),
                            'id_kategori' => $this->input->post('id_kategori'),
                            'harga' => $this->input->post('harga'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'gambar_produk' => $upload_data['uploads']['file_name']
                             );
                             $this->m_produk->add($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                             redirect('produk');

          }
       } 

       $data = array(
        'title' => 'Tambah Produk',
        'isi'   => 'produk/v_add',
        'produk'=> $this->m_produk->get_all_data(),
        'kategori'=>$this->m_kategori->get_all_data(),
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function edit( $id_produk = NULL )
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required',array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required',array('required' => '%s Harus Diisi !! '));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarbarang/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar_produk";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Edit Produk',
                        'error_upload' => $this->upload->display_errors(),
                        'kategori'=>$this->m_kategori->get_all_data(),
                        'produk'=> $this->m_produk->get_data($id_produk),
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'produk/v_edit',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                     //hapus file gambar lamo
                        $produk=$this->m_produk->get_data($id_produk);
                        if ($produk->gambar_produk !="") {
                            unlink('./asset/gambarbarang/'.$produk->gambar_produk);
                        }
                        //end
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarbarang/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                            'id_produk' => $id_produk,
                            'nama_produk' => $this->input->post('nama_produk'),
                            'id_kategori' => $this->input->post('id_kategori'),
                            'harga' => $this->input->post('harga'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'gambar_produk' => $upload_data['uploads']['file_name']
                             );
                             $this->m_produk->edit($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
                             redirect('produk');

          }
          $data = array(
            'id_produk' => $id_produk,
            'nama_produk' => $this->input->post('nama_produk'),
            'id_kategori' => $this->input->post('id_kategori'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
             );
             $this->m_produk->edit($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
             redirect('produk');
       } 

       $data = array(
        'title' => 'Edit Produk',
        'isi'   => 'produk/v_edit',
        'produk'=> $this->m_produk->get_data($id_produk),
        'kategori'=>$this->m_kategori->get_all_data(),
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    //Delete one item
    public function delete( $id_produk = NULL )
    {
        //hapus file gambar lamo
        $produk=$this->m_produk->get_data($id_produk);
        if ($produk->gambar_produk !="") {
            unlink('./asset/gambar/'.$produk->gambar_produk);
        }
        //end
        $data = array('id_produk' => $id_produk );
        $this->m_produk->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Hapus  ');
         redirect('produk');
 
    }
}

/* End of file produk.php */


