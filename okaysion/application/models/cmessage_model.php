<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cmessage_model extends CI_Model{

    public function delete($cmid){
        $data =array(
            'cmstatus' => 0
        );
        $this->db->where('cmid',$cmid);
        return $this->db->update('cmessage_tbl',$data);
    }
    public function send(){
        //Array ( [name] => hdkjdlkjfdkjlafjkl [email] => jklasjlfsdjlfdjslskdfj@jkljlk.jdskljlk [subject] => jdflkdfsajaflk [message] => jlkjlkjjkljkfakljfasjklfadsjklfakjsafkjfdajkkjfds )
        $data =array(
            'cmname' => $this->input->post('name'),
            'cmemail' => $this->input->post('email'),
            'cmsubject' => $this->input->post('subject'),
            'cmmsg' => $this->input->post('message'),
            'cmstatus' => 1,
            'cmcreated' => date('Y-m-d')
        );
        return $this->db->insert('cmessage_tbl',$data);
    }
    public function countnum(){
        return $this->db->count_all('cmessage_tbl')-count($this->db->get_where('cmessage_tbl',array('cmstatus'=>0))->result_array());
    }
    public function view($mid=FALSE,$limit=FALSE,$indexno=FALSE){
        $type=$this->session->userdata('type');
        if($type=='Company'){
            if($limit){
                $this->db->limit($limit,$indexno);
            }
            if($mid===FALSE){
                $this->db->order_by('cmid','DESC');
                $query = $this->db->get_where('cmessage_tbl',array('cmstatus'=>1));
                return $query->result_array();
            }

            $query = $this->db->get_where('cmessage_tbl',array('cmid'=>$mid));
            return $query->row_array();
        }
    }

}
