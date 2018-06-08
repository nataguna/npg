<?php
	class Home_Model extends CI_Model {
		public function is_email_exist($email)
		{
			$this->db->where('username', $email);
			$q = $this->db->get('user');
			return $q->num_rows()>0?TRUE:FALSE;
		}
	
		function get_user($username)
		{
			return $this->db->get_where('user',array('username'=>$username))->row_array();
		}
	
		public function tambah($params)
		{
			return $this->db->insert('user', $params);
		}
		
		public function tambah_detail($params)
		{
			return $this->db->insert('registrasi_siswa', $params);
		}
		
		function cek($username, $password) 
		{
			$this->db->where("username", $username);
			$this->db->where("password", $password);
			return $this->db->get("user");
		}
	}