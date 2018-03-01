<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Amessage_model extends CI_Model{
    public function send(){
        //Array ( [name] => hdkjdlkjfdkjlafjkl [email] => jklasjlfsdjlfdjslskdfj@jkljlk.jdskljlk [subject] => jdflkdfsajaflk [message] => jlkjlkjjkljkfakljfasjklfadsjklfakjsafkjfdajkkjfds )
        $data =array(
            'amname' => $this->input->post('name'),
            'amemail' => $this->input->post('message'),
            'amsubject' => $this->input->post('subject'),
            'ammsg' => $this->input->post('message'),
            'amcreated' => date('Y-m-d')
        );
        return $this->db->insert('amessage_tbl',$data);
    }

    public function view($mid=FALSE){
        $type=$this->session->userdata('type');
        if($type=='Admin'){
            if($mid===FALSE){
                $query = $this->db->get('amessage_tbl');
                return $query->result_array();
            }

            $query = $this->db->get_where('amessage_tbl',array('amid'=>$mid));
            return $query->row_array();
        }
    }

}
