
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PendampingMagang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('PendampingModel');

	}
	public function index()
	{
		$data['data'] = $this->PendampingModel->get();
		$this->load->view('admin/pendamping/template/header');
		$this->load->view('admin/pendamping/index',$data);
		$this->load->view('admin/pendamping/template/footer');
	}
	public function insert()
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama','Nama',"required|trim");
		$this->form_validation->set_rules('email','Email',"required");
		$this->form_validation->set_rules('no_hp','no_hp',"required|trim");
		$this->form_validation->set_rules('password','Password',"required");
		$this->form_validation->set_rules('fk_id_level','ID Level',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/pendamping/template/header');
			$this->load->view('admin/pendamping/insert');
			$this->load->view('admin/pendamping/template/footer');
		} else {
			$this->PendampingModel->insert();
			redirect('Admin/Pendamping_magang','refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama','Nama',"required|trim");
		$this->form_validation->set_rules('email','Email',"required");
		$this->form_validation->set_rules('no_hp','no_hp',"required|trim");
		$this->form_validation->set_rules('password','Password',"required");
		$this->form_validation->set_rules('fk_id_level','ID Level',"required");


		if ($this->form_validation->run() == FALSE) {
			$data['pendamping_magang'] = $this->PendampingModel->get_id($id);
			$this->load->view('admin/pendamping/template/header');
			$this->load->view('admin/pendamping/update',$data);
			$this->load->view('admin/pendamping/template/footer');
		} else {
			$this->PendampingModel->update($id);
			redirect('Admin/Pendamping_magang','refresh');
		}
	}
	public function delete($id)
	{
		$delete = $this->PendampingModel->delete($id);

		redirect('Admin/Pendamping_magang','refresh');
	}
}
