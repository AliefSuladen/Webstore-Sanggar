<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_kategori');
    }

    // List all your items
    public function index( )
    {
        $data = array(
            'title' => 'Kategori',
            'isi'   => 'kategori/v_kategori',
            'kategori' => $this->m_kategori->get_all_data(),
            'user' => $this->m_admin->get_all_data()
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    // Add a new item
    public function add(){
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array('required' => '%s Harus Diisi !! '));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarkategori/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar_kategori";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Tambah Kategori',
                        'error_upload' => $this->upload->display_errors(),
                        'kategori'=>$this->m_kategori->get_all_data(),
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'kategori/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarkategori/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                            'nama_kategori' => $this->input->post('nama_kategori'),
                            'gambar_kategori' => $upload_data['uploads']['file_name']
                             );
                             $this->m_kategori->add($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                             redirect('kategori');

          }
       } 

       $data = array(
        'title' => 'Tambah Kategori',
        'isi'   => 'kategori/v_add',
        'kategori'=>$this->m_kategori->get_all_data(),
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }


    //Update one item
   
    //Delete one item
    public function delete( $id_kategori = NULL )
    {
        //hapus file gambar lamo
        $kategori=$this->m_kategori->get_data($id_kategori);
        if ($kategori->gambar_kategori !="") {
            unlink('./asset/gambarkategori/'.$kategori->gambar_kategori);
        }
        //end
        $data = array('id_kategori' => $id_kategori );
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Hapus  ');
         redirect('kategori');
 
    }
}

/* End of file Kategori.php */

