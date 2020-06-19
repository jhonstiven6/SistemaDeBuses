<?php
/**
 * CargarModelo (LoadModel)
 *
 * Lo unico que hace esta clase es cargar el archivo
 * del modelado actual segun el controlador y metodo.
 *
 * @param string 	$modelo 	Nombre del modelo a cargar
 *
 * @package    App
 * @subpackage App/Nucleo
 */
class CargarModelo{

	function __construct( $modelo ){
		// Validamos si existe ese modelo invocado para cargarlo
		if( file_exists( APP_RUTA_MODELOS . $modelo . '.php' ) ){
			require APP_RUTA_MODELOS . $modelo . '.php';
		}else{
			echo "No existe ese modelo";
		}
	}

}