<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'logins/view';
$route['(:any)'] = 'logins/view/$1'; /// cualquier pagina que este dentro de esta rut $1 = replecenta cualquiera
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
