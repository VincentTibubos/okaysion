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
        $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cid' => $this->session->userdata('cid'),
            'sname' => $this->input->post('sname'),
            'simage' => $file,
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
        date_default_timezone_set("Asia/Manila"); 
        if(!empty($_FILES['image'])){
            $file= base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
            $data =array(
                'sname' => $this->input->post('sname'),
                'svenue' => $this->input->post('svenue'),
                'simage' => $file,
                'sprice' => $this->input->post('sprice'),
                'sdescription' => $this->input->post('sdescription'),
                'smodified' => date('Y-m-d'),
            );
        }
        else{
            $data =array(
                'sname' => $this->input->post('sname'),
                'svenue' => $this->input->post('svenue'),
                'sprice' => $this->input->post('sprice'),
                'sdescription' => $this->input->post('sdescription'),
                'smodified' => date('Y-m-d'),
            );
        }
        $this->db->where('sid',$this->input->post('sid'));
        return $this->db->update('service_tbl',$data);
    }

    public function countnum(){
        //$this->db->where('cid',$this->session->userdata('cid'));
        //$c=$this->db->count_all('cmessage_tbl');
        $this->db->where('sstatus',1);
        $this->db->where('cid',$this->session->userdata('cid'));
        $query=$this->db->get('service_tbl');
        return count($query->result_array());
    } 
}
