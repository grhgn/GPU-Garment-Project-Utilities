<?php
class Cart extends CI_Controller{
  public $tax;
  public $shipping;
  public $total;
  public $grand_total;

  public function __construct(){
    parent::__construct();
    $this->load->helper();
    $this->load->library('form_validation');
    $this->load->model('Model_User');
    $this->load->model('Model_Barang');
  }

  /*
  * Cart Index
  */
  public function index(){
    //Untuk Load View
    $data['main_content'] = 'cart';
    $this->load->view('layouts/main', $data);
  }
  public function sukses(){
    $data['main_content'] = 'cart_berhasil';
    $this->load->view('layouts/main', $data);
  }
  /*
  * Add to Cart
  */
  public function add(){
    //item data
    $data = array(
      'id' => $this->input->post('item_number'),
      'qty' => $this->input->post('qty'),
      'price' => $this->input->post('price'),
      'name' => $this->input->post('title')
  );

  //insert Cart
  $this->cart->insert($data);

  redirect('products');
}
  /*
  *Untuk update cart
  */
  public function update($in_cart = null){
    $data = $_POST;
    $this->cart->update($data);

    //Untuk Show Pagenya
    redirect('cart', 'refresh');
  }
  
  function edit_cart(){
	$id = $this->input->post('id_person');
	$id_barang = $this->input->post('item_number');
	$qty = $this->input->post('qty');
	$price = $this->input->post('price');
	$itemName = $this->input->post('title');

	$data = array(
		'id' => $id,
		'id_barang' => $id_barang,
		'itemname' => $itemName,
		'price' => $price,
		'qty' => $qty,
		'total_price' => $qty * $price
	);
	$check = $this->Model_Barang->get_price($id, $id_barang);
	if($check){
		$this->Model_Barang->edit_cart($data);
	}
	else{
		$this->Model_Barang->add_user_cart($data);
	}
	redirect('Control/view_product');
  }
  
  public function process(){
        //validasi
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('address2','Pesan Untuk Penjual','required');
        $this->form_validation->set_rules('city','Kota','trim|required');
        $this->form_validation->set_rules('state','Negara','trim|required');
        $this->form_validation->set_rules('zipcode','Kode Pos','trim|required');

        //load model
        $this->load->model('cart_model');
    if ($this->form_validation->run() == FALSE){
              //show view
              $data['main_content'] = 'cart';
              $this->load->view('layouts/main', $data);
            }
            else{
              if($this->cart_model->tambah()){
                $this->session->set_flashdata('Berhasil','Berhasil Melakukan Pemesanan');
                $this->cart->destroy();
                redirect('cart/sukses');
          }
      }
  }
  public function updatee($id, $url){
    $data = $_POST;
	$key = array_keys($data);
	foreach ($key as $ky){
		$array_price = $this->Model_Barang->get_price($id, $ky);
		$new = array(
			'id' => $id,
			'id_barang' => $ky,
			'qty' => $data[$ky],
			'total_price' => $data[$ky] * $array_price[0]['price']
		);
		if($data[$ky] < 1){
			$this->Model_Barang->delete_cart($id, $ky);
		}
		else {
			$this->Model_Barang->edit_cart($new);
		}
	}; 
	redirect('Control/'.$url);
  }
}
