<?php
class Company extends CI_Controller {
    public function isLoggedIn(){
        if($this->input->is_ajax_request()){
            echo $this->session->userdata('logged_in');
            //echo json_encode(array('logged_in'=>$this->session->userdata('logged_in')));
            exit();
        }
        else
            redirect();
    }
    public function register(){
        if($this->session->userdata('logged_in')){
            redirect();
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
        }else{/*
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
            }
            else{
                $data=array('upsload_data'=> $this->upload->data());
                $clogo=$_FILES['userfile']['name'];
                //echo $clogo.' uploaded';
            }*/
            //exit();
            //encrypt password
            $epass=md5($this->input->post('rpassword'));
            $this->company_model->add($epass/*,$clogo*/);
            //set message
            $this->session->set_flashdata('user_registered','You are now registered and can log in');
            redirect('dashboard');
        }

    }

    public function checkcompany(){
        if($this->input->is_ajax_request()){
            $data=array(
                'cname'=>'',
                'cemail'=>'',
                'cpass'=>'',
                'ccpass'=>'',
                'clogo'=>'',
                'lpass'=>'',
                'lemail'=>'',
                'cwelcome'=>'',
                'cabout'=>'',
                'curl'=>'',
                'error'=>''
            );
            
            //--------------
            if($this->input->post('lemail')==''){
                $data['lemail']='Company email field is required';
            }
            else if($this->check_cemail_exists($this->input->post('lemail'))){
                $data['lemail']='1';
            }
            //---------
            $epass=md5($this->input->post('lpass'));
            $lemail=$this->input->post('lemail');
            $comdata=$this->company_model->getpass($lemail);
            //echo $comdata;
            $data['error']=$comdata;
            if($this->input->post('lpass')==''){
                $data['lpass']='Password field is required';
            }
            else if($comdata!=$epass){
                $data['lpass']='1';   
            }
            //cname validation
            if($this->input->post('cname')==''){
                $data['cname']='Company name field is required';
            }
            else if(!$this->check_cname_exists($this->input->post('cname'))){
                $data['cname']='Company name already taken';
            }
            //cname validation
            if($this->input->post('cemail')==''){
                $data['cemail']='Company email field is required';
            }
            else if(!$this->check_cemail_exists($this->input->post('cemail'))){
                $data['cemail']='Company email already taken';
            }
            else if(!strpos($this->input->post('cemail'),'@')){
                $data['cemail']='Company email is missing "@"';
            }
            else if((strpos($this->input->post('cemail'),'@')==strlen($this->input->post('cemail'))-1)){
                $data['cemail']='Part following "@" is missing';
            }
            //cname validation
            if($this->input->post('cpass')==''){
                $data['cpass']='Password field is required';
            }
            if($this->input->post('ccpass')==''){
                $data['ccpass']='Confirm Password field is required';
            }
            else if($this->input->post('ccpass')!=$this->input->post('cpass')){

                $data['ccpass']='Password Mismatch';
            }
            if($this->input->post('clogo')==''){
                $data['clogo']='Company logo is required';
            }
            if($this->input->post('cwelcome')==''){
                $data['cwelcome']='Welcome Message field is required';
            }
            if($this->input->post('cabout')==''){
                $data['cabout']='This field is required';
            }
            if($this->input->post('curl')==''){
                $data['curl']='Company url is required';
            }
            else if($this->company_model->viewweb($this->input->post('curl').'.com')){
                $data['curl']='Company Url already taken';
            }
            //$data['cemail']=$this->check_cemail_exists($this->input->post('cemail'));
            echo json_encode($data);
        }
        else{
            redirect();
        }
        //echo json_encode($this->input->post());
    }

    public function checkPass(){
        if($this->input->is_ajax_request()){
            $data=array(
                'cpass'=>'',
                'cnpass'=>'',
                'ccpass'=>''
            );
            $cid=$this->input->post('cid');
            $cpass=$this->input->post('cpass');
            $cnpass=$this->input->post('cnpass');
            $ccpass=$this->input->post('ccpass');
            $epass=md5($cpass);
            if($cnpass==''){
                $data['cnpass']='New Password is required';
            }
            if($ccpass==''){
                $data['ccpass']='Confirm Password is required';
            }
            else if($ccpass!=$cnpass){
                $data['ccpass']='Password Mismatch';   
            }
            if($cpass==''){
                $data['cpass']='Current Password is required';
            }
            else if($epass!=$this->company_model->getPassUsingId($cid)){
                $data['cpass']='Invalid Password';
            }
            //$data['cemail']=$this->check_cemail_exists($this->input->post('cemail'));
            echo json_encode($data);
        }
        else{
            redirect();
        }
        //echo json_encode($this->input->post());
    }
	public function delete(){
        if(empty($_POST)){
            redirect();
        }
		$this->company_model->delete($this->input->post('cid'));
		redirect($this->input->post('comp'));
	}
    public function update(){
        if(empty($_POST)){
            redirect();
        }
        $this->session->set_userdata('cname',$this->input->post('cname'));
        $this->company_model->update();
        $_POST=null;
        redirect('dashboard');
    }
    public function updatePass(){
        if(empty($_POST)){
            redirect();
        }
        $this->company_model->updatePass();
        $_POST=null;
        redirect('dashboard');
    }
    public function updateweb(){
        if(empty($_POST)){
            redirect();
        }
        $this->company_model->updateweb();
        $_POST=null;
        redirect('dashboard');
    }
	public function add(){
            //encrypt password
        
        if(empty($_POST)){
            redirect();
        }
                $epass=md5('123456');
                $this->company_model->add($epass,$this->input->post('clogo'));
                //set message
                $this->session->set_flashdata('company_added','Company has been added.');
                redirect('dashboard/company');
	}
    public function check_cname_exists($cname=FALSE){
        if($cname==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_cname_exists','Company name already taken.');
        if($this->company_model->check_cname_exists($cname)){
            return true;
        }
        return false;
    }
    public function check_cemail_exists($cemail=FALSE){
        if($cemail==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_cemail_exists','Email already taken.');
        if($this->company_model->check_cemail_exists($cemail)){
            return true;
        }
        return false;
    }
}
