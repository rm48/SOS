<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Rotas para Formas de pagamento*/
$route['modulo'] = 'formas_pagamt/index';
$route['modulo/add'] = 'formas_pagamt/add';
$route['modulo/edit/(:num)'] = 'formas_pagamt/edit/$1';
$route['modulo/del/(:num)'] = 'formas_pagamt/del/$1';

/*Rotas para Ordens de serviço*/
$route['os'] = 'Ordens_serv/index';
$route['os/add'] = 'Ordens_serv/add';
$route['os/edit/(:num)'] = 'Ordens_serv/edit/$1';
$route['os/del/(:num)'] = 'Ordens_serv/del/$1';