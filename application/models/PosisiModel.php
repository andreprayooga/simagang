<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PosisiModel extends CI_Model {
	public function get()
	{
		$this->db->select("posisi_magang.*");
		$this->db->order_by('nama_posisi','desc');
		return $this->db->get('posisi_magang')->result();
	}
	public function get_id($id)
	{
		return $this->db->where('id_posisi',$id)->get('posisi_magang')->row(0);
	}
	public function auto_code()
	{
		$last_id_sql = $this->db->query("select id from posisi_magang order by id desc limit 1");
		if($last_id_sql->num_rows() == 0){
			$last_id = 0;
		}else{
			$last_id = $last_id_sql->row(0)->id;
		}
		$new_id = substr("0000".$last_id+1, -4);
		return "LK".$new_id;
	}
	public function insert()
	{
		$set = array(
			'nama_posisi' => $this->input->post('nama_posisi'),
			'fk_id_divisi' => $this->input->post('fk_id_divisi'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->db->insert('posisi_magang',$set);
	}
	public function update($id)
	{
		$set = array(
			'nama_posisi' => $this->input->post('nama_posisi'),
			'fk_id_divisi' => $this->input->post('fk_id_divisi'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->db->where('id_posisi',$id);
		$this->db->update('posisi_magang',$set);
	}
	public function delete($id)
	{
		$this->db->where('id_posisi',$id);
		$delete = $this->db->delete('posisi_magang');
		if ($this->db->error()['code'] == 1451){
			$this->session->set_flashdata('error_message',"Gagal Menghapus Terdapat Foreign Key");
		}
	}
}
