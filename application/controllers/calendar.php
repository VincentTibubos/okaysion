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
}
