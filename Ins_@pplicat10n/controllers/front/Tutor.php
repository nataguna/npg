<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_teacher');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$data['title'] = "Welcome To Tino Dwiantoro Page";
		//$this->load->view('front/teachers/teacher-inscinema-tino-dwiantoro');
		$x['data']=$this->M_teacher->show_teacher();
		$this->load->view('front/teachers/teacher-view',$x);

	}
	function tino()
	{
		//$data['title'] = "Welcome To Tino Dwiantoro Page";
		//$this->load->view('front/teachers/teacher-inscinema-tino-dwiantoro');
		$x['data']=$this->M_teacher->show_teacher_tino();
		$this->load->view('front/teachers/teacher-view',$x);

	}

}
