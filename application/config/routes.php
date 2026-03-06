<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|	$route['default_controller'] = 'welcome';
||
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'auth';
