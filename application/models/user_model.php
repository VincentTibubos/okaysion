<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    public function register($epass){
        $data = array(
            'cname' => $this->input->post('rcname'),
            'cemail' => $this->input->post('remail'),
            'cpass' => $epass
        );
        return $this->db->insert('company_tbl',$data);
    }
    public function check_cname_exists($cname){
        $query=$this->db->get_where('company_tbl',array('cname'=>$cname));
        if(empty($query->row_array())){
            return true;
        }
        return false;
    }
    public function check_remail_exists($remail){
        $query=$this->db->get_where('company_tbl',array('cemail'=>$remail));
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
            return true;
        }
        return false;

    }
}
