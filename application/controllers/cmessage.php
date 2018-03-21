<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Cmessage extends CI_Controller {
    public function send(){
    	if(empty($_POST)){
            redirect();
    	}
        $this->cmessage_model->send();
        redirect(base_url($this->input->post('curl')));
    }
	public function delete(){
    	if(empty($_POST)){
            redirect();
    	}
		echo $this->cmessage_model->delete($this->input->post('cmid'));
	}
}