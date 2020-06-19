<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css' />
	<title><?php echo implode( " - ", Enrutador::$arreglo_titulo_pagina ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>publico/css/estilo.css<?php echo "?ver=".rand(0,99); ?>" />
	<script src="<?php echo APP_URL; ?>publico/js/modernizr.js"></script> <!-- Modernizr -->
</head>

<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="<?php echo APP_URL; ?>publico/imagenes/cd-logo.svg" alt="Logo"></a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Buscar...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Manual</a></li>
				<li><a href="#0">Soporte</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="<?php echo APP_URL; ?>publico/imagenes/cd-avatar.png" alt="avatar">
						Cuenta
					</a>

					<ul>

						<li><a href="#0">Mi cuenta</a></li>
						<li><a href="#0">Editar cuenta</a></li>
						<li><a href="#0">Salir</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->
	<main class="cd-main-content">

		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Principal</li>
				<li class="has-children overview">
					<a href="#0">Escritorio</a>
					<ul>
						<li><a href="#0">Todas</a></li>
						<li><a href="#0">Actializaciones</a></li>
						<li><a href="#0">Configuraicones</a></li>
					</ul>
				</li>
				<li class="has-children notifications active">
					<a href="#0">Notifications<span class="count">3</span></a>
					
					<ul>
						<li><a href="#0">Todas</a></li>
						<li><a href="#0">Configuracion</a></li>
						<li><a href="#0">Otros</a></li>

					</ul>
				</li>

				<li class="has-children comments">
					<a href="#0">Comentarios</a>
					
					<ul>
						<li><a href="#0">Todos</a></li>
						<li><a href="#0">Editar</a></li>
						<li><a href="#0">Eliminar comentarios</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secundario</li>
				<li class="has-children bookmarks">
					<a href="#0">Tareas</a>
					
					<ul>
						<li><a href="#0">Todos los libros</a></li>
						<li><a href="#0">Editar libro</a></li>
						<li><a href="#0">Importar libro</a></li>
					</ul>
				</li>
				<li class="has-children images">
					<a href="#0">Imagenes</a>
					
					<ul>
						<li><a href="#0">Todas las imagenes</a></li>
						<li><a href="#0">Editar imagenes</a></li>
					</ul>
				</li>

				<li class="has-children users">
					<a href="#0">Usuarios</a>
					
					<ul>
						<li><a href="#0">Todos los usuarios</a></li>
						<li><a href="#0">Editar usuario</a></li>
						<li><a href="#0">Agregar usuario</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Acciones</li>
				<li class="action-btn"><a href="#0">+ Boton</a></li>
			</ul>
		</nav>