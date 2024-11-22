<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['login'] = 'api/Auth/login';
$route['register'] = 'api/Auth/register';
$route['pos'] = 'api/Pos/pos';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
