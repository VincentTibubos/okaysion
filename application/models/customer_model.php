<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_model extends CI_Model{
    public function check_cuname_exists($cuname){
        $query=$this->db->get_where('customer_tbl',array('cuname'=>$cuname,'cid'=>$this->session->userdata('cid')));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_cuemail_exists($cuemail){
        $query=$this->db->get_where('customer_tbl',array('cuemail'=>$cuemail,'cid'=>$this->session->userdata('cid')));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function viewcus($cuid=FALSE){
        if($cuid===FALSE){
            $query = $this->db->get_where('customer_tbl',array('cid'=>$this->session->userdata('cid'),'custatus'=>1));
           // print_r($query->result_array());
            //exit();
            return $query->result_array();
        }

        $query = $this->db->get_where('customer_tbl',array('cuid'=>$cuid,'cid'=>$this->session->userdata('cid'),'custatus'=>1));
        return $query->row_array();
    }
    public function delete($cuid){
        $data =array(
            'custatus' => 0
        );
        $this->db->where('cuid',$this->input->post('cuid'));
        return $this->db->update('customer_tbl',$data);
    }
    public function add(){
        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cid' => $this->session->userdata('cid'),
            'cuname' => $this->input->post('cuname'),
            'cucreated' => date('Y-m-d'),
            'cumodified' => date('Y-m-d'),
            'custatus' => 1,
            'cuemail' => $this->input->post('cuemail')
        );
        return $this->db->insert('customer_tbl',$data);
    }
    public function update(){
        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cuname' => $this->input->post('cuname'),
            'cumodified' => date('Y-m-d'),
            'cuemail' => $this->input->post('cuemail')
        );
        $this->db->where('cuid',$this->input->post('cuid'));
        return $this->db->update('customer_tbl',$data);
    }
    public function countnum(){
        //$this->db->where('cid',$this->session->userdata('cid'));
        //$c=$this->db->count_all('cmessage_tbl');
        $this->db->where('custatus',1);
        $this->db->where('cid',$this->session->userdata('cid'));
        $query=$this->db->get('customer_tbl');
        return count($query->result_array());
    } 
}
