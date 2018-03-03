<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
        public function register(){
            if($this->session->userdata('logged_in')){
                redirect();
            }
            if(!empty($_POST)){
                //print_r($_POST);
                //exit();
            }
            //callback_ is use before the method specified for custom validation
            $this->form_validation->set_rules('cname','Name','required|callback_check_cname_exists');
            $this->form_validation->set_rules('cemail','Email','required|callback_check_cemail_exists');
            $this->form_validation->set_rules('rpassword','Password','required');
            $this->form_validation->set_rules('rcpassword','Confirm Password','matches[rpassword]');
            if($this->form_validation->run()===FALSE){
               //print_r(form_error('rcname'));
               // print_r(form_error('remail'));
               // print_r(form_error('rpassword'));

                $this->load->view('dashboard/register');

            }else{
                $config['upload_path']='./assets/img/logo';
                $config['allowed_types']='gif|jpg|jpeg|png';
                $config['max_size']='2048';
                $config['max_width']='2048';
                $config['max_height']='2048';
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload()){
                    $errors=array('errors'=> $this->upload->display_errors());
                    $clogo='avatar1.jpg';
                    //echo $clogo.' failed ';
                    //print_r($errors);
                    //exit();
                }
                else{
                    $data=array('upsload_data'=> $this->upload->data());
                    $clogo=$_FILES['userfile']['name'];
                    //echo $clogo.' uploaded';
                    //exit();
                }
                //exit();
                //encrypt password
                //print_r($_POST);
                //exit();
                $epass=md5($this->input->post('rpassword'));
                $this->company_model->add($epass,$clogo);
                //set message
                $this->session->set_flashdata('user_registered','You are now registered and can log in');
                redirect('login');
            }

        }
        public function check_cname_exists($cname){
            $this->form_validation->set_message('check_cname_exists','Company name already taken.');
            if($this->company_model->check_cname_exists($cname)){
                return true;
            }
            return false;
        }
        public function check_cemail_exists($cemail){
            $this->form_validation->set_message('check_cemail_exists','Email already taken.');
            if($this->company_model->check_cemail_exists($cemail)){
                return true;
            }
            return false;
        }
    //login
        public function login(){
            if($this->input->is_ajax_request()){
                    $lemail=$this->input->post('lemail');
                    $epass=md5($this->input->post('lpassword'));

                    //login id
                    $comdata=$this->company_model->login($lemail,$epass);
                    if($comdata['checker']){
                        //c means company
                        $userdata=array(
                            'cid'=>$comdata['cid'],
                            'cname'=>$comdata['cname'],
                            'clogo'=>$comdata['clogo'],
                            'logged_in'=>true,
                            'type'=>'Company'
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
                    $this->load->view('dashboard/login');
                }else{
                    $lemail=$this->input->post('lemail');
                    $epass=md5($this->input->post('lpassword'));

                    //login id
                    $comdata=$this->company_model->login($lemail,$epass);
                    if($comdata['checker']){
                        //c means company

                        $userdata=array(
                            'cid'=>$comdata['cid'],
                            'cname'=>$comdata['cname'],
                            'clogo'=>$comdata['clogo'],
                            'logged_in'=>true,
                            'type'=>'Company'
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

        }
        public function logout(){
            if(!$this->session->userdata('logged_in')){
                redirect('login');
            }
            $this->session->unset_userdata('cid');
            $this->session->unset_userdata('clogo');
            $this->session->unset_userdata('cname');
            $this->session->unset_userdata('type');
            $this->session->unset_userdata('logged_in');
            $this->session->set_flashdata('user_loggedout','You are now logged out');

                    redirect();
        }
}