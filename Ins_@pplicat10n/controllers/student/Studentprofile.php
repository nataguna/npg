<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Student page profile
*/

class Studentprofile extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('Student_model');
        	$this->load-helper('url');
    }

	function index(){if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));
 
//			$users = $this->Student_model->cek_users($username,$password);
//			$pegawai = $this->Student_model->cek_pegawai($username,$password);
 
		    $row1 = $users->row_array();
//		    $row2 = $pegawai->row_array();
 
		    $total_users = $users->num_rows();
//		    $total_pegawai = $pegawai->num_rows();
 
			if ($total_users > 0){
				$this->session->set_userdata(array(
					'id'=>$row1['username'],
					'level'=>'users'
				)
			);
				redirect('Administrator/home');
			}elseif($total_pegawai > 0){
				$this->session->set_userdata(array(
					'id'=>$row2['id_pegawai'],
					'level'=>'pegawai')
				);
				redirect('Pegawai/home');
			}else{
				echo "<script>window.alert('Maaf, gagal Login');
                                  window.location=('login')</script>";
			}
		}else{
			$this->load->view('login');
		}
	}
}
?>