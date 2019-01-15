<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

		public function auth_register()
	{
		$this->load->view('auth/register');
	}

	public function auth_login()
	{
		$this->load->model('User_model');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]',
	  	array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
		)
	);
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		    if($this->form_validation->run() === FALSE){
            $this->load->view('user/login', $data);
        	} else {
            // Untuk mendapatkan Username dari DB
			$username = $this->input->post('username');
			// Untuk mendapatkan Password dari DB
			$password = md5($this->input->post('password'));
		}
	}
}