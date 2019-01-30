
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
		$this->form_validation->set_rules('keterangan','Keterangan',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/divisi/template/header');
			$this->load->view('admin/divisi/insert');
			$this->load->view('admin/divisi/template/footer');
		} else {
			$config['upload_path'] = "./assets/uploads/divisi/";
			$config['allowed_types'] = "gif|jpg|png";
			$config['max_width'] = '10240';
			$config['max_height'] = '7680';
			$config['max_size'] = "2000";

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('gambar')) {
				$data['error'] = $this->upload->display_errors();
				$this->load->view('admin/divisi/insert',$data);
			}else{
				$upload_data = $this->upload->data();
				#get data
				$set = array(
					'nama_divisi' => $this->input->post('nama_divisi'),
					'gambar' => $upload_data['file_name'],
					'keterangan' => $this->input->post('keterangan'),
				);

				$this->db->insert('divisi_magang',$set);

			redirect('Admin/Divisi','refresh');
		}
	}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_divisi','nama_divisi',"required|trim");
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
