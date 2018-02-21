<?php
class Company extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}public function view($page='home')
	{
	//	echo $_SERVER['HTTP_HOST'];
	//	die();
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}

	public function delete(){
		$this->company_model->delete($this->input->post('cid'));
		redirect($this->input->post('comp'));
	}
	public function update(){
        $this->company_model->update();
        redirect('dashboard/company');
	}
	public function add(){
            //callback_ is use before the method specified for custom validation
            $this->form_validation->set_rules('cname','Name','required|callback_check_cname_exists');
            $this->form_validation->set_rules('cemail','Email','required|callback_check_cemail_exists');
           
            if($this->form_validation->run()===FALSE){
               //print_r(form_error('rcname'));
               // print_r(form_error('remail'));
               // print_r(form_error('rpassword'));
               // print_r(form_error('rcpassword'));
               // exit();

                $this->load->view('dashboard/company');
            }else{//encrypt password

                $epass=md5('12345');
                $this->company_model->add($epass);
                //set message
                $this->session->set_flashdata('company_added','Company has been added.');
                redirect('dashboard/company');
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
}
