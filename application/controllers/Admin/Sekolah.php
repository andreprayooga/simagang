<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['logged_in'])){
     		 redirect(base_url('index.php/User/login'),'refresh');
    	}
	}
	public function index()
	{
		$this->load->view('admin/dashboard');
	}
}
