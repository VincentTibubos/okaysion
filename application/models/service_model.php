<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Service_model extends CI_Model{
    public function check_sname_exists($sname){
        $query=$this->db->get_where('service_tbl',array('sname'=>$sname,'cid'=>$this->session->userdata('cid')));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_sdescription_exists($sdescription){
        $query=$this->db->get_where('service_tbl',array('sdescription'=>$sdescription,'cid'=>$this->session->userdata('cid')));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function viewser($sid=FALSE){
        if($sid===FALSE){
            $query = $this->db->get_where('service_tbl',array('cid'=>$this->session->userdata('cid'),'sstatus'=>1));
            //print_r($query->result_array());
            //exit();
            return $query->result_array();
        }

        $query = $this->db->get_where('service_tbl',array('sid'=>$sid,'cid'=>$this->session->userdata('cid'),'sstatus'=>1));
        return $query->row_array();
    }
    public function delete($sid){
        $data =array(
            'sstatus' => 0
        );
        $this->db->where('sid',$this->input->post('sid'));
        return $this->db->update('service_tbl',$data);
    }
    public function add(){
        $data =array(
            'cid' => $this->session->userdata('cid'),
            'sname' => $this->input->post('sname'),
            'svenue' => $this->input->post('svenue'),
            'sprice' => $this->input->post('sprice'),
            'screated' => date('Y-m-d'),
            'sstatus' => 1,
            'smodified' => date('Y-m-d'),
            'sdescription' => $this->input->post('sdescription')
            //date('Y-m-d')
        );
        return $this->db->insert('service_tbl',$data);
    }
    public function update(){
        $data =array(
            'sname' => $this->input->post('sname'),
            'svenue' => $this->input->post('svenue'),
            'sprice' => $this->input->post('sprice'),
            'sdescription' => $this->input->post('sdescription'),
            'smodified' => date('Y-m-d'),
        );
        $this->db->where('sid',$this->input->post('sid'));
        return $this->db->update('service_tbl',$data);
    }
}
