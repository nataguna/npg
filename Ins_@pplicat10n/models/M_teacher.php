<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_teacher extends CI_Model
    {

        public function __construct()
        {
            parent::__construct();
        }

        function naratama(){
            $data['teacher']="teacher-inncinema-naratama";
            return $data;
        }
    }
?>