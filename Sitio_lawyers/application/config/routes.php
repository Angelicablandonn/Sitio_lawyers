<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Usuario/index';
$route['About'] = 'Usuario/about';
$route['Home'] = 'Usuario/home';
$route['Attorneys'] = 'Usuario/attorneys';
$route['Blog'] = 'Usuario/blog';
$route['Case'] = 'Usuario/case';
$route['Contact'] = 'Usuario/contact';
$route['Admin_login'] = 'Administrador/Login';
$route['Tables'] = 'Administrador/tables';
$route['Dashboard'] = 'Administrador';
$route['Login'] = 'Usuario/login';
$route['Practice_areas'] = 'Usuario/practice_areas';
$route['Register'] = 'Usuario/register';
$route['Verificar_usuario'] = 'Usuario/verificar_usuario';
$route['Index'] = 'Usuario/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['gestionar-abogados'] = 'Administrador/listar_abogados';
$route['gestionar-abogados/agregar'] = 'administrador/gestionar_abogados_agregar';
$route['gestionar-abogados/guardar'] = 'administrador/gestionar_abogados_guardar';
$route['gestionar-abogados/editar'] = 'administrador/gestionar_abogados_editar';
$route['gestionar-abogados/eliminar/(:any)'] = 'administrador/gestionar_abogados_eliminar/$1';
$route['gestionar-usuarios/editar'] = 'administrador/gestionar_usuario_editar';
$route['gestionar-usuarios/eliminar/(:any)'] = 'administrador/gestionar_usuario_eliminar/$1';
$route['gestionar-solicitudes/eliminar/(:any)'] = 'administrador/gestionar_solicitudes_eliminar/$1';
$route['gestionar-usuarios/buscar/(:any)'] = 'administrador/gestionar_usuarios_buscar/$1';
$route['gestionar-abogados/listar'] = 'Administrador/listar_abogados';
$route['gestionar-abogados/buscar/(:any)'] = 'administrador/gestionar_abogados_buscar/$1';
$route['gestionar-solicitudes/buscar/(:any)'] = 'administrador/gestionar_solicitudes_buscar/$1';
$route['registrar-usuarios'] = 'Usuario/registrar_usuarios';
$route['registrar-solicitud'] = 'Usuario/registrar_solicitudes';
$route['registrar-abogados'] = 'Abogados/registrar_abogados';
$route['guardar-abogados'] = 'Administrador/guardar_abogados';
$route['guardar-usuarios'] = 'Administrador/guardar_usuarios';
$route['guardar-solicitud'] = 'Administrador/guardar_solicitud';
$route['gestionar-usuarios/agregar'] = 'administrador/gestionar_usuarios_agregar';
$route['gestionar-solicitudes/agregar'] = 'administrador/gestionar_solicitudes_agregar';
$route['gestionar-solicitudes/editar'] = 'administrador/gestionar_solicitudes_editar';
$route['gestionar-solicitudes/listar'] = 'administrador/listar_solicitudes';
$route['gestionar-usuarios/listar'] = 'administrador/listar_usuarios';
$route['gestionar-solicitudes/listar-recibidas'] = 'administrador/listar_solicitudesrecibidas';
$route['gestionar-solicitudes/listar-enproceso'] = 'administrador/listar_solicitudesenproceso';
$route['gestionar-solicitudes/listar-resueltas'] = 'administrador/listar_solicitudesresueltas';
$route['cerrar-sesion']='Usuario/cerrar_sesion';
$route['cerrar-sesionA']='Administrador/cerrar_sesion';
$route['Verificar_administrador']='Usuario/verificar_administrador';

