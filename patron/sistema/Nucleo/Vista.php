<?php
/**
 * Vista (Layout)
 *
 * - Verifica si existe la vista invocada
 * - Coloca la pantilla de la cabecera|lateral|pie de pagina
 *
 * @package    App
 * @subpackage App/Nucleo
 */
class Vista{
	/**
	 * El constructor de la clase recibe 2 param

	 etros
	 *
	 * @param string 	$vista 		Nombre de archivo fisico de la vista
	 * @param mixed 	$datos 		Datos que son procesados anteriormente en el modelo y pasados por
	 * 								por parametro en esta variable para mostrarlo en la vista.
	 */
	function __construct($vista, $datos = null){
		// Verifica si la vista existe
		if( file_exists( APP_RUTA_VISTAS . $vista ) ){
			// Verifica de un archivo de cabecera en plantilla existe, en ese caso lo muestra
			if( file_exists( APP_RUTA_VISTAS . 'plantilla/' . PLANTILLA_CABECERA ) ) require APP_RUTA_VISTAS . 'plantilla/' . PLANTILLA_CABECERA; else die("No se encuentra encabezado!");
			// Muestra la vista
			require APP_RUTA_VISTAS . $vista;
			// Verifica de un archivo de pie en plantilla existe, en ese caso lo muestra
			if( file_exists( APP_RUTA_VISTAS . 'plantilla/' . PLANTILLA_PIE ) ) require APP_RUTA_VISTAS . 'plantilla/' . PLANTILLA_PIE; else die("No se encuentra pie de pagina!");
		}
	}
}