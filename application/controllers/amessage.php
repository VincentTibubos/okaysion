<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Amessage extends CI_Controller {
    public function send(){
    	if(empty($_POST)){
            redirect();
    	}
        $this->amessage_model->send();
        redirect(base_url());
    }
	public function delete(){
    	if(empty($_POST)){
            redirect();
    	}
		echo $this->amessage_model->delete($this->input->post('amid'));
	}
}