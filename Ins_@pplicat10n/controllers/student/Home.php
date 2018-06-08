<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

	public function index()
	{
		$this->load->view('student/home');
	}
	
	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|valid_email|callback_cek_email');
		$this->form_validation->set_rules('password','Password','required|min_length[8]');
		$this->form_validation->set_rules('conf_pass','Conf Pass','required|min_length[8]|matches[password]');
		$this->form_validation->set_message('cek_email', 'Email Tersebut Sudah Ada.');
		
		if($this->form_validation->run())     
        {   
            $username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			
			$params = array(
				'username' => $username,
				'password' => $password,
			);
            
            $user_id = $this->Home_model->tambah($params);
			$user = $this->Home_model->get_user($username);
				$data_sesi = array(
					'username'=>$user->username, 
					'password'=>$user->password, 
				);
				$this->session->set_userdata($data_sesi);
            redirect(site_url('home'));
        }
        else
        {            
            $this->load->view('front/inscinema-registrasi');
        }
	}
	
	public function add_detail()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required|valid_email|callback_cek_email');
		$this->form_validation->set_rules('password','Password','required|min_length[8]');
		$this->form_validation->set_rules('conf_pass','Conf Pass','required|min_length[8]|matches[password]');
		$this->form_validation->set_message('cek_email', 'Email Tersebut Sudah Ada.');
		
		if($this->form_validation->run())     
        {   
            $username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			
			$params = array(
				'username' => $username,
				'password' => $password,
			);
            
            $user_id = $this->Home_model->tambah($params);
			$user = $this->Home_model->get_user($username);
				$data_sesi = array(
					'username'=>$user->username, 
					'password'=>$user->password, 
				);
				$this->session->set_userdata($data_sesi);
            redirect(site_url('home'));
        }
        else
        {            
            $this->load->view('front/inscinema-detail-registrasi');
        }
	}
	
	public function proses() 
	{
		//echo ($this->input->post('username'));
		//exit();
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			//exit('atk');
			redirect(site_url('home'));
		} else {
		//exit('test');
		$usr = $this->input->post('username');
		$psw = $this->input->post('password');
		$u = $usr;
		$p = $psw;
		$cek = $this->Home_model->cek($u,$p);
		if ($cek->num_rows() > 0) {
			//login berhasil, buat session
			foreach ($cek->result() as $qad) {
				//$sess_data['id_pengguna'] = $qad->id_pengguna;
				//$sess_data['nama_pengguna'] = $qad->nama_pengguna;
				$sess_data['username'] = $qad->username;
				$sess_data['id'] = $qad->id_user;
				//$sess_data['level'] = $qad->level;
				$this->session->set_userdata($sess_data);
				}
			$this->session->set_flashdata('success', 'Login Berhasil !');
			redirect(site_url('home'));
			} else {
			$this->session->set_flashdata('result_login', '
			Username atau Password yang anda masukkan salah.');
			redirect(base_url('login'));
			}
		}
	}
	
	public function cek_email($email)
	{
		return ! $this->Home_model->is_email_exist($email);
	}
	
	public function proses_out()
	{
		$this->session->sess_destroy();
		
		redirect(base_url());
	}
	
	public function detail_regitrasi()
	{
		$this->load->view('front/inscinema-detail-registrasi');
	}

	public function course101(){
		$this->load->view('course/inscinema-kursus-1');
	}
}
