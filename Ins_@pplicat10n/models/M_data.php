<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('tbl_member');
	}

	function getBlog($idblog)
	{
	  $data = array();
	  $options = array('idblog' => $idblog);
	  $Q = $this->db->get_where('tb_blogs',$options,1);
	    if ($Q->num_rows() > 0){
	      $data = $Q->row_array();
	    }
	  $Q->free_result();
	  return $data;
	}
}