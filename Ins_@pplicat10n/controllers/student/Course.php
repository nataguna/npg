<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
	
	public function course101(){
		$this->load->view('course/inscinema-course101/inscinema-kursus-1');
	}

	public function tatakamera(){
		$this->load->view('course/inscinema-course-tatakamera');
	}

	public function course102(){
		$this->load->view('course/inscinema-course-tino/tino-01-materi-02-slide');
	}
}
