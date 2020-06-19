<?php 
/**
 * Clases de Utilidades
 *
 * Funciones del sistema para poder simplicar validaciones
 * para los modulos o logica de negocio.
 *
 * @package    App
 * @subpackage App/Librerias
 */
 class Utilidades{
 	
 	/**
	 * Verifica si estas corriendo el sistema en localhost 
	 * o en un servidor en la web.
	 *
	 *  @since 		1.0
	 *  @return 	bool
	 */
	static function APP_esLocalhost(){
		return in_array( $_SERVER['REMOTE_ADDR'] , array( "127.0.0.1","::1" ) );
	}
}
