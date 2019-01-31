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
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/divisi/template/header');
			$this->load->view('admin/divisi/insert');
			$this->load->view('admin/divisi/template/footer');
		}
		else
		{
			if ( isset($_FILES['gambar']) && $_FILES['gambar']['size'] > 0 )
			{
				// Konfigurasi folder upload & file yang diijinkan untuk diupload/disimpan
				$config['upload_path']          = './assets/uploads/divisi/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000000000000;
				$config['max_width']            = 5000;
				$config['max_height']           = 5000;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
					$error = array('error' => $this->upload->display_errors('<p class="text-danger">','</p>'));
					$this->load->view('admin/divisi/template/header');
					$this->load->view('admin/divisi/insert',$error);
					$this->load->view('admin/divisi/template/footer');
				} else { //jika berhasil upload

					$img_data = $this->upload->data();
					$post_image = $img_data['file_name'];

				}
			}	else { //jika tidak upload gambar

				$post_image = '';

			}

			$post_data = array(
				'nama_divisi' => $this->input->post('nama_divisi'),
				'keterangan' => $this->input->post('keterangan'),
			
			);

			if( empty($data['upload_error']) ) {
				$this->DivisiModel->insert($post_data);
				redirect('Admin/Divisi','refresh');
			}
		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_instansi','nama_instansi',"required|trim");
		$this->form_validation->set_rules('keterangan','keterangan',"required|trim");
		

		if ($this->form_validation->run() == FALSE) {
			$data['divisi_magang'] = $this->DivisiModel->get_id($id);
			$this->load->view('admin/divisi/template/header');
			$this->load->view('admin/divisi/update',$data);
			$this->load->view('admin/divisi/template/footer');
		} else {
			if ($_FILES['gambar']['name'] != "") {
				$config['upload_path'] = './assets/uploads/divisi';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar')){

					$data['error'] = $this->upload->display_errors('<p class="text-danger">','</p>');
					$this->load->view('admin/divisi/template/header');
					$this->load->view('admin/divisi/update',$data);
					$this->load->view('admin/divisi/template/footer');
				}
				else{
					$up = array('upload_data' => $this->upload->data());
					$this->DivisiModel->update($id,$up['upload_data']['file_name']);
					redirect('Admin/Divisi','refresh');
				}
			}else{
				$this->DivisiModel->update($id,null);
				redirect('Admin/Divisi','refresh');
			}

		}
	}


	public function delete($id)
	{
		$this->DivisiModel->delete($id);
		redirect('Admin/Divisi','refresh');
	}
}
