<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_users extends CI_Model{



	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$username = $this->db->escape($post['username']);
		$password = $this->db->escape($post['password']);


		$sql = $this->db->query("INSERT INTO users VALUES (NULL, $username, $password, 1)");
		if($sql)
			return true;
		return false;
	}

	public function load_users(){
		$sql = $this->db->query("SELECT * FROM users WHERE flag = 1");
		return $sql->result_array();
	}

	

}