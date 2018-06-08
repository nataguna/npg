<?php
class M_upload extends CI_Model{
 
    function simpan_upload($gambar,$id){
        $hasil=$this->db->query("UPDATE student SET foto_loc = $gambar WHERE id_user =".intval($id));
        return true;
    }     
}
?>