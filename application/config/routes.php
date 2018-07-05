<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['index'] = 'welcome/index';
$route['principal'] = 'welcome/indexuser';
$route['olvidemiclave'] = 'welcome/olvideClave';
$route['formulario'] = 'welcome/form';
$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
//ADMIN
$route['administrador'] = 'administrador/index';
$route['camaraenvivo'] = 'administrador/camara';
$route['registrar'] = 'administrador/crearuser';
$route['crearusuario'] = 'administrador/crearusuario';
$route['condominios'] = 'administrador/condominios';
$route['edificios'] = 'administrador/edificios';
$route['departamentos'] = 'administrador/departamentos';
$route['editarusuario'] = 'administrador/editaruser';
$route['usuarios'] = 'administrador/usuarios';
$route['eliminarUsuario'] = 'administrador/eliminarUsuario';
$route['editarUsuario'] = 'administrador/editarUsuario';
$route['crearrov'] = 'administrador/crearrov';//metodo
$route['crearrv'] = 'administrador/crearrv'; //carga pagina
$route['regres'] = 'administrador/regres';
$route['crearresidente'] = 'administrador/crearresidente';
$route['he'] = 'administrador/he';
$route['habilitare'] = 'administrador/habilitare';
$route['deshabilitare'] = 'administrador/deshabilitare';
$route['deshabilitaredificio'] = 'administrador/deshabilitaredificio';
$route['eresidente'] = 'administrador/estresidente';
$route['buscarresidente'] = 'administrador/buscarresidente';
$route['buscarvisita'] = 'administrador/buscarvisita';
$route['buscarvisita2'] = 'administrador/buscarvisita2';
$route['buscarresidenteeditar'] = 'administrador/buscarresidenteeditar';
$route['estacioresidente'] = 'administrador/estacioresidente';
$route['vehiculoVisita']= 'administrador/vehiculoVisita';
$route['vehiculoResidente']= 'administrador/vehiculoResidente';
$route['visitayvehiculo']= 'administrador/visitayvehiculo';
$route['crearvis'] = 'administrador/crearvis';
$route['crearres'] = 'administrador/crearres';
$route['crearvisita'] = 'administrador/crearvisita';
$route['editarrv'] = 'administrador/editarrv';
$route['eliminarRv'] = 'administrador/eliminarRv';
$route['editarRv'] = 'administrador/editarRv';
$route['personas'] = 'administrador/personas';
$route['residentes'] = 'administrador/residentes';
$route['estacionamientos'] = 'administrador/estacionamientos';
$route['editarRev'] = 'administrador/editarRev';
$route['visitas'] = 'administrador/visitas';
$route['mostrarvisitas'] = 'administrador/mostrarvisitas';
$route['dExcel'] = 'administrador/dExcel';
$route['registro'] = 'administrador/registro';
$route['vm'] = 'administrador/vxm';
//GUARDIA
$route['guardia'] = 'guardia/index';


$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
