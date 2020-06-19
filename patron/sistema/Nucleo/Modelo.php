<?php 
/**
 * Modelo (base de datos)
 *
 * Realiza todo las conexiones de base de datos y
 * funciones de manipulacion de las mismas.
 *
 * @package    App
 * @subpackage App/Nucleo
 */
class Modelo{

	/**
	* Variable para la manipulacion de la base de datos.
	*
	* @since 1.0
	* @static
	*/
	public static $dba;

	/**
	 * Instancia existente para Base de datos
	 * 
	 * Deniega que haya una duplicacion de instancia,
	 * usa la misma instancia para evitar consumo de memoria RAM
	 * con esto ahorramos microsegundos valiosos en la ejecucion
	 *
	 * @var array
	 */
	protected static $instancia;

	/**
	 * Si ya fue instanciado la clase, entonces obtiene la actua
	 * caso contrario crea una nueva instancia.
	 *
	 * @since 	1.0
	 * @return 	object
	 */
	public static function instancia() {
		if ( ! isset( static::$instancia ) || !static::$instancia ) {
			static::$instancia = new self();
			static::$instancia->conectaBasedatos();
		}
		return static::$instancia;
	}

	/**
	 * Conecion a la base de datos
	 *
	 * -Realiza la conexion a la base de datos
	 * -Asigna esta conexion a una variable publica para ser aplicada
	 *  en todo el sistema.
	 *
	 * @since 	1.0
	 * @return 	object
	 */
	public function conectaBasedatos(){
		self::$dba = new ezSQL_mysqli( BD_USUARIO , BD_CONTRASENA , BD_BASEDEDATOS , BD_HOSPEDAJE );
	}

	/**
	 * Prueba de conexion a la base de datos
	 *  - Realizamos una consulta sysdate para saber la hora
	 *    que marca la base de datos.
	 */
	public function pruebaConexion(){
		print 	"Hora traida desde la base de datos para probar si esta conectado" .
				" @ " . self::$dba->get_var( "SELECT " . self::$dba->sysdate() ) .
				"<br /> ahora puedes comentar esta funcion en: <strong>/proyecto/sistema/Modelos/ModeloInicio.php</strong> en la linea: 35";
	}

	//--------------------------------------------------------------------------
	// aplicamos SINGLETON, con esto hacemos que solo haya 1 sola instancia de 
	//--------------------------------------------------------------------------
	// no permitir crear nueva instancia por palabra clave nueva
	protected function __construct(){}

	// Evita que se clone la clase
	protected function __clone(){}

    // No permitir la deserialización de este objeto
    protected function __wakeup(){}	
}