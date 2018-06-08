<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Regis_Model extends CI_Model {
		
	public $table = 'registrasi';
    public $id = 'id_registrasi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
		
		function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
		
		public function tambah($params)
	{
		return $this->db->insert('registrasi', $params);
	}
				
	}