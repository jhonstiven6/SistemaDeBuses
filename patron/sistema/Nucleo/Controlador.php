<?php 
/**
 * Controlador del sistema
 *
 * Lo que realiza es ejecutar el metodo del controlodor
 * actual, en caso que no exista X metodo, entonces
 * ejecuta un metodo por defecto y que debe tener todo
 * controlador en su clase, en este caso lo llamamos 'index'.
 *
 * @package    App
 * @subpackage App/Nucleo
 */
abstract class Controlador{
	function __construct(){
		// Colocamos el titulo inicial del sistema
		Enrutador::$arreglo_titulo_pagina[] = APP_NOMBRE;

		// Valida si la url envia un metodo
		if( Enrutador::$metodo ){
			/**
			 * Entonces validamos si dentro del clase controlador 
			 * existe ese metodo.
			 */
			if( method_exists( $this , Enrutador::$metodo ) ){
				/**
				 * Asignamos el nombre del metodo a una variable
				 * para posteriormente ejecutarlo.
				 */
				$metodo = Enrutador::$metodo;
				$this->$metodo();
			}else{
				echo "Accion no existe";
			}
		}else{
			/**
			 * Si no existe metodo en la URL, entonces ejecutamos el metodo
			 * por defecto.
			 */
			if( method_exists($this,'index') ){
				$this->index();
			}
		}
	}
}