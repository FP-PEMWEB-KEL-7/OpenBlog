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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'Home/index';
$route['about'] = 'About/index';
$route['login']['GET'] = 'Login/index';
$route['login']['POST'] = 'Login/post';
$route['signup']['GET'] = 'Signup/index';
$route['signup']['POST'] = 'Signup/post';
$route['logout'] = 'Logout/index';
$route['setting']['GET'] = 'Setting/index';
$route['setting']['POST'] = 'Setting/post';
$route['write']['GET'] = 'Write/index';
$route['write']['POST'] = 'Write/post';
$route['post/(:num)']['GET'] = 'Post/index/$1';
$route['edit/(:num)']['GET'] = 'Edit/index/$1';
$route['edit/(:num)']['POST'] = 'Edit/post/$1';
$route['confirm_delete/(:num)']['GET'] = 'Delete/index/$1';
$route['proceed_delete/(:num)']['GET'] = 'Delete/proceed/$1';
$route['search']['POST'] = 'Home/search';
