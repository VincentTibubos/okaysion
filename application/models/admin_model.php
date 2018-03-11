<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
    public function check_cname_exists($cname){
        $query=$this->db->get_where('admin_tbl',array('auser'=>$cname));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_auser_exists($auser){
        $query=$this->db->get_where('admin_tbl',array('auser'=>$auser));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function getpass($lemail){
           $this->db->where('auser',$lemail);
       // $query=$this->db->get_where('company_tbl',array('auser'=>$lemail,'cpass'=>$epass));
            $result=$this->db->get('admin_tbl');
            if($result->num_rows()>0){
                return $result->row(0)->apass;
            }
                return false;
        }
    public function login($auser,$epass){
   //     print_r($_POST);
     //  echo 'wew '.$lemail." ".$epass;
       // exit();
        $this->db->where('auser',$auser);
        $this->db->where('apass',$epass);

       // $query=$this->db->get_where('company_tbl',array('auser'=>$lemail,'cpass'=>$epass));
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
}
