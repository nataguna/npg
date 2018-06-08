<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Teachersprofile extends CI_Controller {

	public function index() {
		    $data['title']="Teachers Profile";
		    $this->load->view ('front/inscinema-teacher', $data); //menampilkan halaman pertama
    }

    function __construct()
    {
        parent::__construct();
    }

    public function teacher(){
        $data['title']="Welcome to ";
        $this->load->view('front/inscinema-teacher',$data);       
    }

    function naratama()
    {
        $data['title']="Welcome to ";
        $this->load->view('front/teachers/teacher-inscinema-naratama',$data);
   
    }

  	function adekazhar()
    {
		$data['title']="Welcome to Adek Azhar Page";
       	$this->load->view('front/teachers/teacher-inscinema-adek-azhar',$data);
   
   }

	function andichairil()
    {
		$data['title']="Welcome to Andi Chairil Page";
        $this->load->view('front/teachers/teacher-inscinema-andi-chairil',$data);

    }

    function barlyjuanfibriady()
    {
        $data['title']="Welcome to Barly Juan Fibriady";
        $this->load->view('front/teachers/teacher-inscinema-barly-juan-fibriady',$data);

    }

    function dessyanwar()
    {
        $data['title']="Welcome to Dessy Anwar";
        $this->load->view('front/teachers/teacher-inscinema-dessy-anwar',$data);

    }

    function dutosulystiadi()
    {
        $data['title']="Welcome to Duto Sulyatiadi";
        $this->load->view('front/teachers/teacher-inscinema-duto-sulystiadi',$data);

    }

    function jaysubyakto()
    {
        $data['title']="Welcome to Jay Subyakto";
        $this->load->view('front/teachers/teacher-inscinema-jay-subyakto',$data);

    }

    function lintangpranudyawardhani()
    {
        $data['title']="Welcome to Lintang Pranudya Wardhana";
        $this->load->view('front/teachers/teacher-inscinema-lintang-pranudya-wardhani',$data);

    }

    function sasthasunu()
    {
        $data['title']="Welcome to Sastha Sunu";
        $this->load->view('front/teachers/teacher-inscinema-sastha-sunu',$data);

    }

    function almoenirrahmat()
    {
        $data['title']="Welcome to Al Moenir Rahmat";
        $this->load->view('front/teachers/teacher-inscinema-al-moenir-rahmat',$data);

    }

    function tinodwiantoro()
    {
        $data['title']="Welcome to Tino Dwiantoro";
        $this->load->view('front/teachers/teacher-inscinema-tino-dwiantoro',$data);

    }
}