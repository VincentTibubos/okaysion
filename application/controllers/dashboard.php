<?php
	class dashboard extends CI_Controller{
		public function register(){

			echo "hi ".$_POST['email']." your password is ".$_POST['pass'];

		}
		public function signin(){
			echo "hi ".$_POST['email']." your password is ".$_POST['pass'];

		}
		public function view($page='index'){
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/'.$page);
			$this->load->view('dashboard/templates/footer');
		}
	}
