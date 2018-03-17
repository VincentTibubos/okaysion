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
        
        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cmname' => $this->input->post('name'),
            'cmemail' => $this->input->post('email'),
            'cmmsg' => $this->input->post('message'),
            'cmstatus' => 1,
            'cmcreated' => date('Y-m-d'),
            'cid' => $this->input->post('cid')
        );
        return $this->db->insert('cmessage_tbl',$data);
    }
    public function countnum(){
        //$this->db->where('cid',$this->session->userdata('cid'));
        //$c=$this->db->count_all('cmessage_tbl');
        $this->db->where('cmstatus',1);
        $this->db->where('cid',$this->session->userdata('cid'));
        $query=$this->db->get('cmessage_tbl');
        return count($query->result_array());
    } 
    public function view($mid=FALSE,$limit=FALSE,$indexno=FALSE){
        $type=$this->session->userdata('type');
        if($type=='Company'){
            if($limit){
                $this->db->limit($limit,$indexno);
            }
            if($mid===FALSE){
                $this->db->order_by('cmid','DESC');
                $query = $this->db->get_where('cmessage_tbl',array('cmstatus'=>1,'cid'=>$this->session->userdata('cid')));
                return $query->result_array();
            }

            $query = $this->db->get_where('cmessage_tbl',array('cmid'=>$mid));
            return $query->row_array();
        }
    }

}
