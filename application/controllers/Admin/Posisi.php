
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
			$config['upload_path'] = "./assets/uploads/posisi/";
			$config['allowed_types'] = "gif|jpg|png";
			$config['max_width'] = '10240';
			$config['max_height'] = '7680';
			$config['max_size'] = "2000";

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('gambar')) {
				$data['error'] = $this->upload->display_errors();
				$this->load->view('user/register',$data);
			}else{
				$upload_data = $this->upload->data();
				#get data
				$set = array(
					'nama_posisi' => $this->input->post('nama_posisi'),
					'fk_id_divisi' => $this->input->post('fk_id_divisi'),
					'gambar' => $upload_data['file_name'],
					'keterangan' => $this->input->post('keterangan'),
				);

				$this->db->insert('posisi_magang',$set);

			redirect('Admin/Posisi','refresh');
		}
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
			$config['upload_path'] = "./assets/uploads/siswa/";
			$config['allowed_types'] = "gif|jpg|png";
			$config['max_width'] = '10240';
			$config['max_height'] = '7680';
			$config['max_size'] = "2000";

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('gambar')) {
				$data['error'] = $this->upload->display_errors();
				$this->load->view('admin/posisi/index',$data);
			}else{
				$upload_data = $this->upload->data();
				#get data
				$set = array(
					'nama_posisi' => $this->input->post('nama_posisi'),
					'fk_id_divisi' => $this->input->post('fk_id_divisi'),
					'gambar' => $upload_data['file_name'],
					'keterangan' => $this->input->post('keterangan'),
				);

				$this->db->where('id_posisi',$id);
				$this->db->update('posisi_magang',$set);

			redirect('Admin/Posisi','refresh');
		}
	}


}
	public function delete($id)
	{
		$this->PosisiModel->delete($id);
		redirect('Admin/Posisi','refresh');
	}
}
