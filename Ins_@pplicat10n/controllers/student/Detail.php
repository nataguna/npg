<?php
class Detail extends CI_Controller {

function __construct(){
        parent::__construct();
        $this->load->model('StudentModel');
        $this->load->helper('url');
    }

public function index(){
        $this->load->view('student/inscinema-profile-student');

	 }

public function std()
{
    $data['record']=$this->StudentModel->getDetails();
 /*   if (empty($data['record']))
        {
            show_404();
        }
 */
//    $this->load->view('student/tampil-student',$data);
        $this->load->view('student/inscinema-profile-student',$data);
}

public function upd(){
    $id=$_POST['id'];
    if(isset($_POST['BtnSubmit'])){
        $this->StudentModel->UpdateProfile($_POST, $id);
        redirect('studentdetail');            
    }
}

public function pic(){

}

function resize_upload(){

}

}
?>