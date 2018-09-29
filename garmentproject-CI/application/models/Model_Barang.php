<?php

class Model_Barang extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }


	public function get_all()
	{
		$query = $this->db->order_by('itemname','DESC')->get('dataitem');
		return $query->result_array();
	}

	public function get_barang($id){
        $query = $this->db->where('id', $id)->order_by('itemname','DESC')->get('dataitem');
        return $query->result();
    }

    public function delete_data($id){
        $table = 'dataitem';
        $this->db->where('id', $id);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function edit_data($id){
        $data= array(
           'itemname' => $this->input->post('itemname'),
           'price' => $this->input->post('price'),
           'types' => $this->input->post('types'),
           'stock' => $this->input->post('stock'),
        );
        $this->db->where('id', $id);
        $update = $this->db->update('dataitem',$data);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function tambah($data){
			$config['upload_path']          = 'upload/images';
	    $config['allowed_types']        = 'jpeg|jpg|png';
	    $config['max_size']             = '5120';
	    $config['max_width']            = '5120';
	    $config['max_height']           = '5120';

	    $this->load->library('upload', $config);
	    if (!$this->upload->do_upload('berkas')){
	      echo "<script>alert('Gagal Menambahkan Data');</script>";
	      redirect('Control/view_list');
	    } else {
	      $gambar = $this->upload->data();
	      $data = array(
	  		   'itemname' => $this->input->post('itemname'),
	  		   'price' => $this->input->post('price'),
	  		   'types' => $this->input->post('types'),
	  		   'stock' => $this->input->post('stock1'),
	         'images'=> $gambar['file_name']
				 );
        $this->db->insert('dataitem',$data);
        return true;
    }
	}

	public function update_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	public function add_cart($id){
		$data = array(
			'id' => $id
		);
		$this->db->insert('order', $data);
	}		
	public function edit_cart($data){
		$this->db->where('id_barang', $data['id_barang']);
		$this->db->where('id', $data['id']);
		$this->db->update('order',$data);
	}		
	
	public function delete_cart($id, $id_barang){
		$this->db->where('id_barang', $id_barang);
		$this->db->where('id', $id);
		$this->db->delete('order');
	}	
	
	public function add_user_cart($data){
		$this->db->insert('order', $data);
	}

	public function check_cart($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('order');
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function get_cart($id){
        $query = $this->db->where('id', $id)->order_by('itemname','DESC')->get('order');
        return $query->result_array();
    }	
	
	public function get_sum_price($id){
		$this->db->select_sum('total_price');
		$this->db->where('id', $id);
		$result = $this->db->get('order')->row();  
		return $result->total_price;
    }
	
	public function get_price($id, $id_barang){
		$this->db->select('price');
		$this->db->from('order');
		$this->db->where('id', $id);
		$this->db->where('id_barang', $id_barang);
		$result = $this->db->get();  
		return $result->result_array();
    }
	
	public function get_transaction(){
		$query = $this->db->order_by('id_transaksi','DESC')->get('transaksi');
		return $query->result_array();
	}
	
	public function daftar_transaksi($data){
		$this->db->insert('transaksi',$data);
		return true;
	}
}

?>
