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

 /*   public function detailstudent(){
        $this->load->model('model_student');
        $data['list_student'] = $this->model_data->load_student();

        $this->load->view('student/table_form',$data);
    } */
 
    public function detailstudent($email){
        $this->load->model("model_student");
        $data['tipe'] = "Edit";
        $data['default'] = $this->model_data->load_student($email);

        if(isset($_POST['tombol_submit'])){
            $this->model_data->update($_POST, $email);
            redirect("data");
        }

        $this->load->view("table_form",$data);
    }
}
?>