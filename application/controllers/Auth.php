<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function auth_login()
	{
		$this->load->view('auth/pages/login');
	}

	public function index()
	{
		$this->load->view('auth/pages/register');
	}
}
