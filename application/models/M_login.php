<?php 

class M_login extends CI_Model{	
	function cek_login($username){		
		$this->db->select('password');
    	$this->db->where('username', $username);
    	$pass = $this->db->get('admin');
    	return $pass->row();
	}	
	function ambil_idadmin($username){
		$this->db->select('id_admin');
		$this->db->where('username',$username);
		$id_user = $this->db->get('admin');
		return $id_user ->row();
	}
}