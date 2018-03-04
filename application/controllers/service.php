<?php
class Service extends CI_Controller {

	public function delete(){
		$this->service_model->delete($this->input->post('sid'));
        redirect('dashboard/service');
	}
	public function update(){
        $this->service_model->update();
        redirect('dashboard/service');
	}
	public function add(){
            //callback_ is use before the method specified for custom validation
            $this->form_validation->set_rules('sname','Name','required|callback_check_sname_exists');
            $this->form_validation->set_rules('sdescription','Email','required|callback_check_sdescription_exists');
           
            if($this->form_validation->run()===FALSE){
               //print_r(form_error('rsname'));
               // print_r(form_error('remail'));
               // print_r(form_error('rpassword'));
               // print_r(form_error('rcpassword'));
               // exit();
                redirect('dashboard/service');
            }else{//encrypt password
                $this->service_model->add();
                //set message
                $this->session->set_flashdata('service_added','service has been added.');
                redirect('dashboard/service');
            }
	}
    public function check_sname_exists($sname){
        $this->form_validation->set_message('check_sname_exists','service name already taken.');
        if($this->service_model->check_sname_exists($sname)){
            return true;
        }
        return false;
    }
    public function check_sdescription_exists($sdescription){
        $this->form_validation->set_message('check_sdescription_exists','Email already taken.');
        if($this->service_model->check_sdescription_exists($sdescription)){
            return true;
        }
        return false;
    }
}
