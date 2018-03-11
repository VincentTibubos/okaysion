<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Admin extends CI_Controller {
    public function checkadmin(){
        if($this->input->is_ajax_request()){
            $data=array(
                'lpass'=>'',
                'lemail'=>''
            );
            //--------------
            if($this->input->post('lemail')==''){
                $data['lemail']='Input field is required';
            }
            else if($this->check_auser_exists($this->input->post('lemail'))){
                $data['lemail']='1';
            }
            //---------
            $epass=md5($this->input->post('lpass'));
            $lemail=$this->input->post('lemail');
            $comdata=$this->admin_model->getpass($lemail);

            if($this->input->post('lpass')==''){
                $data['lpass']='Password field is required';
            }
            else if($comdata!=$epass){
                $data['lpass']='1';   
            }
            
            //$data['auser']=$this->check_auser_exists($this->input->post('auser'));
            echo json_encode($data);
        }
        else{
            show_404();
        }
        //echo json_encode($this->input->post());
    }

    public function check_cname_exists($cname=FALSE){
        if($cname===FALSE){
            show_404();
        }
        $this->form_validation->set_message('check_cname_exists','Company name already taken.');
        if($this->admin_model->check_cname_exists($cname)){
            return true;
        }
        return false;
    }
    public function check_auser_exists($auser=FALSE){
        if($auser===FALSE){
             show_404();
        }
        if($this->admin_model->check_auser_exists($auser)){
            return true;
        }
        return false;
    }

    public function login(){
            if($this->input->is_ajax_request()){
                    $lemail=$this->input->post('lemail');
                    $epass=md5($this->input->post('lpassword'));

                    //login id
                    $comdata=$this->admin_model->login($lemail,$epass);
                    if($comdata['checker']){
                        //c means company
                        $userdata=array(
                            'cid'=>$comdata['aid'],
                            'cname'=>$comdata['auser'],
                            //'clogo'=>'avatar1.jpg',
                            'logged_in'=>true,
                            'type'=>'Admin'
                        );
                        $this->session->set_userdata($userdata);
                        $this->session->set_flashdata('user_loggedin','You are now logged in');
                    }
                    else
                     echo 'false';   
                
            }
            else{
                if($this->session->userdata('logged_in')){
                    redirect();
                }
                //callback_ is use before the method specified for custom validation
                $this->form_validation->set_rules('lemail','Email','required');
                $this->form_validation->set_rules('lpassword','Password','required');

                if($this->form_validation->run()===FALSE){
                    $this->load->view('admin/login');
                }else{
                redirect();
                    $lemail=$this->input->post('lemail');
                    $epass=md5($this->input->post('lpassword'));

                    //login id
                    $comdata=$this->admin_model->login($lemail,$epass);
                    if($comdata['checker']){
                        //c means company

                        $userdata=array(
                            'cid'=>$comdata['aid'],
                            'cname'=>$comdata['auser'],
                            'clogo'=>'avatar1.jpg',
                            'logged_in'=>true,
                            'type'=>'Admin'
                        );
                        $this->session->set_userdata($userdata);
                        $this->session->set_flashdata('user_loggedin','You are now logged in');
                        redirect('dashboard');
                    }
                    else{
                        $this->session->set_flashdata('login_failed','Login is Invalid');
                        redirect('login');
                    }
                }
            }

        }/*
        public function login(){
            if($this->session->userdata('logged_in')){
                redirect();
            }
            //callback_ is use before the method specified for custom validation
            $this->form_validation->set_rules('auser','Username','required');
            $this->form_validation->set_rules('apass','Password','required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('admin/login');
            }
            else{
                $auser=$this->input->post('auser');
                $epass=md5($this->input->post('apass'));

                //login id
                $admindata=$this->admin_model->login($auser,$epass);

                if($admindata['checker']){
                    //c means company
                    $userdata=array(
                        'cid'=>$admindata['aid'],
                        'cname'=>$admindata['auser'],
                        'logged_in'=>true,
                        'type'=>'Admin',
                        'clogo'=>'avatar1.jpg'
                    );
                    $this->session->set_userdata($userdata);
                    $this->session->set_flashdata('user_loggedin','You are now logged in');
                    redirect('dashboard');
                }
                else{
                    $this->session->set_flashdata('login_failed','Login is Invalid');
                    redirect('admin');
                }
            }

        }*/
        public function logout(){
            if(!$this->session->userdata('logged_in')){
                redirect('login');
            }
            $this->session->unset_userdata('cid');
            $this->session->unset_userdata('cname');
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('type');
            $this->session->unset_userdata('clogo');
            $this->session->set_flashdata('user_loggedout','You are now logged out');

                    redirect();
        }
}