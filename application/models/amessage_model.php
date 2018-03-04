<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Amessage_model extends CI_Model{
    
    public function delete($amid){
        $data =array(
            'amstatus' => 0
        );
        $this->db->where('amid',$amid);
        return $this->db->update('amessage_tbl',$data);
    }
    public function send(){
        //Array ( [name] => hdkjdlkjfdkjlafjkl [email] => jklasjlfsdjlfdjslskdfj@jkljlk.jdskljlk [subject] => jdflkdfsajaflk [message] => jlkjlkjjkljkfakljfasjklfadsjklfakjsafkjfdajkkjfds )
        $data =array(
            'amname' => $this->input->post('name'),
            'amemail' => $this->input->post('email'),
            'amsubject' => $this->input->post('subject'),
            'ammsg' => $this->input->post('message'),
            'amstatus' => 1,
            'amcreated' => date('Y-m-d')
        );
        return $this->db->insert('amessage_tbl',$data);
    }
    public function countnum(){
        return $this->db->count_all('amessage_tbl')-count($this->db->get_where('amessage_tbl',array('amstatus'=>0))->result_array());
    } 
    public function view($mid=FALSE,$limit=FALSE,$indexno=FALSE){
        $type=$this->session->userdata('type');
        if($type=='Admin'){
            if($limit){
                $this->db->limit($limit,$indexno);
            }
            if($mid===FALSE){
                $query = $this->db->get_where('amessage_tbl',array('amstatus'=>1));
                return $query->result_array();
            }

            $query = $this->db->get_where('amessage_tbl',array('amid'=>$mid));
            return $query->row_array();
        }
    }

}
