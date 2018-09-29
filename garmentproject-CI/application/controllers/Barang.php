<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

public function __construct()
  	{
    	parent::__construct();
      $this->load->helper(array('form', 'url'));
    	$this->load->model('Model_Barang');
  	}

	public function hapus()
	{
	  $id = $this->input->post('id');
	  $hapus = $this->Model_Barang->delete_data($id);
	  if($hapus){
	    $this->session->set_flashdata('alert', 'sukses_hapus');
	    redirect('Control/view_list');
	  }else{
	    echo "<script>alert('Gagal Hapus Data');</script>";
	  }
	}

  function edit(){
	$id = $this->input->post('id');
	$namaitem = $this->input->post('itemname');
	$price = $this->input->post('price');
	$type = $this->input->post('type');
	$stock = $this->input->post('stock');

	$data = array(
		'itemname' => $namaitem,
		'price' => $price,
		'types' => $type,
		'stock' => $stock
	);

	$where = array(
		'id' => $id
	);

	$this->Model_Barang->update_barang($where,$data,'dataitem');
	redirect('Control/view_list');
  }

	public function add()
	{
	  	$result = $this->Model_Barang->tambah($data);
    	if($result==TRUE){
	    	$this->session->set_flashdata('alert', 'sukses_insert');
	    	redirect('Control/view_list');
	  	}else{
	    	echo "<script>alert('Gagal Menambahkan Data');</script>";
	  	}
  }

}
?>
