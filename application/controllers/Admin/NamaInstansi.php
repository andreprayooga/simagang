
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NamaInstansi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('NamaInstansiModel');

	}
	public function index()
	{
		$data['data'] = $this->NamaInstansiModel->get();
		$this->load->view('admin/nama_instansi/template/header');
		$this->load->view('admin/nama_instansi/index',$data);
		$this->load->view('admin/nama_instansi/template/footer');
	}
	public function insert()
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_instansi','Nama_instansi',"required|trim");
		$this->form_validation->set_rules('alamat','Alamat',"required");
		$this->form_validation->set_rules('no_hp','No_hp',"required");
		// $this->form_validation->set_rules('fk_id_siswa','ID Siswa',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/nama_instansi/insert');
			$this->load->view('admin/footer');
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('logo_instansi')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/header');
				$this->load->view('admin/nama_instansi/insert',$error);
				$this->load->view('admin/footer');
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$this->Nama_instansi_m->insert($data['upload_data']['file_name']);
				redirect('Admin/Nama_instansi','refresh');
			}

		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nama_instansi','Nama_instansi',"required|trim");
		$this->form_validation->set_rules('alamat','Alamat',"required");
		$this->form_validation->set_rules('no_hp','No_hp',"required");
		$this->form_validation->set_rules('fk_id_siswa','ID Siswa',"required");


		if ($this->form_validation->run() == FALSE) {
			$data['nama_instansi'] = $this->Nama_instansi_m->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/Nama_instansi/update', $data);
			$this->load->view('admin/footer');
		}
		else {

			if($_FILES['logo_instansi']['name'] != ""){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('logo_instansi')){

					$data['nama_instansi'] = $this->Nama_instansi_m->get_id($id);
					$data['error'] = $this->upload->display_errors('<p class="text-danger">','</p>');
					$this->load->view('admin/header');
					$this->load->view('admin/nama_instansi/insert',$data);
					$this->load->view('admin/footer');
				}
				else{
					$data = array('upload_data' => $this->upload->data());
					$this->Nama_instansi_m->update($id,$data['upload_data']['file_name']);
					redirect('Admin/Nama_instansi','refresh');
				}
			}else{
				$this->Nama_instansi_m->update($id,null);
					redirect('Admin/Nama_instansi','refresh');
			}

		}
	}
	public function delete($id)
	{
		$this->Nama_instansi_m->delete($id);
		redirect('Admin/Nama_instansi','refresh');
	}
}
