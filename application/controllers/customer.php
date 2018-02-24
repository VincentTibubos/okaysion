<?php
class Customer extends CI_Controller {

	public function delete(){
		$this->customer_model->delete($this->input->post('cuid'));
        redirect('dashboard/customer');
	}
	public function update(){
        $this->customer_model->update();
        redirect('dashboard/customer');
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
                $this->customer_model->add();
                //set message
                $this->session->set_flashdata('customer_added','customer has been added.');
                redirect('dashboard/customer');
            }
	}
    public function check_cuname_exists($cuname){
        $this->form_validation->set_message('check_cuname_exists','customer name already taken.');
        if($this->customer_model->check_cuname_exists($cuname)){
            return true;
        }
        return false;
    }
    public function check_cuemail_exists($cuemail){
        $this->form_validation->set_message('check_cuemail_exists','Email already taken.');
        if($this->customer_model->check_cuemail_exists($cuemail)){
            return true;
        }
        return false;
    }
}
