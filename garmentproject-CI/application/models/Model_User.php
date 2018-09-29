<?php

class Model_User extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	public function get_all()
    {
        $query = $this->db->order_by('firstname','DESC')->get('userdata');
        return $query->result();
    }
    public function get_user($id){
        $query = $this->db->where('id', $id)->order_by('firstname','DESC')->get('userdata');
        return $query->result();
    }

    public function daftar_user($data){
        $this->db->insert('userdata',$data);
        return true;
    }

      public function login_user($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',md5($data['password']));

        $result = $this->db->get('userdata');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }

    public function edit_data(){
        $data = array(
           'email' => $this->input->post('email'),
           'firstname' => $this->input->post('firstname'),
           'lastname' => $this->input->post('lastname'),
           'password' => $this->input->post('password'),
        );
        $id = $this->session->userdata['username'];
        $this->db->where('username', $id);
        $update = $this->db->update('userdata',$data);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function delete_data($id){
        $table = 'userdata';
        $this->db->where('username', $id);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    } 							
}