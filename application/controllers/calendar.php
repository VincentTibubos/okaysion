<?php
class Calendar extends CI_Controller {
    public function index($eid=null){
        
        if($this->input->is_ajax_request()){
           
            $data=$this->calendar_model->getvalues($this->input->post('eid'));
        }
        else{
            redirect();
        }
        echo json_encode($data);       

        //return $data;
    }
    public function request(){
        if(!empty($_POST)){
            $this->calendar_model->addrequest();
            redirect($this->input->post('curl'));
        }
        else
            redirect();
    }
    public function cancel(){
        if(!empty($_POST)){
            $this->calendar_model->cancel($this->input->post('eid'));
          redirect('dashboard/calendar');
        }
        else
            redirect('dashboard/calendar');
    }
}
