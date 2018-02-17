<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['dashboard/company'] = 'dashboard/company';
$route['copy'] = 'createweb/directory_copy';

$route['createweb'] = 'createweb/index';
$route['admin'] = 'admin/login';
$route['login'] = 'users/login';
$route['logout'] = 'users/logout';
$route['register'] = 'users/register';
$route['dashboard'] = 'dashboard/view';
$route['dashboard/(:any)'] = 'dashboard/view/$1';
$route['filess'] = 'filess/write';
$route['filess/(:any)'] = 'filess/write/$1';
$route['welcome'] = 'welcome/index';
$route['http://localhost/welcome'] = 'welcome/index';
$route['default_controller'] = 'okaysion_controller/view';
$route['(:any)'] = 'okaysion_controller/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
