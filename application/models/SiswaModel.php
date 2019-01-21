<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SiswaModel extends CI_Model {
	public function get()
	{
		$this->db->select("siswa_magang.*");
		$this->db->order_by('id_siswa','desc');
		return $this->db->get('siswa_magang')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id_siswa',$id)->get('siswa_magang')->row(0);
	}
	public function auto_code()
	{
		$last_id_sql = $this->db->query("select id from siswa_magang order by id desc limit 1");
		if($last_id_sql->num_rows() == 0){
			$last_id = 0;
		}else{
			$last_id = $last_id_sql->row(0)->id;
		}
		$new_id = substr("0000".$last_id+1, -4);
		return "LK".$new_id;
	}
	public function insert($foto)
	{
		$set = array(
			'nim_nisn' => $this->input->post('nim_nisn'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'semester' => $this->input->post('semester'),
			'alamat' => $this->input->post('alamat'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'alamat_magang' => $this->input->post('alamat_magang'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'foto' => $foto,
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_hp' => $this->input->post('no_hp'),
			'password' => $this->input->post('password'),
		);
		$this->db->insert('siswa_magang',$set);
	}
	public function update($id,$foto)
	{
		$set = array(
			'nim_nisn' => $this->input->post('nim_nisn'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'semester' => $this->input->post('semester'),
			'alamat' => $this->input->post('alamat'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'alamat_magang' => $this->input->post('alamat_magang'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),

			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_hp' => $this->input->post('no_hp'),
			'password' => $this->input->post('password'),
		);
		if ($foto != null) {
			$set['foto'] = $foto;
		}
		$this->db->where('id_siswa',$id);
		$this->db->update('siswa_magang',$set);
	}
	public function delete($id)
	{
		$this->db->where('id_siswa',$id);
		$this->db->delete('siswa_magang');
	}
}
