<?php
/**
 * Base para el sistema, segun metodologia MVC  (Titulo del sistema)
 *
 * (Descripcion del sistema) (Descripcion del sistema)
 * (Descripcion del sistema) (Descripcion del sistema)...
 *
 * @package 	APP
 */

/**
 * Define la carpeta actual donde se monta el proyecto.
 * En este caso, si estas en localhost pondrias la carpeta de
 * proyecto con el '/' inicial ejemplo: '/miproyecto'.
 * Si estas en un hosting online y tu proyecto esta en la 
 * raiz, tendrias que dejarlo vacio.
 *
 */
define( 'APP_BASE' 		, '/mvc-base');

/**
 * Define version actual de la aplicacion
 */
define( 'APP_VERSION'	, '1.0');

/**
 * Define la URL de lado del servidor
 */
define( 'APP_RUTA'		, $_SERVER['DOCUMENT_ROOT'] . APP_BASE );

/**
 * Define la URL de lado del cliente (publica)
 */
define( 'APP_URL'		, "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] );

/**
 * Carga archivo inicial del sistema
 *
 * Aqui carga todo los archivos que tienen que ver con el 
 * NUCLEO inicial.
 * Tambien es usado para cargar el archivo de configuracion
 *
 * @since 1.0
 */
include 'sistema/Nucleo/Inicial.php';
$Router = new Enrutador();