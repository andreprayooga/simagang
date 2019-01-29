<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login(){

		$this->load->model('AdminModel');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('auth/login');
        } else {
            // Get username
    $username = $this->input->post('username');
    // Get & encrypt password
    $password = $this->input->post('password');
    // Login user
	 $id_administrator = $this->AdminModel->login($username, $password);

    if($id_administrator){
        // Buat sessio n
        $user_data = array(
            'id_administrator' => $id_administrator,
            'username' => $username,
            'fk_id_level' => $id_administrator['fk_id_level'],
            'logged_in' => true
        );
         $this->session->set_userdata($user_data);
         $this->session->set_flashdata('user_loggedin', 'You are now logged in');
            if ($id_administrator['fk_id_level'] == '1') {
                    redirect('Admin/Sekolah/index');
            } else {
        // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('Login/index', 'refresh');
				}
			}
		  }
		}

		public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_administrator');
        $this->session->unset_userdata('username');
        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');
        redirect('Home');
    }


}
