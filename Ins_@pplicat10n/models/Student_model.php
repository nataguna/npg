<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Student model class
 */
class Student_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function load_student($id){
        $sql = $this->db->query("SELECT * FROM user WHERE id_user = ".intval($id));
        if($sql->num_rows() > 0)
            return $sql->row_array();
        return false;
    }

    public function update_student($id){
    	$nama = $this->db->escape($post['nama']);
    	$tempat_lahir = $this->db->escape($post['tempat_lahir']);
		$tgl_lahir = $this->db->escape($post['tgl_lahir']);
		$agama = $this->db->escape($post['agama']);
		$kota = $this->db->escape($post['kota']);
		$provinsi = $this->db->escape($post['provinsi']);
		$username = $this->db->escape($post['email']);
		$telepon = $this->db->escape($post['telepon']);
		$asal_pt = $this->db->escape($post['asal_pt']);
		$kota_pt = $this->db->escape($post['kota_pt']);

		$sql = $this->db->query("UPDATE user SET name = $nama, alamat = $alamat, email = $email WHERE id = ".intval($id));

		return true;
    }
}
?>