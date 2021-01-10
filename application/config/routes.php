<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'App';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['tamu/delete/(:num)'] = 'controller/hapus/$1';
