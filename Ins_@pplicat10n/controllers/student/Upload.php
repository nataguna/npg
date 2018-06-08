<?php 
class Upload extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_upload');
        $this->load->library('upload');
    } 
 
    function index(){
        $this->load->view('studentdetail?page=updavatar');
    }
 
    function upload_image(){
 
        $config['upload_path'] = './assetstd/img/student/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assetstd/img/student/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './assetstd/img/student/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
    			$id = $_POST['id'];
    			$gambar['filefoto'] = $this->upload->data()['file_name'];
              //$gambar=$gbr['file_name'];
              //$judul=$this->input->post('xjudul');
                $this->m_upload->simpan_upload($id,$gambar);
                redirect('studentdetail');
                echo "Image berhasil diupload";
            }
                      
        }else{
            echo "Image yang diupload kosong";
        }
                 
    }

} 
?>