<?php
/**
 * Controlador inicial ( por lo general pagina principal de la web )
 *
 * NOTA: todo controlador nuevo debe extender la clase 'Controlador'
 * @see sistema/Nucleo/Controlador.php
 */
class Inicio extends Controlador{

	public function __construct(){
		/**
		 * Invocamos al constructor de la clase Controlador
		 * para este se encarge de ejecutar el 'metodo' que 
		 * corresponda...
		 */
		parent::__construct();
	}

	/**
	 * Este metodo 'index' es el que TODO controlador debe tener porque
	 * es la accion por defecto que se ejecutaria de ese controlador en caso
	 * que no haya o no coincida un metodo al momento de llamarlo por el
	 * Enturador.
	 */
	function index(){
		// Colocamos el titulo de metodo actual
		Enrutador::$arreglo_titulo_pagina[] = "Inicio";

		// Cargamos el modelo (modelado de base de datos) en que vamos a trabajar
		new CargarModelo("ModeloInicio");

		// Instaciamos el modelo
		//$Inicio = ;

		/**
		 * Instaciamos la vista y le enviamos los 2 parametros claves.
		 *
		 * @param string |  archivo que va ejecutar para mostrarse como el html a
		 * 					mostrar, este archivo esta en la carpeta sistema/Vistas/
		 *
		 * @param mixed	 | 	Valores que se envia solo para ser mostrados en la vista.
		 * 					Estos valores ya se envian de la base y procesados.
		 */
		//new Vista( "inicio.php" , $Inicio->obtenerDatosInicio() );
		new Vista( "inicio.php" , new ModeloInicio );
	}
}
