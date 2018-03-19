<?php
class Customer extends CI_Controller {

	public function delete(){
        if(empty($_POST)){
            redirect();
        }
		$this->customer_model->delete($this->input->post('cuid'));
        redirect('dashboard/customer');
	}
	public function update(){
        if(empty($_POST)){
            redirect();
        }
        $this->customer_model->update();
        redirect('dashboard/customer');
	}
    public function register(){
        if(empty($_POST)){
            redirect();
        }
        else if($this->customer_model->register()){
            $cid=$this->input->post('cid');
            $login=$this->customer_model->findemail($cid,$this->input->post('email'));
            $userdata=array(
                $cid.'cuname'=>$this->input->post('name'),
                $cid.'cuemail'=>$this->input->post('email'),

                $cid.'cuid'=>$login['cuid'],
                //'clogo'=>$comdata['clogo'],
                $cid.'logged_in'=>true
            );
            $this->session->set_userdata($userdata);
            redirect($this->input->post('curl'));
        }
    }
    public function login(){
        if(empty($_POST)){
            redirect();
        }
        else{
            $cid=$this->input->post('cid');
            $login=$this->customer_model->findemail($cid,$this->input->post('email'));
            $userdata=array(
                $cid.'cuname'=>$login['cuname'],
                $cid.'cuemail'=>$login['cuemail'],
                $cid.'cuid'=>$login['cuid'],
                //'clogo'=>$comdata['clogo'],
                $cid.'logged_in'=>true
            );
            $this->session->set_userdata($userdata);
            redirect($this->input->post('curl'));
        }
    }
    public function logout(){
        if(empty($_POST)){
            redirect();
        }
        else{
            $cid=$this->input->post('cid');
            $this->session->unset_userdata($cid.'cuname');
            $this->session->unset_userdata($cid.'cuemail');
            $this->session->unset_userdata($cid.'logged_in');
            $this->session->unset_userdata($cid.'cuid');
            redirect($this->input->post('curl'));
        }
    }
    public function check(){
        if(!$this->input->is_ajax_request()){
            redirect();
        }
        $data=array(
            'cuname'=>'',
            'cuemail'=>'',
            'cupass'=>'',
            'cucpass'=>'',
            'login'=>'',
            'lemail'=>'',
            'lpass'=>''
        );
        $cuname=$this->input->post('name');
        $cuemail=$this->input->post('email');
        $cupass=$this->input->post('password');
        $cucpass=$this->input->post('cpassword');
        $cid=$this->input->post('cid');

        $lemail=$this->input->post('lemail');
        $lpass=$this->input->post('lpassword');
        if($lemail==''){
            $data['lemail']='Email field is required';
        }

        if(!$this->customer_model->findemail($cid,$lemail)){
            $data['login']='Invalid email or password';
        }
        else if(!$this->customer_model->findpass($cid,$lemail,$lpass)){
            $data['login']='Invalid email or password';
        }

        if($lpass==''){
            $data['lpass']='Password field is required';
        }
        else if(strlen($lpass)<6){
            $data['lpass']='Minimum of 6 characters';
        }
        if($cuname==''){
            $data['cuname']='Name field is required';
        }
        else if($this->customer_model->findname($cid,$cuname)){
            $data['cuname']='Name already taken';
        }
        if($cuemail==''){
            $data['cuemail']='Email field is required';
        }
        else if($this->customer_model->findemail($cid,$cuemail)){
            $data['cuemail']='Email already taken';
        }
        if($cupass==''){
            $data['cupass']='Password field is required';
        }
        else if(strlen($cupass)<6){
            $data['cupass']='Minimum of 6 characters';
        }
        if($cucpass==''){
            $data['cucpass']='Confirm Password field is required';
        }
        else if($cupass!=$cucpass){
            $data['cucpass']='Password Mismatch';

        }
        echo json_encode($data);
    }
	public function add(){
            //callback_ is use before the method specified for custom validation
            $this->form_validation->set_rules('cuname','Name','required|callback_check_cuname_exists');
            $this->form_validation->set_rules('cuemail','Email','required|callback_check_cuemail_exists');
           
            if($this->form_validation->run()===FALSE){
               //print_r(form_error('rcuname'));
               // print_r(form_error('remail'));
               // print_r(form_error('rpassword'));
               // print_r(form_error('rcpassword'));
               // exit();
                redirect('dashboard/customer');
            }else{//encrypt password

                    if(empty($_POST)){
                        redirect();
                    }
                $this->customer_model->add();
                //set message
                $this->session->set_flashdata('customer_added','customer has been added.');
                redirect('dashboard/customer');
            }
	}
    public function check_cuname_exists($cuname=FALSE){
        if($cuname==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_cuname_exists','customer name already taken.');
        if($this->customer_model->check_cuname_exists($cuname)){
            return true;
        }
        return false;
    }
    public function check_cuemail_exists($cuemail=FALSE){
        if($cuemail==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_cuemail_exists','Email already taken.');
        if($this->customer_model->check_cuemail_exists($cuemail)){
            return true;
        }
        return false;
    }
}
