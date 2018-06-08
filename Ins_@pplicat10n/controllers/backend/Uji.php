<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uji extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Regis_model');
        $this->load->library('form_validation');
		
		//Cek Session
		/* if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("login"));
		} */
		
		
		function seo_title($s) 
		  {
			$c = array (' ');
			$d = array ('-','/','\\',',','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
			$s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
			$s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
			return $s;
		  }
    }

	public function index()
	{
		$uji_regis = $this->Regis_model->get_all();
		
        $data = array(
            'uji_regis_data' => $uji_regis,
        );
		$this->load->view('backend/list_uji',$data);
	}
}