<?php
/**
 * Define los parametros para la conexion a la base de datos
 */
define( 'BD_USUARIO'		, 'root' );
define( 'BD_CONTRASENA'		, '' );
define( 'BD_HOSPEDAJE' 		, 'localhost' );
define( 'BD_BASEDEDATOS'	, 'mvc-base' );

/**
 * Define una ID o idenficador de la aplicacion
 * sirve para multiples propositos como hasta 
 * un prefijo.
 */
define( 'APP_ID' 		, 'MI_NOMBRE_APLICACION' );

/**
 * Define el titulo corto de la aplicacion
 * esto servira para colocarlo en primer lugar 
 * en el titulo de la etiqueta <title></title>
 */
define( 'APP_NOMBRE' 		, 'Sistema APP' );

/**
 * URL actual
 *
 * @since    1.0
 * @var      string    URI    Actual url para poder procesar el MVC
 */
define( 'URI', $_SERVER['REQUEST_URI'] );

/**
 * 
 * Ruta servidor donde se encuentra el nucleo
 *
 * @since    1.0
 * @var      string    APP_RUTA_NUCLEO
 */
define( 'APP_RUTA_NUCLEO', APP_RUTA . '/sistema/Nucleo/' );

/**
 * 
 * Ruta servidor donde se encuentra las librerias
 *
 * @since    1.0
 * @var      string    APP_RUTA_LIBRERIA
 */
define( 'APP_RUTA_LIBRERIA', APP_RUTA . '/sistema/Librerias/' );

/**
 * 
 * Ruta servidor donde se encuentra los controladores
 *
 * @since    1.0
 * @var      string    APP_RUTA_CONTROLADORES
 */
define( 'APP_RUTA_CONTROLADORES', APP_RUTA . '/sistema/Controladores/' );

/**
 * 
 * Ruta servidor donde se encuentra los modelos
 *
 * @since    1.0
 * @var      string    APP_RUTA_MODELOS
 */
define( 'APP_RUTA_MODELOS', APP_RUTA . '/sistema/Modelos/' );

/**
 * 
 * Ruta servidor donde se encuentra las vistas
 *
 * @since    1.0
 * @var      string    APP_RUTA_MODELOS | PLANTILLA_PIE
 */
define( 'APP_RUTA_VISTAS', APP_RUTA . '/sistema/Vistas/' );

/**
 * Controlador por defecto
 *
 * Si no encuentra un controlador ejecutado en la URL
 * entonces se ejecuta este, por lo general es el de la 
 * pagina principal.
 *
 * @since    1.0
 * @var      string    CONTROLADOR_DEFECTO    Nombre del controlador por defecto
 */
define( 'CONTROLADOR_DEFECTO', 'Inicio' );

/**
 * Variable de nombre de archivos de la cabecera y de 
 * pie de la plantilla.
 *
 * @since    1.0
 * @var      string    PLANTILLA_CABECERA | PLANTILLA_PIE
 */
define( 'PLANTILLA_CABECERA', 'cabecera.php' );
define( 'PLANTILLA_PIE', 'pie.php' );