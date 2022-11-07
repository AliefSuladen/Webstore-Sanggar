<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_team extends CI_Model {

    public function get_all_data(){
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->order_by('id_tim', 'DESC');
        return $this->db->get()->result();
    }
    public function add($data){
        $this->db->insert('tbl_team', $data);
    }

    public function delete($data){
        $this->db->where('id_tim', $data['id_tim']);
        $this->db->delete('tbl_team', $data);
        
        
    }
    public function get_data($id_tim){
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->where('id_tim', $id_tim); 
        return $this->db->get()->row();
    }
}

/* End of file ModelName.php */

