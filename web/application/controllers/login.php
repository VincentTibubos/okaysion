<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	 public function index()
    {
        $this->load->view('login');
    }
} 