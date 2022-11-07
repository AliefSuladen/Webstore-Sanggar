<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_promo');
    }

    // List all your items
    public function index( )
    {
        $data = array(
            'title' => 'Produk',
            'isi'   => 'promo/v_index',
            'produk'=> $this->m_promo->get_all_data(),
            'user' => $this->m_admin->get_all_data()
        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    // Add a new item
    public function add(){
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required',array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required',array('required' => '%s Harus Diisi !! '));
        
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarpromo/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar_produk";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Tambah Produk',
                        'error_upload' => $this->upload->display_errors(),
                        'produk'=> $this->m_promo->get_all_data(),
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'promo/v_add',
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
                            'nama_produk' => $this->input->post('nama_produk'),
                            'harga' => $this->input->post('harga'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'gambar_produk' => $upload_data['uploads']['file_name']
                             );
                             $this->m_promo->add($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                             redirect('promo');

          }
       } 

       $data = array(
        'title' => 'Tambah Produk',
        'isi'   => 'promo/v_add',
        'produk'=> $this->m_promo->get_all_data(),
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    

    //Delete one item
    public function delete( $id_promo = NULL )
    {
        //hapus file gambar lamo
        $promo=$this->m_promo->get_data($id_promo);
        if ($promo->gambar_produk !="") {
            unlink('./asset/gambarpromo/'.$promo->gambar_produk);
        }
        //end
        $data = array('id_promo' => $id_promo );
        $this->m_promo->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Hapus  ');
         redirect('promo');
 
    }
}

/* End of file produk.php */


