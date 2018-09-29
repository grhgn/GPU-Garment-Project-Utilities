<?php

class Barang extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function get_barang(){
		$this->load->database();
        $query = $this->db->get('dataitem');
        return $query->result_array();
    }
	
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	
}