<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home/index';
$route['contactUs'] = 'Home/contact';
$route['career'] = 'Home/career';
$route['aboutUs'] = 'Home/aboutUs';
$route['businessPlan'] = 'Home/businessPlan';
$route['features'] = 'Home/features';
$route['ourTeam'] = 'Home/ourTeam';
$route['contactForm'] = 'Form/contactus';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
