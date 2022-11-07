<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotohome extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_fotohome');
        $this->load->model('m_admin');


    }
    

    public function index()
    {
        $data = array(
            'title' => 'Foto Home',
            'isi'   => 'fotohome/v_index',
            'user' => $this->m_admin->get_all_data(),
            'fotohome' => $this->m_fotohome->get_all_data(),
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function add(){
        $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array('required' => '%s Harus Diisi !! '));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarhome/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Tambah Fotohome',
                        'error_upload' => $this->upload->display_errors(),
                        'fotohome'=>$this->m_fotohome->get_all_data(),
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'fotohome/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarhome/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                            'judul' => $this->input->post('judul'),
                            'ket' => $this->input->post('ket'),
                            'gambar' => $upload_data['uploads']['file_name']
                             );
                             $this->m_fotohome->add($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                             redirect('fotohome');

          }
       } 

       $data = array(
        'title' => 'Tambah Fotohome',
        'isi'   => 'fotohome/v_add',
        'kategori'=>$this->m_fotohome->get_all_data(),
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function delete( $id_gambar = NULL )
    {
        //hapus file gambar lamo
        $fotohome=$this->m_fotohome->get_data($id_gambar);
        if ($fotohome->gambar !="") {
            unlink('./asset/gambarhome/'.$fotohome->gambar);
        }
        //end
        $data = array('id_gambar' => $id_gambar );
        $this->m_fotohome->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Hapus  ');
         redirect('fotohome');
 
    }
}