<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uji extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Regis_model');
    }
	
	function jin_date_sql($date){
	$exp = explode('/',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
	}

	public function index()
	{
		$this->load->view('front/uji-kompetensi');
	}
	
	public function register_uji() 
    {
        $data = array(
        'nama' => set_value('nama'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'agama' => set_value('agama'),
	    'jns_kel' => set_value('jns_kel'),
	    'alamat' => set_value('alamat'),
	    'kota' => set_value('kota'),
	    'provinsi' => set_value('provinsi'),
	    'email' => set_value('email'),
	    'telp_hp' => set_value('telp_hp'),
	    'asal_pt' => set_value('asal_pt'),
	    'kota_pt' => set_value('kota_pt'),
	    'uji_kompetensi' => set_value('uji_kompetensi'),		
	);
        $this->load->view('front/registrasi-uji', $data);
    }
	
	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('jns_kel','Jenis Kelamin','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('kota','Kota','required');
		$this->form_validation->set_rules('provinsi','Provinsi','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('telp_hp','Telepon HP','required|min_length[11]');
		$this->form_validation->set_rules('asal_pt','Asal Sekolah/PT','required');
		$this->form_validation->set_rules('kota_pt','Kota Sekolah/PT','required');
		$this->form_validation->set_rules('uji_kompetensi','Uji Kompetensi','required');
				
		$nama = $this->input->post('nama', TRUE);
		$tempat_lahir = $this->input->post('tempat_lahir', TRUE);
		$tgl_lahir = $this->jin_date_sql($this->input->post('tgl_lahir', TRUE));
		$agama = $this->input->post('agama', TRUE);
		$jns_kel = $this->input->post('jns_kel', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$kota = $this->input->post('kota', TRUE);
		$provinsi = $this->input->post('provinsi', TRUE);
		$email = $this->input->post('email', TRUE);
		$telp_hp = $this->input->post('telp_hp', TRUE);
		$asal_pt = $this->input->post('asal_pt', TRUE);
		$kota_pt = $this->input->post('kota_pt', TRUE);
		$uji_kompetensi = $this->input->post('uji_kompetensi', TRUE);
			
		if($this->form_validation->run())     
        {   
            $params = array(
				'nama' => $nama,
				'tempat_lahir' => $tempat_lahir,
				'tgl_lahir' => $tgl_lahir,
				'agama' => $agama,
				'jenis_kelamin' => $jns_kel,
				'alamat' => $alamat,
				'kota' => $kota,
				'provinsi' => $provinsi,
				'email' => $email,
				'no_telp' => $telp_hp,
				'asal_pt' => $asal_pt,
				'kota_pt' => $kota_pt,
				'pilihan' => $uji_kompetensi,
				
			);
            
            $user_id = $this->Regis_model->tambah($params);
			redirect(site_url('home'));			
        }
        else
        {            
            $this->register_uji();
        }
	
	}
	
	private function kirim_email($email)
	{
		$this->load->library('email');
		$config['useragent'] = $this->pt['akronim'];
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from($this->pt['email'], 'PMB '.$this->pt['akronim']);
		$this->email->to($email['to']);
		$this->email->subject($email['subject']);
		$this->email->message($email['message']);
		$this->email->attach($email['attach'], "inline");
		return $this->email->send();
	}
	
}