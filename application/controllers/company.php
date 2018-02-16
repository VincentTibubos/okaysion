<?php
class Company extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}public function view($page='home')
	{
	//	echo $_SERVER['HTTP_HOST'];
	//	die();
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
}
