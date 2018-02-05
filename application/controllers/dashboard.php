<?php
	class dashboard extends CI_Controller{
		public function register(){

			echo "hi ".$_POST['email']." your password is ".$_POST['pass'];

		}
		public function signin(){
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required|callback_checklogin');
			if($this->form_validation->run()==false){
				echo 'error';
				$this->load->view('dashboard/login');
			}else{
				redirect(base_url('index.php/home'),'refresh');
			}

		}
		public function view($page='index'){
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/'.$page);
			$this->load->view('dashboard/templates/footer');
		}
	}
