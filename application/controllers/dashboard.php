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
			if($this->session->userdata('type')!='Admin'){
				redirect('dashboard');
			}
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
		public function messages($indexno=0){

			if($this->input->is_ajax_request()){
				$type=$this->session->userdata('type');
				if($type=='Admin'){
					if(!empty($_POST)){
						$data=$this->amessage_model->view($this->input->post('amid'));
					}
					echo json_encode($data);
				}
			}
			else{
				$data['mdata']=array(
					'amid'=>'',
					'amname'=>'',
					'amemail'=>'',
					'amsubject'=>'',
					'ammsg'=>''
				);
				$type=$this->session->userdata('type');
				//exit();
				if($type=='Admin'){
					$config['base_url'] = base_url().'dashboard/messages/';
					$config['total_rows'] = $this->amessage_model->countnum();
					$config['per_page'] = 3;
					$config['uri_segment'] = 3;
					$config['first_tag_open'] = '<div class="btn btn-success">';
					$config['first_tag_close'] = '</div>';

					$this->pagination->initialize($config);
					$data['message']=$this->amessage_model->view(FALSE,$config['per_page'],$indexno);
					//print_r($data);
				}
				else{
				$this->load->view('dashboard/templates/header');
				$this->load->view('dashboard/messages');
				$this->load->view('dashboard/templates/footer');
				}
			//	print_r($data);
			//	exit();
				$this->load->view('dashboard/templates/header');
				$this->load->view('dashboard/messages',$data);
				$this->load->view('dashboard/templates/footer');
			}
		}
		public function customer(){
			if($this->session->userdata('type')!='Company'){
				redirect('dashboard');
			}
			$data['cudata']=array(
				'cuid'=>'',
				'cuname'=>'',
				'cuemail'=>''
			);
			if(!empty($_POST)){
				$data['cudata']=$this->customer_model->viewcus($this->input->post('cuid'));
			}
			$data['customer']=$this->customer_model->viewcus();
		//	print_r($data);
		//	exit();
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/users',$data);
			$this->load->view('dashboard/templates/footer');
		}
		public function service(){
			if($this->session->userdata('type')!='Company'){
				redirect('dashboard');
			}
			$data['sdata']=array(
				'sid'=>'',
				'sname'=>'',
				'svenue'=>'',
				'sprice'=>'',
				'sdescription'=>''
			);
			if(!empty($_POST)){
				$data['sdata']=$this->service_model->viewser($this->input->post('sid'));
			}
			$data['service']=$this->service_model->viewser();
			//print_r($data);
			//exit();
			$this->load->view('dashboard/templates/header');
			$this->load->view('dashboard/service',$data);
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

			if($this->session->userdata('type')!='Company'){
				redirect('dashboard');
			}
			$data['customer']=$this->customer_model->viewcus();
			$data['service']=$this->service_model->viewser();
			if(!$year){
				$year=date('Y');
			}
			if(!$month){
				$month=date('m');
			}

			if($this->input->is_ajax_request()){
				$this->calendar_model->addsched(
					$this->input->post('eid'),
					$this->input->post('date'),
					$this->input->post('time'),
					$this->input->post('details'),
					$this->input->post('sid'),
					$this->input->post('cid'),
					$this->input->post('cuid')
				);

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

			}else
					echo $data['calendar'];		

		}
	}