<?php
class Model_auth extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}


}