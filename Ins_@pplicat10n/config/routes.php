<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//front
//Aryo
$route['home'] = 'front/home';
$route['teachers'] = 'front/teachers';
$route['aboutus'] = 'front/aboutus';
$route['add-member'] = 'front/home/add';
$route['add-detail-member'] = 'front/home/add_detail';
$route['login'] = 'front/home/proses';
$route['logout'] = 'front/home/proses_out';
$route['detail'] = 'front/home/detail_regitrasi';
$route['uji-kompetensi'] = 'front/uji';
$route['regis-uji'] = 'front/uji/register_uji';
$route['regis-uji-add'] = 'front/uji/add';
$route['e-course'] = 'front/course';
$route['regis-course'] = 'front/course/register_course';
$route['regis-course-add'] = 'front/course/add';


//front
$route['gallery'] = 'front/gallery';
$route['onlinelearning'] = 'front/onlinelearning';
$route['tatacarapendaftaran'] = 'front/tatacarapendaftaran';
$route['pendaftaran'] = 'front/pendaftaran';
$route['jadwalkursus'] = 'front/jadwalkursus';
$route['contactus'] = 'front/contactus';
$route['loginregister'] = 'front/loginregister';

//student and teacher
$route['menu'] = 'student/menu';
$route['studentdetail'] = 'student/detail/std';
$route['updatestudent'] = 'student/detail/upd';
$route['avatar'] = 'student/upload/upload_image';
$route['teacherdetail'] = 'teacher/profiles/teacher';
$route['profile/(:num)'] = 'student/profiles/detailstudent/$id';

//teacher
$route['teachersprofile'] = 'front/teachersprofile';
$route['teachernaratama'] = 'front/teachernaratama';
$route['teacherjaysubyakto'] = 'front/teacherjaysubyakto';
$route['teacherdutosulystiadi'] = 'front/teacherdutosulystiadi';
$route['teacherandichairil'] = 'front/dutosulyastiadi';
$route['teacheradekazhar'] = 'front/teacheradekazhar';
$route['teacherbarlyjuanfibriady'] = 'front/teacherbarlyjuanfibriady';
$route['teacherdesyanwar'] = 'front/teacherdesyanwar';
$route['teacherpranudyawardhani'] = 'front/teacherpranudyawardhani';
$route['teachersasthasunu'] = 'front/teachersasthasunu';
$route['teachertinodwiantoro'] = 'front/teachertinodwiantoro';

//News
$route['news'] = 'front/news';
$route['news/create'] = 'front/news/create';
$route['news/edit/(:any)'] = 'front/news/edit/$1';
$route['news/view/(:any)'] = 'front/news/view/$1';
$route['news/(:any)'] = 'front/news/view/$1';

//Course
$route['tatakamera'] = 'student/course/tatakamera';

//backend
$route['admin-home'] = 'backend/home';
$route['list-uji'] = 'backend/uji';
$route['list-course'] = 'backend/course';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
