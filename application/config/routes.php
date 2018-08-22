<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['backend/cliente/administrador/perfiles/(:any)'] = 'backend/administrador/usuario/Perfiles/index/$1';
$route['backend/cliente/usuario/perfiles/(:any)'] = 'backend/cliente/usuario/Perfiles/index/$1';
$route['backend/cliente/solicitud/solicitudes/(:any)'] = 'backend/cliente/solicitud/Solicitudes/$1';

$route['default_controller'] = 'logins/view';
$route['(:any)'] = 'logins/view/$1'; /// cualquier pagina que este dentro de esta ruta $1 = representa cualquiera
//$route['(:any)'] = 'backend/cliente/$1'; /// cualquier pagina que este dentro de esta ruta $1 = representa cualquiera
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['administrador/clientes/ccliente/activar/([0-9]+)'] ="administrador/clientes/ccliente/activar/$1" ;

