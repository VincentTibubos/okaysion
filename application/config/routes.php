<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['amessage/(:any)'] = 'amessage/$1';
$route['amessage'] = 'amessage';
$route['company/check'] = 'company/checkcompany';

$route['dashboard/messages/(:any)'] = 'dashboard/messages/$1';
$route['dashboard/messages'] = 'dashboard/messages';
$route['dashboard/company'] = 'dashboard/company';
$route['dashboard/service'] = 'dashboard/service';
$route['dashboard/customer'] = 'dashboard/customer';
$route['dashboard/calendar'] = 'dashboard/calendar';
$route['calendar'] = 'calendar/index';
$route['copy'] = 'createweb/directory_copy';

$route['createweb'] = 'createweb/index';
$route['admin/check'] = 'admin/checkadmin';
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
