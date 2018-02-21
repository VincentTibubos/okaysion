<?php
	class dashboard extends CI_Controller{
		public function register(){

            if($this->session->userdata('logged_in')){
                redirect();
            }

			echo "hi ".$_POST['email']." your password is ".$_POST['pass'];

		}
		public function signin(){

            if($this->session->userdata('logged_in')){
                redirect();
            }
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required|callback_checklogin');
			if($this->form_validation->run()==false){
				echo 'error';
				$this->load->view('dashboard/login');
			}else{
				redirect(base_url('index.php/home'),'refresh');
			}

		}
		public function company($cid=FALSE){
			$data['cdata']=FALSE;
			if($cid!==FALSE){
				$data['cdata']=$this->company_model->viewcomp($cid);
			}
			$data['company']=$this->company_model->viewcomp();
		//	print_r($data);
		//	exit();
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/users',$data);
			$this->load->view('dashboard/templates/footer');
		}
		public function view($page='index'){
            if(!$this->session->userdata('logged_in')){
                redirect('login');
            }
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/'.$page);
			$this->load->view('dashboard/templates/footer');
		}
	}
