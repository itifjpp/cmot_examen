<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'inicio';
$route['404_override'] = 'inicio/_404';
$route['translate_uri_dashes'] = FALSE;
/**/
$route['medico/(:any)']='inicio/medico';
$route['medicos']='inicio/medicos';
$route['delegadosycomisionados']='inicio/delegadosycomisionados';
$route['delegadosycomisionados/(:any)']='inicio/search_delegados';
$route['contacto']='inicio/contacto';
$route['proceso_certificacion']='inicio/proceso_certificacion';
$route['vigencia_certificacion']='inicio/vigencia_certificacion';
$route['eventos']='inicio/eventos';
$route['cursos']='inicio/cursos';
$route['curso/(:num)']='inicio/ver_curso';
$route['evento/(:num)']='inicio/ver_evento';
$route['miperfil']='inicio/miperfil';
$route['pagos']='inicio/pagos';
$route['realizarpago']='inicio/realizarpago';
$route['noticias/(:num)']='inicio/noticias';
$route['historia']='inicio/historia';
$route['historia/historia_70s']='inicio/historia_70s';
$route['historia/historia_80s']='inicio/historia_80s';
$route['historia/historia_90s']='inicio/historia_90s';
$route['historia/historia_2000']='inicio/historia_2000';
$route['certificacion']='inicio/certificacion';
$route['renovacion_de_vigencia_de_certificacion']='inicio/renovacion_de_vigencia_de_certificacion';
$route['certificacion_curricular']='inicio/certificacion_curricular';
$route['galeria']='inicio/galeria';
$route['estatutos']='inicio/estatutos';