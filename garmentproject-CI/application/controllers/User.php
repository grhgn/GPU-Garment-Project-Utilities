<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct()
  	{
    	parent::__construct();
    	$this->load->model('Model_User');
  	}

public function daftar_akun(){
  $cekForm = $this->input->post(null,TRUE);
  $data = array(
   'email' => $this->input->post('email'),
   'firstname' => $this->input->post('firstname'),
   'lastname' => $this->input->post('lastname'),
   'username' => $this->input->post('username'),
   'password' => $this->input->post('password'),
 );
  $username = $this->input->post('username');
  $cek = $this->db->query("SELECT username FROM user WHERE username = '$username'");
  if($cek->num_rows() == 0 && $cekForm == TRUE){
    $result = $this->Model_User->daftar_user($data);
    if($result == TRUE){
          // $result = $this->Model_User->get($data);
      $pesan['message'] = "Anda berhasil melakukan registrasi, silahkan login menggunakan akun anda";
      $this->load->view('registrasi',$pesan);
    }
  } else{
    $pesan['message'] = "Username sudah dipakai";
    $this->load->view('registrasi',$pesan);
  }
}

public function edit()
  {
    $cek = $this->input->post(null,TRUE);
    $edit = $this->Model_User->edit_data($data);
    if ($cek==TRUE){
      if($edit){
        $this->session->set_flashdata('alert', 'sukses_edit');
        redirect('Control/view_profile');
    }
    }else{
      echo "<script>alert('Gagal Edit Data');</script>";

    }
  }

  public function hapus()
  {
    $id = $this->session->userdata['username'];
    $hapus = $this->Model_User->delete_data($id);
    if($hapus){
      $this->session->set_flashdata('alert', 'sukses_hapus');
      $this->session->sess_destroy();
      redirect('Control/view_login');
    }else{
      echo "<script>alert('Gagal Hapus Data');</script>";
    }
  }
}