<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/dashboard/template/header');
		$this->load->view('admin/dashboard/dashboard');
		$this->load->view('admin/dashboard/template/footer');
	}
}
