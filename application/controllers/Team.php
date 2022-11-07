<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_team');
        
    }
    

    public function index()
    {
        $data = array(
            'title' => ' Add Team',
            'isi'   => 'team/v_index',
            'user' => $this->m_admin->get_all_data(),
            'team' => $this->m_team->get_all_data(),

        );
        $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function add(){
        $this->form_validation->set_rules('nama_tim', 'Nama', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('jabatan', 'Nama', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('link_fb', 'Facebook', 'required', array('required' => '%s Harus Diisi !! '));
        $this->form_validation->set_rules('link_ig', 'Instagram', 'required', array('required' => '%s Harus Diisi !! '));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './asset/gambarteam/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|ico';
            $config['max_size']             = '200000';
            $this->upload->initialize($config);
            $field_name = "gambar_tim";
            if ( ! $this->upload->do_upload($field_name))
                {
                    $data = array(
                        'title' => 'Tambah Team ',
                        'error_upload' => $this->upload->display_errors(),
                        'team' => $this->m_team->get_all_data(),          
                        'user' => $this->m_admin->get_all_data(),
                        'isi'   => 'fotohome/v_add',
                    );
                    $this->load->view('layout/v_wrapper_backend',$data,FALSE);

                }
                else
                {
                        $upload_data             = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image']  = './asset/gambarteam/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);

                        $data = array(
                            'nama_tim' => $this->input->post('nama_tim'),
                            'jabatan' => $this->input->post('jabatan'),
                            'link_fb' => $this->input->post('link_fb'),
                            'link_ig' => $this->input->post('link_ig'),
                            'gambar_tim' => $upload_data['uploads']['file_name']
                             );
                             $this->m_team->add($data);
                             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
                             redirect('team');

          }
       } 

       $data = array(
        'title' => 'Add Team',
        'isi'   => 'team/v_add',
        'team' => $this->m_team->get_all_data(),          
        'user' => $this->m_admin->get_all_data()
    );
    $this->load->view('layout/v_wrapper_backend',$data,FALSE);
    }

    public function delete( $id_tim = NULL )
    {
        //hapus file gambar lamo
        $team=$this->m_team->get_data($id_tim);
        if ($team->gambar_tim !="") {
            unlink('./asset/gambarteam/'.$team->gambar_tim);
        }
        //end
        $data = array('id_tim' => $id_tim );
        $this->m_team->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Hapus  ');
         redirect('team');
 
    }

}

/* End of file Controllername.php */
