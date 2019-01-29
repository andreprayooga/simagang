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

	public function insert($data)
  {
    return $this->db->insert('siswa_magang', $data);
  }
	public function update($id,$foto)
	{
		$set = array(
			'nim_nisn' => $this->input->post('nim_nisn'),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'nama_instansi' => $this->input->post('nnama_instansi'),
			'semester' => $this->input->post('semester'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'provinsi' => $this->input->post('provinsi'),
			'kota' => $this->input->post('kota'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tanggal' => $this->input->post('tanggal'),
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
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

	public function get_provinsi()
{
		$this->db->order_by('nama_provinsi', 'asc');
		return $this->db->get('provinsi')->result();
}

public function get_kota()
{
		// kita joinkan tabel kota dengan provinsi
		$this->db->order_by('nama_kota', 'asc');
		$this->db->join('provinsi', 'kota.fk_id_provinsi = provinsi.id_provinsi');
		return $this->db->get('kota')->result();
}
}
