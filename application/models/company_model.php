<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Company_model extends CI_Model{
    public function check_cname_exists($cname){
        $query=$this->db->get_where('company_tbl',array('cname'=>$cname));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_cemail_exists($cemail){
        $query=$this->db->get_where('company_tbl',array('cemail'=>$cemail));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    //login
    public function login($lemail,$epass){
   //     print_r($_POST);
     //  echo 'wew '.$lemail." ".$epass;
       // exit();
        $this->db->where('cemail',$lemail);
        $this->db->where('cpass',$epass);

       // $query=$this->db->get_where('company_tbl',array('cemail'=>$lemail,'cpass'=>$epass));
        $result=$this->db->get('company_tbl');
       // echo $result->num_rows();
     //   exit();
        $id=null;
        if($result->num_rows()>0){
            $comdata=array(
                'clogo'=>$result->row(0)->clogo,
                'cid'=>$result->row(0)->cid,
                'cname'=>$result->row(0)->cname,
                'checker'=>true
            );
            return $comdata;
        }
            $comdata=array(
                'checker'=>false
            );
            return $comdata;
    }
    public function viewcomp($cid=FALSE){
        if($cid===FALSE){
            $query = $this->db->get_where('company_tbl',array('cstatus'=>1));
            return $query->result_array();
        }
        $query = $this->db->get_where('company_tbl',array('cid'=>$cid,'cstatus'=>1));
        return $query->row_array();
    }
    public function delete($cid){
        $data =array(
            'cstatus' => 0
        );
        $this->db->where('cid',$this->input->post('cid'));
        return $this->db->update('company_tbl',$data);
    }
    public function add($epass,$clogo){
        $data =array(
            'cname' => $this->input->post('cname'),
            'cemail' => $this->input->post('cemail'),
            'ccreated' => date('Y-m-d'),
            'cmodified' => date('Y-m-d'),
            'cstatus' => 1,
            'cpass' => $epass,
            'clogo'=>$clogo
        );
        return $this->db->insert('company_tbl',$data);
    }
    public function update(){
        $data =array(
            'cname' => $this->input->post('cname'),
            'cmodified' => date('Y-m-d'),
            'cemail' => $this->input->post('cemail')
        );
        $this->db->where('cid',$this->input->post('cid'));
        return $this->db->update('company_tbl',$data);
    }
}
