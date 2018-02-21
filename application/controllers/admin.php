<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Admin extends CI_Controller {
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
                        'type'=>'Admin'
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

        }
        public function logout(){
            if(!$this->session->userdata('logged_in')){
                redirect('login');
            }
            $this->session->unset_userdata('cid');
            $this->session->unset_userdata('cname');
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('type');
            $this->session->set_flashdata('user_loggedout','You are now logged out');

                    redirect();
        }
}