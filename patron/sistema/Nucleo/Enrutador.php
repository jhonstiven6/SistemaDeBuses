<?php 
/**
 * Enrutador (Router) del sistema
 *
 * Obtiene la url actual y separa para obtener controlador, metodo y parametros en
 * caso de tenerlos. Los almacena en variables de la clase y al ultimo ejecuta
 * el controlador encontrado.
 *
 * @package    App
 * @subpackage App/Nucleo
 */
final class Enrutador{
	/**
	 * Almacena la URL actual
	 *
	 * @since    1.0
	 * @access   private
	 * @var      string    $uri 		URL actual
	 */
	private $uri,
	/**
	 * Almacena las posiciones de indice para enviarle los datos
	 * correctos al ruteador.
	 *
	 * @since    1.0
	 * @access   private
	 * @see 	 self::IndicesUrlPosiciones()
	 * @var      array    $url_var_posicion 	Posiciones para el ruteador
	 */
	$url_var_posicion;

	/**
	 * Almacena el nombre del controlador
	 *
	 * @since    1.0
	 * @access   public
	 * @var      string    $controlador 	Nombre del controlador actual para ser ejecutado
	 */
	public static $controlador,
	/**
	 * Almacena el nombre del metodo
	 *
	 * @since    1.0
	 * @access   public
	 * @var      string    $metodo 			Nombre del metodo actual para ser ejecutado
	 */
	$metodo,
	/**
	 * Nombre del parametro
	 *
	 * @since    1.0
	 * @access   public
	 * @var      string    $parametro 		Nombre de los parametros que de la URL
	 */
	$parametro,
	/**
	 * Titulo de la pagina
	 *
	 * @since    1.0
	 * @access   public
	 * @var      string    $arreglo_titulo_pagina 	En cada localidad del arreglo ira una 
	 												nombre que represente la navegacion de la pagina.
	 */
	$arreglo_titulo_pagina = [];

	

	public function __construct(){
		/**
		 * Obtiene la URL y la separa para saber que se debe ejecutar
		 * en este caso el Enrutador lo que permite es saber que Controlador,
		 * Metodo y Parametros existen en la URL para poder tratarlos.
		 */

		// Ayuda a saber en que posicion de la URL esta el Controlador, metodo, parametros.
		$this->IndicesUrlPosiciones();

		/**
		 * Separa por medio del caracter '/' cada elemento de la URL y la coloca en cada localidad
		 * de un arreglo.
		 */
		$this->setUri();

		// Valida y obtiene el controlador a ejecutar
		$this->setControlador();

		// Valida y obtiene el metodo a ejecutar
		$this->setMetodo();

		// Valida y obtiene los parametros para el metodo
		$this->setParametro();



		// Ejecutar el controlador!
		$this->ejecutarControlador();
	}

	/**
	 * Obtiene la URL actual, lo separa por el caracter '/'
	 * y cada uno de esos valores lo coloca en una localidad de 
	 * un arreglo.
	 *
	 * @since 1.0
	 */
	public function setUri(){
		$this->uri = explode( "/", URI );
	}

	/**
	 * Obtiene el nombre del controlador por la URL,
	 * en este caso en localhost seria la posicion 3
	 * en host online seria en la posicion 2.
	 *
	 * @since 1.0
	 */
	public function setControlador(){
		self::$controlador = $this->uri[$this->url_var_posicion['controlador']] === '' ? 'Inicio' : $this->uri[2];
	}

	/**
	 * Obtiene el nombre del metodo por la URL,
	 * en este caso en localhost seria la posicion 2
	 * en host online seria en la posicion 1.
	 *
	 * @since 1.0
	 */
	public function setMetodo(){
		self::$metodo = !empty($this->uri[$this->url_var_posicion['metodo']]) ? $this->uri[$this->url_var_posicion['metodo']] : 'index';
	}

	/**
	 * Obtiene el valor del/los parametros por la URL,
	 * en este caso en localhost seria la posicion 3
	 * en host online seria en la posicion 2.
	 *
	 * @since 1.0
	 */
	public function setParametro(){
		self::$parametro = !empty($this->uri[$this->url_var_posicion['parametro']]) ? $this->uri[$this->url_var_posicion['parametro']] : '';
	}

	/**
	 * Retorna la URL actual para poder ser manejada en el sistema
	 *
	 * @since 1.0
	 * @return string  $this->uri 	url actual inicializada en setUri()
	 */
	public function getUri(){
		return $this->uri;
	}

	/**
	 * Obtiene el nombre del controlador actual
	 *
	 * @since 1.0
	 * @return string
	 */
	public function obtenerControlador(){
		return self::$controlador;
	}

	/**
	 * Obtiene el nombre del metodo actual
	 *
	 * @since 1.0
	 * @return string
	 */
	public function getMetodo(){
		return self::$metodo;
	}

	/**
	 * Obtiene el nombre de los parametros actual
	 *
	 * @since 1.0
	 * @return string
	 */
	public function getParametro(){
		return self::$parametro;
	}

	/**
	 * Muestra de forma de un arreglo donde estan ubicados el controlador
	 * metodo y parametros. Esto lo puedes ejecutar en el archivo index.php
	 * para saber que valores son los disponibles.
	 *
	 * @since 1.0
	 * @return mixed
	 */
	public function printValoresUri(){
		echo "<pre>";
		print_r($this->getUri());
		echo "</pre>";
	}

	/**
	 * Verifica en que posicion de la URL actual se encontraria
	 * el controlador, metodo y parametro.
	 * Si esta en localhost toma una posicion diferente ante un host online ya que 
	 * la subcarpeta del proyecto hace que estas posiciones se despliega una posicion.
	 *
	 * @since 1.0
	 */
	private function IndicesUrlPosiciones(){
		if( Utilidades::APP_esLocalhost() ){
			$this->url_var_posicion = array(
				'controlador' => 2,
				'metodo'      => 3,
				'parametro'   => 4,
			);
		}else{
			$this->url_var_posicion = array(
				'controlador' => 1,
				'metodo'      => 2,
				'parametro'   => 3,
			);
		}
	}

	/**
	 * Ejecucion del controlador
	 *
	 * Posiblemente la funcion mas crucial del sistema, esto lo que hace es
	 * ejecutar el controlador encontrado de la URL, basado en este controlador
	 * es la vista que mostrará.
	 *
	 * @since 1.0
	 */
	protected function ejecutarControlador(){
		$controller_ejecutar = ucwords( CONTROLADOR_DEFECTO ); // Defaults
		if( !empty( $this->obtenerControlador() ) ){
			$controller_ejecutar = ucwords( str_replace( '/' , '' , $this->obtenerControlador() ) );
		}

		if( file_exists( APP_RUTA_CONTROLADORES . $controller_ejecutar . '.php' ) ){
			require APP_RUTA_CONTROLADORES . $controller_ejecutar . '.php';	
		}else{
			echo "Controlador no encontrado";
			exit;
		}

		new $controller_ejecutar;
	}
}