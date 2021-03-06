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
$route['home/(:any)'] = "home/$1";

$route['safelink/(:any)'] = "home/safelink/$1";

$route['admin'] = "admin";
$route['admin/(:any)'] = "admin/$1";
$route['admin_system/(:any)'] = "admin_system/$1";

$route['member'] = "member";
$route['member/(:any)'] = "member/$1";
$route['member_system/(:any)'] = "member_system/$1";

$route['profile/(:any)'] = "profile/index/$1";

$route['error'] = "error";
$route['error/(:any)'] = "error/$1";

$route['upload'] = "upload";
$route['upload/(:any)'] = "upload/$1";

$route['blog'] = "blog";
$route['blog/(:any)'] = "blog/index/$1";
$route['blog_system/(:any)'] = "blog_system/$1";

$route['b'] = "b";
$route['b/(:any)'] = "b/index/(:any)";

$route['c'] = "c";
$route['c/(:any)'] = "c/index/$1";

$route['api/(:any)'] = "api/$1";

$route['search'] = "search";
$route['search/(:any)'] = "search/$1";

$route['example'] = "example";
$route['example/(:any)'] = "example/$1";

$route['sitemap'] = "sitemap";
$route['sitemap\.xml'] = "sitemap";

$route['(:any)'] = "home/index/$1";

$route['default_controller'] = "home";
$route['404_override'] = 'error/error_404';
$route['translate_uri_dashes'] = FALSE;
