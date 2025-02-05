<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu general</title>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/formAltas.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/title.css">
	<link rel="stylesheet" href="css/formBajas.css">
	<link rel="stylesheet" href="css/formModificacion.css">
	<link rel="stylesheet" href="css/fixture.css">
    <script src="js/index.js"></script>
	<script src="js/form-altas.js"></script>
	<script src="js/form-baja.js"></script>
	<script src="js/form-modificar.js"></script>
	<script src="js/animacionInput.js"></script>
	<script src="js/cursor.js"></script>

</head>

<body>
	
	<div id="contenedor">

		<div class="header">

			<div class="top">
				<!-- Logo -->
				<div id="logo">

					<h1 class="titulo">Administra Usuario</h1>
					<p>Gestiona los usurios de este sistema</p>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="#altas" id="altas-link"><span class="icono-container">Altas<img class="icono"
										src="images/icono-alta.png"></span></a></li>
						<li><a href="#bajas" id="bajas-link"><span class="icono-container">Bajas<img class="icono"
										src="images/icono-baja.png"></span></a></li>
						<li><a href="#modificacion" id="modificacion-link"><span
									class="icono-container">ModificacionMe<img class="icono"
										src="images/icono-modificar.png"></span></a></li>
						<li><a href="#listar" id="listar-link"><span class="icono-container">Listar<img class="icono"
										src="images/icono-listar.png"></span></a>
						</li>
					</ul>
				</nav>

			</div>
		</div>

		<div class="main">
			<div class="image-menu"><img id="menuLateral" src="images/menu.png" alt="" /></div>
			<section class="banner">
				<?php
					include("from/title.php");
					?>
			</section>

			<!-- Intro -->
			<section id="altas" class="one dark cover">
				<div class="container">
					<?php
					include("from/form-altas.php");
					?>
				</div>
			</section>

			<section id="fixture" class="four">
				<div class="container">
					<?php
					include("from/fixture.php");
					?>
				</div>
			</section>

			<!-- Portfolio -->
			<section id="bajas" class="two">
				<div class="container">
					<?php
					include("from/form-bajas.php");
					?>
				</div>
			</section>

			<!-- About Me -->
			<section id="modificacion" class="four">
				<div class="container">
					<?php
					include("from/form-modificacion.php");
					?>
				</div>
			</section>


			<footer id="footer">
    			<ul class="copyright">
        			<li>&copy; 2024 Torneo Brawl.</li>
        			<li>Todos los derechos reservados.</li>
    			</ul>
    			<ul class="design-info">
        			<li>Diseñado por Papu In.</li>
        			<li>Email: contacto@brawltorneos.com</li>
    			</ul>
    			<div class="scrolling-text">
        			<p> ¡Prepárate para la batalla final en el Torneo Nacional de Brawl Stars! Regístrate ahora y compite por premios épicos.</p>
    			</div>
			</footer>
		</div>
	</div>
	<div id="custom-cursor"></div>
</body>

</html>