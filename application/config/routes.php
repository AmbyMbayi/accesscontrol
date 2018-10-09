<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['accesscontrols/index'] = 'accesscontrols/index';
$route['accesscontrols'] ='accesscontrols/index';

$route['default_controller'] = 'users/login';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
