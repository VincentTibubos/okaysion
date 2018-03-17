<?php
class Service extends CI_Controller {

	public function delete(){
        if(empty($_POST)){
            redirect();
        }
		$this->service_model->delete($this->input->post('sid'));
        redirect('dashboard/service');
	}
	public function update(){
        if(empty($_POST)){
            redirect();
        }
        $this->service_model->update();
        redirect('dashboard/service');
	}
	public function add(){
                if(empty($_POST)){
                    redirect();
                }
                $this->service_model->add();
                //set message
                $this->session->set_flashdata('service_added','service has been added.');
                redirect('dashboard/service');
	}
    public function check_sname_exists($sname=FALSE){

        if($sname==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_sname_exists','service name already taken.');
        if($this->service_model->check_sname_exists($sname)){
            return true;
        }
        return false;
    }
    public function check_sdescription_exists($sdescription=FALSE){
        if($sdescription==FALSE){
            redirect();
        }
        $this->form_validation->set_message('check_sdescription_exists','Email already taken.');
        if($this->service_model->check_sdescription_exists($sdescription)){
            return true;
        }
        return false;
    }
}
