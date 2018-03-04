<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Amessage extends CI_Controller {
    public function send(){
        $this->amessage_model->send();
        redirect(base_url());
    }
	public function delete(){
		echo $this->amessage_model->delete($this->input->post('amid'));

	}
}