<?php 
/**
 * Carga todos los archivos de del Nucleo,Vistas,Librerias,Controladores,Modelos
 * de manera magica.
 *
 * @link  	http://php.net/manual/es/function.spl-autoload-register.php
 * @package APP/Nucleo
 */
spl_autoload_register(function($file){
	/**
	 * Cada vez que se instacia una clase se ejecuta esta funcion
	 * propia de php 'spl_autoload_register' lo que hace es buscar
	 * si el nombre de esa clase instaciada existe en un directorio
	 * para poder cargar ese archivo y ejecutar la clase.
	 *
	 * En este caso si no lo encuentra en un directorio lo va ir buscando
	 * en otro, por eso las validaciones IF/ELSE, con esto se evita el 
	 * 'require' para todos los archivos.
	 *
	 */

	// Valida nombre de  clases que no tiene el mismo nombre entre mayusculas y minisculas
	// del archivo.
	$nombres_clases_y_archivo = array(
		'ezSQL_mysqli' => 'ez_sql_mysqli',
		'ezSQLcore'   => 'ez_sql_core'
	);
	if( array_key_exists( $file, $nombres_clases_y_archivo ) ){
		$file = $nombres_clases_y_archivo[$file];
	}
	// --------------------------------

	if( is_file( APP_RUTA_NUCLEO . "$file.php" ) ){
		require APP_RUTA_NUCLEO . "$file.php";
	}else{
		if( is_file( APP_RUTA_LIBRERIA . "$file.php" ) ){
			require APP_RUTA_LIBRERIA . "$file.php";
		}else{
			if( is_file( APP_RUTA_CONTROLADORES . "$file.php" ) ){
				require APP_RUTA_CONTROLADORES . "$file.php" ;
			}else{
				if( is_file( APP_RUTA_MODELOS . "$file.php" ) ){
					require APP_RUTA_MODELOS . "$file.php" ;
				}else{
					echo "No se encontro archivo en: <br />" .
						 APP_RUTA_NUCLEO . "$file.php  <br />" .
						 APP_RUTA_LIBRERIA . "$file.php  <br />" .
						 APP_RUTA_CONTROLADORES . "$file.php  <br />" .
						 APP_RUTA_MODELOS . "$file.php";
				}
			}
		}
	}
});