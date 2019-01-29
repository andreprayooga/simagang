
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Posisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('PosisiModel');
		$this->load->helper('form');

	}
	public function index()
	{
		$data['data'] = $this->PosisiModel->get();
		$this->load->view('admin/posisi/template/header');
		$this->load->view('admin/posisi/index',$data);
		$this->load->view('admin/posisi/template/footer');
	}
	public function insert()
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_posisi','nama_posisi',"required|trim");
		$this->form_validation->set_rules('fk_id_divisi','ID Divisi',"required");
		$this->form_validation->set_rules('keterangan','Keterangan',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/posisi/template/header');
			$this->load->view('admin/posisi/insert');
			$this->load->view('admin/posisi/template/footer');
		} else {
			$this->PosisiModel->insert();
			redirect('Admin/Posisi','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_posisi','nama_posisi',"required|trim");
		$this->form_validation->set_rules('fk_id_divisi','ID Divisi',"required");
		$this->form_validation->set_rules('keterangan','Keterangan',"required");

		if ($this->form_validation->run() == FALSE) {
			$data['posisi_magang'] = $this->PosisiModel->get_id($id);
			$this->load->view('admin/posisi/template/header');
			$this->load->view('admin/posisi/update',$data);
			$this->load->view('admin/posisi/template/footer');
		} else {
			$this->PosisiModel->update($id);
			redirect('Admin/Posisi','refresh');
		}
	}
	public function delete($id)
	{
		$this->PosisiModel->delete($id);
		redirect('Admin/Posisi','refresh');
	}
}
