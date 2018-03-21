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
    public function getPassUsingId($cid){
           $this->db->where('cid',$cid);
       // $query=$this->db->get_where('company_tbl',array('cemail'=>$lemail,'cpass'=>$epass));
            $result=$this->db->get('company_tbl');
            if($result->num_rows()>0){
                return $result->row(0)->cpass;
            }
                return false;
    }
        public function getpass($lemail){
           $this->db->where('cemail',$lemail);
       // $query=$this->db->get_where('company_tbl',array('cemail'=>$lemail,'cpass'=>$epass));
            $result=$this->db->get('company_tbl');
            if($result->num_rows()>0){
                return $result->row(0)->cpass;
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
                'ccreated'=>$result->row(0)->ccreated,
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
    public function viewweb($curl=FALSE){
        if($curl===FALSE){
            return false;
        }
        $query = $this->db->get_where('company_tbl',array('curl'=>$curl,'cstatus'=>1))->row_array();

        date_default_timezone_set("Asia/Manila"); 
        $thiday=strtotime($query['ccreated'].'+ 30 days');
        $numdays= ($thiday-time());
        $numdays=round($numdays/(60*60*24));
        if($numdays<=0){
          return false;
        }
        return $query;
    }

    public function viewser($cid=FALSE,$sid=FALSE){
        if($sid===FALSE){
            $query = $this->db->get_where('service_tbl',array('cid'=>$cid,'sstatus'=>1));
            //print_r($query->result_array());
            //exit();
            return $query->result_array();
        }

        $query = $this->db->get_where('service_tbl',array('sid'=>$sid,'cid'=>$cid,'sstatus'=>1));
        return $query->row_array();
    }
    public function delete($cid){
        $data =array(
            'cstatus' => 0
        );
        $this->db->where('cid',$this->input->post('cid'));
        return $this->db->update('company_tbl',$data);
    }
    public function add($epass/*,$clogo*/){
        //Array ( [cname] => fdjkhsafkjh [cemail] => kjhaskjdfhkash@hkjhkj [rpassword] => 123 [rcpassword] => 123 [rwelcome] => dsklfkjalk [rabout] => klajfjals [rurl] => sdjfafkdsjafalka [raddre] => 232 [rphone] => 2323223 )

        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cname' => $this->input->post('cname'),
            'cemail' => $this->input->post('cemail'),/*
            'cwelcome' => $this->input->post('rwelcome'),
            'cabout' => $this->input->post('rabout'),
            'curl' => $this->input->post('rurl').'.com',
            'ccontact' => $this->input->post('rphone'),
            'caddress' => $this->input->post('raddre'),
            'clogo'=>$clogo,*/
            'ccreated' => date('Y-m-d'),
            'cmodified' => date('Y-m-d'),
            'cstatus' => 1,
            'cpass' => $epass
        );
        return $this->db->insert('company_tbl',$data);
    }
    public function update(){
        date_default_timezone_set("Asia/Manila"); 
        $data =array(
            'cname' => $this->input->post('cname'),
            'cmodified' => date('Y-m-d'),
            'cemail' => $this->input->post('cemail')
        );
        $this->db->where('cid',$this->input->post('cid'));
        return $this->db->update('company_tbl',$data);
    }
    public function updatePass(){
        $data =array(
            'cpass' => md5($this->input->post('cnpass'))
        );
        $this->db->where('cid',$this->session->userdata('cid'));
        return $this->db->update('company_tbl',$data);
    }
    public function updateweb(){
        $data =array(
            'cwelcome'=>$this->input->post('cwelcome'),
            'ccontact'=>$this->input->post('ccontact'),
            'caddress'=>$this->input->post('caddress'),
            'cabout'=>$this->input->post('cabout'),
            'ctemplate'=>$this->input->post('ctemplate'),
            'curl'=>$this->input->post('curl').'.com'
        );
        $this->db->where('cid',$this->session->userdata('cid'));
        return $this->db->update('company_tbl',$data);
    }

    public function countnum(){
        //$this->db->where('cid',$this->session->userdata('cid'));
        //$c=$this->db->count_all('cmessage_tbl');
        $this->db->where('cstatus',1);
        $query=$this->db->get('company_tbl');
        return count($query->result_array());
    } 
}
