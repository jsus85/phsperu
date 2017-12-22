<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Rutas del Front */

$route['default_controller'] = 'home';
$route['servicios/(:any)/(:num)']  = 'home/servicios/$1/$2';

$route['blog']  = 'home/blog';
$route['blog/(:any)/(:num)']  = 'home/blog/$1/$2';

/*Rutas del Admin */
$route['admin'] = 'login';
$route['panel'] = 'login/panel';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
