<?php
class StudentModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

function getStudent(){
      $this->db->select("user.username,user.flag,student.username,student.nama_lengkap");
      $this->db->from('user');
      $this->db->join('student','student.username = user.username');
      $this->db->where('student',$username);     
      $query = $this->db->get();
      return $query->result(); 
}
/*
  $this->db->select("trn_employee.EMPLOYEE_ID,trn_employee.FIRST_NAME,trn_employee.LAST_NAME,trn_employee.EMAIL,trn_address.ADDRESS_LINE,trn_address.CITY");
  $this->db->from('trn_employee');
  $this->db->join('trn_address', 'trn_address.employee_id = trn_employee.employee_id');
  $query = $this->db->get();
  return $query->result();
 } */

public function get_default($id){
    $sql = $this->db->query("SELECT * FROM student WHERE username = ".$id);
    if($sql->num_rows() > 0)
      return $sql->row_array();
    return false;
  }

public function getDetails(){
    $st = $this->db->SELECT("user.*,student.*");
    $this->db->from('user');
    $this->db->join('student','student.username=user.username');
    $this->db->WHERE('student.username',$this->session->userdata['username']);
    $query=$this->db->get();
    return $query->result();
    //$data=$query->result_array();
  }

function getUpdate($id,$data){
    $this->db->where('id_user',$id);
    $this->db->update('student',$data);
  }

function UpdateProfile($post,$id){
    $nama = $this->db->escape($post['nama']);
    $alamat = $this->db->escape($post['alamat']);
    $email = $this->db->escape($post['email']);
    $phone = $this->db->escape($post['telp_hp']);
    $tgl_lahir = $this->db->escape($post['tgl_lahir']);
    $tempat_lahir = $this->db->escape($post['tempat_lahir']);
    $agama = $this->db->escape($post['agama']);
    $jk = $this->db->escape($post['gender']);
    $alamat = $this->db->escape($post['alamat']);
    $kota = $this->db->escape($post['kota']);
    $provinsi = $this->db->escape($post['provinsi']);
    $asal_pt = $this->db->escape($post['asal_pt']);
    $kota_pt = $this->db->escape($post['kota_pt']);

    $sql = $this->db->query("UPDATE student SET nama_lengkap = $nama, alamat = $alamat, username = $email, jenis_kelamin = $jk, kota = $kota, telepon = $phone, tempat_lahir = $tempat_lahir,tgl_lahir = $tgl_lahir, agama = $agama, provinsi = $provinsi, asal_pt = $asal_pt, kota_pt = $kota_pt WHERE id_user = ".intval($id));

    return true;
}

function UpdatePicture(){
}

}

function simpan_upload($judul,$gambar){
    $hasil=$this->db->query("INSERT INTO tbl_galeri(judul,gambar) VALUES ('$judul','$gambar')");
    return $hasil;
}


?>