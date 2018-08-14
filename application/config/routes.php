<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['backend/cliente/(:any)'] = 'backend/cliente/Main/$1';

$route['default_controller'] = 'logins/view';
$route['(:any)'] = 'logins/view/$1'; /// cualquier pagina que este dentro de esta ruta $1 = representa cualquiera
//$route['(:any)'] = 'backend/cliente/$1'; /// cualquier pagina que este dentro de esta ruta $1 = representa cualquiera
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
