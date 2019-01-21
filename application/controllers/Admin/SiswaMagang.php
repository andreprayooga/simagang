
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SiswaMagang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('SiswaModel');

	}
	public function index()
	{
		$data['data'] = $this->SiswaModel->get();
		$this->load->view('admin/siswa/template/header');
		$this->load->view('admin/siswa/index',$data);
		$this->load->view('admin/siswa/template/footer');
	}
	public function insert()
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nim_nisn','nim_nisn',"required");
		$this->form_validation->set_rules('nama','nama',"required|trim");
		$this->form_validation->set_rules('email','Email',"required");
		$this->form_validation->set_rules('jurusan','jurusan',"required");
		$this->form_validation->set_rules('nama_sekolah','nama_sekolah',"required");
		$this->form_validation->set_rules('semester','semester',"required");
		$this->form_validation->set_rules('alamat','alamat',"required");
		$this->form_validation->set_rules('provinsi','provinsi',"required");
		$this->form_validation->set_rules('kota','kota',"required");
		$this->form_validation->set_rules('alamat_magang','alamat_magang',"required");
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir',"required");
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir',"required");
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin',"required");
		$this->form_validation->set_rules('no_hp','no_hp',"required");
		$this->form_validation->set_rules('password','password',"required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/siswa_magang/insert');
			$this->load->view('admin/footer');
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors('<p class="text-danger">','</p>'));
				$this->load->view('admin/header');
				$this->load->view('admin/siswa_magang/insert',$error);
				$this->load->view('admin/footer');
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				$this->Siswa_magang_m->insert($data['upload_data']['file_name']);
				redirect('Admin/Siswa_magang','refresh');
			}


		}
	}
	public function update($id)
	{
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p');
		$this->form_validation->set_rules('nim_nisn','nim_nisn',"required");
		$this->form_validation->set_rules('nama','nama',"required|trim");
		$this->form_validation->set_rules('email','Email',"required");
		$this->form_validation->set_rules('jurusan','jurusan',"required");
		$this->form_validation->set_rules('nama_sekolah','nama_sekolah',"required");
		$this->form_validation->set_rules('semester','semester',"required");
		$this->form_validation->set_rules('alamat','alamat',"required");
		$this->form_validation->set_rules('provinsi','provinsi',"required");
		$this->form_validation->set_rules('kota','kota',"required");
		$this->form_validation->set_rules('alamat_magang','alamat_magang',"required");
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir',"required");
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir',"required");
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin',"required");
		$this->form_validation->set_rules('no_hp','no_hp',"required");
		$this->form_validation->set_rules('password','password',"required");


		if ($this->form_validation->run() == FALSE) {
			$data['siswa_magang'] = $this->Siswa_magang_m->get_id($id);
			$this->load->view('admin/header');
			$this->load->view('admin/siswa_magang/update', $data);
			$this->load->view('admin/footer');
		} else {
			if ($_FILES['foto']['name'] != "") {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto')){

					$data['siswa_magang'] = $this->Siswa_magang_m->get_id($id);
					$data['error'] = $this->upload->display_errors('<p class="text-danger">','</p>');
					$this->load->view('admin/header');
					$this->load->view('admin/siswa_magang/update', $data);
					$this->load->view('admin/footer');
				}
				else{
					$up = array('upload_data' => $this->upload->data());
					$this->Siswa_magang_m->update($id,$up['upload_data']['file_name']);
					redirect('Admin/Siswa_magang','refresh');
				}
			}else{
				$this->Siswa_magang_m->update($id,null);
				redirect('Admin/Siswa_magang','refresh');
			}

		}
	}
	public function delete($id)
	{
		$this->Siswa_magang_m->delete($id);
		redirect('Admin/Siswa_magang','refresh');
	}
}
