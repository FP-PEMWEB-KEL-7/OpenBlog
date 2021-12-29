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

// website.com/api/user/all , Method: GET, Return: JSON
$route['api/user/all'] = '_API_User/getall'; 
// website.com/api/user/id/1 , Method: GET, Return: JSON
$route['api/user/(:any)/(:any)']['GET'] = '_API_User/getby/$1/$2'; 
// website.com/api/user/email , Method: POST, POST_DATA: value=any, Return: JSON
$route['api/user/(:any)']['POST'] = '_API_User/getby/$1';

// website.com/api/login , Method: POST, POST_DATA: email=any&password=any, Return: JSON
$route['api/login']['POST'] = '_API/login';
// website.com/api/logout , Method: GET, Return: JSON
$route['api/logout']['GET'] = '_API/logout';
// website.com/api/register , Method: POST, POST_DATA: email=any&name=any&password=any, Return: JSON
$route['api/register']['POST'] = '_API/register';

// website.com/api/article/all , Method: GET, Return: JSON
$route['api/article/all'] = '_API_Artikel/get_all'; 
// website.com/api/article/1 , Method: GET, Return: JSON
$route['api/article/(:num)']['GET'] = '_API_Artikel/get_by_id/$1';
// website.com/api/article/author/1 , Method: GET, Return: JSON
$route['api/article/author/(:num)']['GET'] = '_API_Artikel/get_by_author/$1'; 
// website.com/api/article/1/delete , Method: GET, Return: JSON
$route['api/article/(:num)/delete']['GET'] = '_API_Artikel/delete/$1';  
// website.com/api/article/create , Method: POST, Return: JSON
$route['api/article/create']['POST'] = '_API_Artikel/create';  
// website.com/api/article/1/update , Method: POST, Return: JSON
$route['api/article/(:num)/update']['POST'] = '_API_Artikel/update/$1';  
