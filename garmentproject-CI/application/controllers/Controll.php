<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->helper();
    $this->load->library('form_validation');
    $this->load->model('Model_User');
    $this->load->model('Model_Barang');
  }

  public function index()
  {
    if ($this->session->userdata('logged_in')=="Sudah Login") {
      $id = $this->session->userdata['id'];
      $data = array(
      'user' => $this->Model_User->get_user($id),
      );
      $this->load->view('home',$data);
    } else {
    $this->load->view('home');
  }
  }

  public function view_list()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
    redirect('Control/view_login');
  } else {
    $id = $this->session->userdata['id'];
    $data = array(
    'user' => $this->Model_User->get_user($id),
    'barang' => $this->Model_Barang->get_all()
    );
    $this->load->view('list',$data);
  }
  }

	public function view_product()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
	$pesan['message'] = "You Must Log-in";
	redirect('Control/view_login');
  } else {
    $id = $this->session->userdata['id'];
    $data = array(
    'user' => $this->Model_User->get_user($id),
    'barang' => $this->Model_Barang->get_all(),
	'item' => $this->Model_Barang->get_cart($id),
	'sum_price' => $this->Model_Barang->get_sum_price($id) 
    );
    $this->load->view('product',$data);
  }
  }
  
    public function view_transaction()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
    redirect('Control/view_login');
  } else {
    $id = $this->session->userdata['id'];
    $data = array(
    'user' => $this->Model_User->get_user($id),
    'transaksi' => $this->Model_Barang->get_transaction()
    );
    $this->load->view('list_transaksi',$data);
  }
  }

  public function view_registrasi()
  {
    $this->load->view('registrasi');
  }

  public function view_detail()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
    redirect('Control/index');
  } else {
    $id = $this->session->userdata['id'];
    $data = array(
    'user' => $this->Model_User->get_user($id),
    'order' => $this->Model_Barang->get_order($id),
    'total' => $this->Model_Barang->get_total($id)
    );
    $this->load->view('detail',$data);
  }
  }
  
  public function view_cart()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
		redirect('Control/view_login');
    } else {
		$id = $this->session->userdata['id'];
		$data = array(
		'user' => $this->Model_User->get_user($id),
		'barang' => $this->Model_Barang->get_all(),
		'item' => $this->Model_Barang->get_cart($id),
		'sum_price' => $this->Model_Barang->get_sum_price($id)
		);
		$this->load->view('customer-cart',$data);
	}
  }

  public function view_profile()
  {
    if ($this->session->userdata('logged_in')!="Sudah Login") {
    redirect('Control/view_login');
  } else {
    $id = $this->session->userdata['id'];
    $data = array(
    'user' => $this->Model_User->get_user($id)
    );
    $this->load->view('Profile',$data);
  }
  }

  public function view_login()
  {
    $this->load->view('login');
  }

  public function daftar_akun(){
  $cekForm = $this->input->post(null,TRUE);
  $data = array(
   'firstname' => $this->input->post('firstname'),
   'lastname' => $this->input->post('lastname'),
   'tanggallahir' => $this->input->post('tanggallahir'),
   'email' => $this->input->post('email'),
   'address' => $this->input->post('address'),
   'username' => $this->input->post('username'),
   'phonenumber' => $this->input->post('phonenumber'),
   'password' => md5($this->input->post('password')),
   'images' => 'gambar-orang.jpg'
 );
  $username = $this->input->post('username');
  $cek = $this->db->query("SELECT username FROM userdata WHERE username = '$username'");
  if($cek->num_rows() == 0 && $cekForm == TRUE){
    $result = $this->Model_User->daftar_user($data);
    if($result == TRUE){
          // $result = $this->Model_User->get($data);
      $pesan['message'] = "Sign-up success, please login with your account now";
      $this->load->view('login',$pesan);
    }
  } else{
    $pesan['message'] = "Username has been used";
    $this->load->view('login',$pesan);
  }
  
	public function daftar_customer(){
	$cekForm = $this->input->post(null,TRUE);
	$data = array(
	 'firstname' => $this->input->post('firstname'),
	 'lastname' => $this->input->post('lastname'),
	 'tanggallahir' => $this->input->post('tanggallahir'),
	 'email' => $this->input->post('email'),
	 'address' => $this->input->post('address'),
	 'username' => $this->input->post('username'),
	 'phonenumber' => $this->input->post('phonenumber'),
	 'password' => md5($this->input->post('password')),
	 'images' => 'gambar-orang.jpg'
	);
	$username = $this->input->post('username');
	$cek = $this->db->query("SELECT username FROM userdata WHERE username = '$username'");
	if($cek->num_rows() == 0 && $cekForm == TRUE){
	  $result = $this->Model_User->daftar_user($data);
	  if($result == TRUE){
			// $result = $this->Model_User->get($data);
		$pesan['message'] = "Sign-up success, please login with your account now";
		$this->load->view('registrasi',$pesan);
	  }
	} else{
	  $pesan['message'] = "Username has been used";
	  $this->load->view('registrasi',$pesan);
	}
	}

	public function daftar_transaksi(){
	$cekForm = $this->input->post(null,TRUE);
	$id = $this->session->userdata['id'];
	$data = array(
	 'customer' => $id,
	 'address' => $this->input->post('address'),
	 'message' => $this->input->post('message'),
	 'city' => $this->input->post('city'),
	 'state' => $this->input->post('state'),
	 'zipcode' => $this->input->post('zipcode')
	);
	if($cekForm == TRUE){
	  $result = $this->Model_Barang->daftar_transaksi($data);
	  if($result == TRUE){
		$pesan['message'] = "Order Berhasil";
		$this->load->view('detail',$pesan);
	  }
	} else{
	  $pesan['message'] = "Order Gagal";
	  $this->load->view('detail',$pesan);
	}
	}

  public function cek_login()
  {
    $data = $this->input->post(null,TRUE);
    $login= $this->Model_User->login_user($data);
    if($login){
      $sess_data = array(
        'logged_in' => "Sudah Login",
        'username' => $login->username,
        'id' => $login->id,
        'firstname' => $login->firstname,
      );
//            isi dengan session data , terus di set sessionnya
      $this->session->set_userdata($sess_data);
	  $cart = $this->Model_Barang->check_cart($login->id);
      redirect('Control/view_list');
    }else{
            //isi dengan flash date( )ata disini untuk memberi tau alert ke View
      $this->session->set_flashdata('alert', 'gagal_login');
      redirect('Control/view_login');

    }
  }
  public function cek_login_customer()
  {
    $data = $this->input->post(null,TRUE);
    $login= $this->Model_User->login_user($data);
    if($login){
      $sess_data = array(
        'logged_in' => "Sudah Login",
        'username' => $login->username,
        'id' => $login->id,
        'firstname' => $login->firstname,
      );
//            isi dengan session data , terus di set sessionnya
      $this->session->set_userdata($sess_data);
	  $cart = $this->Model_Barang->check_cart($login->id);
	  if(!$cart){
		$this->Model_Barang->add_cart($login->id);
	  }
      redirect('Control/index');
    }else{
            //isi dengan flash date( )ata disini untuk memberi tau alert ke View
      $this->session->set_flashdata('alert', 'gagal_login');
      redirect('Control/index');

    }
  }								  

  public function logout(){
        //isi dengan sess_destroy
  $this->session->sess_destroy();
  redirect(site_url('Control/view_login'));
	}

	public function logout_customer(){
		  //isi dengan sess_destroy
	$this->session->sess_destroy();
	redirect(site_url('Control/index'));
	}
	
}

	?>
