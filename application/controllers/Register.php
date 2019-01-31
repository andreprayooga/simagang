<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index($id = null)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama',"Nama","required");
		$data = [
			'posisi' => $this->db->where('id_posisi',$id)->get('posisi_magang')->row(0),
		];
		if ($this->form_validation->run() == false) {
					$this->load->view('user/register',$data);
		}else{
			$config['upload_path'] = "./assets/uploads/siswa/";
			$config['allowed_types'] = "gif|jpg|png";
			$config['max_width'] = '10240';
			$config['max_height'] = '7680';
			$config['max_size'] = "2000";

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('foto')) {
				$data['error'] = $this->upload->display_errors();
				$this->load->view('user/register',$data);
			}else{
				$upload_data = $this->upload->data();
				#get data
				$set = array(
					'nim_nisn' => $this->input->post('nim_nisn'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'jurusan' => $this->input->post('jurusan'),
					'nama_instansi' => $this->input->post('nama_instansi'),
					'semester' => $this->input->post('semester'),
					'alamat' => $this->input->post('alamat'),
					'no_hp' => $this->input->post('no_hp'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'foto' => $upload_data['file_name'],
					'fk_posisi_magang' => $id,
				);

				$this->db->insert('siswa_magang',$set);
				redirect('Home');
			}
		}


	}
}
