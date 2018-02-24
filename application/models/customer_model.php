<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_model extends CI_Model{
    public function check_cuname_exists($cuname){
        $query=$this->db->get_where('customer_tbl',array('cuname'=>$cuname));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_cuemail_exists($cuemail){
        $query=$this->db->get_where('customer_tbl',array('cuemail'=>$cuemail));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function viewcus($cuid=FALSE){
        if($cuid===FALSE){
            $query=$this->db->get('customer_tbl');
            return $query->result_array();
        }
        $query = $this->db->get_where('customer_tbl',array('cuid'=>$cuid));
        return $query->row_array();
    }
    public function delete($cuid){
        $this->db->where('cuid',$cuid);
        $this->db->delete('customer_tbl');
        return true;
    }
    public function add(){
        $data =array(
            'cuname' => $this->input->post('cuname'),
            'cuemail' => $this->input->post('cuemail')
        );
        return $this->db->insert('customer_tbl',$data);
    }
    public function update(){
        $data =array(
            'cuname' => $this->input->post('cuname'),
            'cuemail' => $this->input->post('cuemail')
        );
        $this->db->where('cuid',$this->input->post('cuid'));
        return $this->db->update('customer_tbl',$data);
    }
}
