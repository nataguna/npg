<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Student page profile
*/

class Profiles extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $this->load->view('home.html');
    }

    public function detailstudent($id){
        $this->load->model("student_model");
        $data['default'] = $this->student_model->load_student($id);
        $this->load->view("student/inscinema-profile-student",$data);
    } 

    public function teacher(){
        $this->load->view('teacher/course101/inscinema-course-101');
    }
}
?>