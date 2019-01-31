<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|callback_cekDB');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/login');
        } else {
            redirect('Home','refresh');
        }
    }
    public function cekDB($username)
    {
        $password = $this->input->post('password');
        $cekDB = $this->db->where(array('username'=>$username,'password'=>$password))->get('siswa_magang');
        if ($cekDB->num_rows() == 1) {
            $data = $cekDB->result()[0];
            $userdata = array(
                'id' => $data->id,
                'nama' => $data->nama,
                'username' => $username
            );
            $this->session->set_userdata('logged_in_user',$userdata);
            return true;
        }else{
            $this->form_validation->set_message('cekDB','Username dan password tidak valid');
            return false;
        }
    }
    public function admin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|callback_cekDB_admin');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {
            redirect('Admin/Dashboard','refresh');
        }
    }
    public function cekDB_admin($username)
    {
        $password = $this->input->post('password');
        $cekDB_admin = $this->db->where(array('username'=>$username,'password'=>$password))->get('administrator');
        if ($cekDB_admin->num_rows() == 1) {
            $data = $cekDB_admin->result()[0];
            $userdata = array(
                'id' => $data->id,
                'nama' => $data->nama,
                'username' => $username,
                'fk_level' => $data->fk_level
            );
            $this->session->set_userdata('logged_in',$userdata);
            return true;
        }else{
            $this->form_validation->set_message('cekDB_admin','Username dan password tidak valid');
            return false;
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('logged_in_user');
        redirect('Home','refresh');
    }
}