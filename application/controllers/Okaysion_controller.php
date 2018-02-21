<?php
class Okaysion_controller extends CI_Controller {
	public function view($page='home')
	{
	//echo '1'.$this->user_model->check_cname_exists($page)."2";
	//	die();

		if(file_exists(APPPATH.'views/pages/'.$page.'.php')){
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
		}
		else if($this->user_model->check_cname_exists($page)){
			$data['title']=$page;
			$this->company_model->view('company/company',$data);
		}
		else{
			show_404();
		}
	}
}
