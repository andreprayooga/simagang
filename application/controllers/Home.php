<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('user/index');
	}

	public function siswa_magang()
	{
		$this->load->model('AbsensiModel');
		$data['data'] = $this->AbsensiModel->get();
		$this->load->view('admin/absensi/template/header_user');
		$this->load->view('admin/absensi/index_user',$data);
		$this->load->view('admin/absensi/template/footer_user');
	}
}
