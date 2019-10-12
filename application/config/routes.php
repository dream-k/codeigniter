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
$route['default_controller'] = 'register';
//register page route
$route['users/register']='register/register';
$route['users/get_email']='register/get_email';
$route['users/get_cell1']='register/get_cell1';
$route['users/get_cell2']='register/get_cell2';
$route['users/update_cell_verified']='register/update_cell_verified';
//app sign in route
$route['app_signin/email_registered']='app_signin/email_registered';
$route['app_signin/match_password']='app_signin/match_password';
$route['app_signin/get_user']='app_signin/get_user';
$route['app_signin/sendSMS']='app_signin/sendSMS';
$route['app/signin']='app_signin';
//admin page route
$route['admin_signin/email_registered']='admin_signin/email_registered';
$route['admin_signin/match_password']='admin_signin/match_password';
$route['admin_signin/get_user']='admin_signin/get_user';
$route['admin_signin/sendSMS']='admin_signin/sendSMS';
$route['admin/signin']='admin_signin';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
