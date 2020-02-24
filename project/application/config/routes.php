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
$route['default_controller'] = 'homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['signup'] = 'homepage/signup';
$route['test'] = 'homepage/test';
$route['userdata'] = 'homepage/userformdata';
$route['login'] = 'homepage/userlogin';
$route['subservices/(:num)'] = 'homepage/Subservices/$1';
$route['admin/dashboard'] = 'admin/admin_dashboard';
$route['admin/adminlogin'] = 'admin/secure_login_validation';
$route['admin/adminlogout'] = 'admin/logout';
$route['admin/service'] = 'admin/services_group';
$route['admin/createservgrpview'] = 'admin/add_service_group_view';
$route['admin/createservgrp'] = 'admin/add_service_group';
$route['admin/createservcatview'] = 'admin/add_service_category_view';
$route['admin/createservcat'] = 'admin/add_service_category';
$route['admin/subservices'] = 'admin/load_subservices_view';
$route['admin/subservices'] = 'admin/load_subservices_view';
$route['admin/createsubservice'] = 'admin/add_sub_service_view';
$route['admin/createservice'] = 'admin/add_sub_service';
$route['professionals/professionalslogin'] = 'Professionals/Professionalslogin';
$route['professionals/getformdataprofessional'] = 'Professionals/getFormDataProfessional';
$route['professionals/professionalssignup'] = 'Professionals/Professionalssignup';
$route['professionals/professionalsdashborad'] = 'Professionals/professionalsDashborad';
$route['professionals/professionalsprofile'] = 'Professionals/professionalsProfile';
$route['professionals/updateprofessionalprofileform'] = 'Professionals/updateProfessionalProfileForm';
$route['professionals/updateprofiledata'] = 'Professionals/updateProfileData';

