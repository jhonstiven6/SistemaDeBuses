<?php
/**
 * Modelo 'Inicio'
 *
 * Logica y procesos de datos para la pagina incial
 * del sistema.
 *
 * NOTA: todo nuevo Modelo debe extender la clase 'Modelo'
 * 		 esta clase tiene todo lo que se refiere a conexion
 * 		 a base de datos y modelado.
 *
 * @see sistema/Nucleo/Modelo.php 
 */
class ModeloInicio extends Modelo{

	private $db;

	public function __construct(){
		/** 
		 * Invocamos al constructor de la clase Controlador
		 * para este se encarge de ejecutar el 'metodo' que 
		 * corresponda...
		 */
		$this->db = parent::instancia();
	}

	/**
	 * Verifica preguntando la hora del sistema
	 * para comprobar si hay conexion a la base de datos
	 *
	 * @since 1.0
	 */
	public function TestConexion(){
		// comentar la linea de abajo
		$this->db->pruebaConexion();
	}

	/**
	 * Primera funcion, aqui se realiza las consulta a base de datos
	 * y se procesa los datos antes de ser enviado a la vista
	 *
	 * @since 1.0
	 */
	function obtenerDatosInicio(){
		// Retorno de datos
		return array(
			array('id'=>1,'nombres'=>'Nombre 1 Apellido 1'),
			array('id'=>2,'nombres'=>'Nombre 1 Apellido 1'),
			array('id'=>3,'nombres'=>'Nombre 1 Apellido 1'),
		);
	}
}