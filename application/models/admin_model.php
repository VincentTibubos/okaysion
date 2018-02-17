<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
    public function login($auser,$epass){
   //     print_r($_POST);
     //  echo 'wew '.$lemail." ".$epass;
       // exit();
        $this->db->where('auser',$auser);
        $this->db->where('apass',$epass);

       // $query=$this->db->get_where('company_tbl',array('cemail'=>$lemail,'cpass'=>$epass));
        $result=$this->db->get('admin_tbl');
       // echo $result->num_rows();
     //   exit();
        $id=null;
        if($result->num_rows()>0){
            $comdata=array(
                'aid'=>$result->row(0)->aid,
                'auser'=>$result->row(0)->auser,
                'checker'=>true
            );
            return $comdata;
        }
            $comdata=array(
                'checker'=>false
            );
            return $comdata;
    }
    public function viewcomp($cname=FALSE){
        if($cname===FALSE){
            $query=$this->db->get('company_tbl');
            return $query->result_array();
        }
            $query=$this->db->get_where('company_tbl', array('cname'=>$cname));
            return $query->row_array();
    }
}
