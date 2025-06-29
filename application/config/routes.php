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
$route['os'] = 'Ordem_servicos/index';
$route['os/add'] = 'Ordem_servicos/add';
$route['os/edit/(:num)'] = 'Ordem_servicos/edit/$1';
$route['os/del/(:num)'] = 'Ordem_servicos/del/$1';
$route['os/imprimir/(:num)'] = 'Ordem_servicos/imprimir/$1';
$route['os/pdf/(:num)'] = 'Ordem_servicos/pdf/$1';