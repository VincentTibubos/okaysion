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
		public function company(){
			$data['cdata']=array(
				'cid'=>'',
				'cname'=>'',
				'cemail'=>''
		);
			if(!empty($_POST)){
				$data['cdata']=$this->company_model->viewcomp($this->input->post('cid'));
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
		public function calendar($year=null,$month=null){
			/*$conf=array(
				'start_day'=>'monday',
				'show_next_prev'=>true,
				'next_prev_url'=>base_url().'dashboard/calendar'
			);
			$this->load->library('calendar',$conf);
			echo $this->calendar->generate($year,$month);
			exit();*/
			if(!$year){
				$year=date('Y');
			}
			if(!$month){
				$month=date('m');
			}

			if($this->input->is_ajax_request()){
				$day= $this->input->post('day');
				$this->calendar_model->addsched("$year-$month-$day",
				$this->input->post('details'));

			}/*
			if($day= $this->input->post('day')){
				echo $this->input->post('day');
				exit();
				$this->calendar_model->addsched("$year-$month-$day",
				$this->input->post('details'));
			}*/

			$data['calendar']=$this->calendar_model->generate($year,$month);
			if(!$this->input->is_ajax_request()){				
					$this->load->view('dashboard/templates/header');
					$this->load->view('dashboard/forms',$data);
					$this->load->view('dashboard/templates/footer');

			}

		}
	}