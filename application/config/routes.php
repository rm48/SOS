<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['modulo'] = 'formas_pagamt/index';
$route['modulo/add'] = 'formas_pagamt/add';
$route['modulo/edit/(:num)'] = 'formas_pagamt/edit/$1';
$route['modulo/del/(:num)'] = 'formas_pagamt/del/$1';
