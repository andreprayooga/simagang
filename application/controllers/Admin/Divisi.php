
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Divisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('DivisiModel');

	}
	public function index()
	{
		$data['data'] = $this->DivisiModel->get();
		$this->load->view('admin/divisi/template/header');
		$this->load->view('admin/divisi/index',$data);
		$this->load->view('admin/divisi/template/footer');
	}
	public function insert()
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_divisi','nama_divisi',"required|trim");
		$this->form_validation->set_rules('fk_id_pendamping','ID Pendamping',"required");
		$this->form_validation->set_rules('fk_id_siswa','ID Siswa',"required");
		$this->form_validation->set_rules('keterangan','Keterangan',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/divisi/template/header');
			$this->load->view('admin/divisi/insert');
			$this->load->view('admin/divisi/template/footer');
		} else {
			$this->DivisiModel->insert();
			redirect('Admin/Divisi','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_divisi','nama_divisi',"required|trim");
		$this->form_validation->set_rules('fk_id_pendamping','ID Pendamping',"required");
		$this->form_validation->set_rules('fk_id_siswa','ID Siswa',"required");
		$this->form_validation->set_rules('keterangan','Keterangan',"required");

		if ($this->form_validation->run() == FALSE) {
			$data['divisi'] = $this->DivisiModel->get_id($id);
			$this->load->view('admin/divisi/template/header');
			$this->load->view('admin/divisi/update',$data);
			$this->load->view('admin/divisi/template/footer');
		} else {
			$this->DivisiModel->update($id);
			redirect('Admin/Divisi','refresh');
		}
	}
	public function delete($id)
	{
		$this->DivisiModel->delete($id);
		redirect('Admin/Divisi','refresh');
	}
}
