<?php
$titulo_1 = "Pruebas";
$titulo_2 = "Covid";
$encabezado = "Resultados en Menos </br> de </br> 1 Hora";
$chat = "Chat en Vivo";
$chat_des = "Contamos con Asistencia en Vivo las 24h";
$url_chat = "https://web.whatsapp.com/";
$tipos = "Tipos de Test";
$tipos_des = "Test de ARN </br> Tests Inmunologicos </br> Test Rapidos";
$url_tipos = "https://google.com/";
$soporte = "Soporte";
$soporte_des = "Informanos si tienes algun Problema";
$url_soporte = "https://gmail.com/";
$resultados = "Resultados a Tu Correo";
$resultados_des = "Te enviamos los Resultados a tu Correo";
$contactanos = "Contactanos";
$datos = "Nuestros Datos";
$ubicacion = "I482 7ma Av. Sin Numero 51213, Peru";
$telefono = 987654321;
$correo = "pruebascovid@test.com";
$pagina = "pruebascovid.com";
$fecha = 2021;
$foster = array("Pruebas Covid","Derechos Reservados");
$foster_1 = array("https://facebook.com/","https://twitter.com/","https://gmail.com/","https://pinterest.com/");
?>
<!DOCTYPE html>
<!--
	Active by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Pruebas Covid</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/style.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>

	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	<!-- HEADER -->
	<header class="st-header st-fullHeight">
		<div class="header-overlay"></div><!-- /HEADER OVERLY -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center st-header-content">
					<div class="logo"><a href=""><img src="images/logoo.png" alt=""></a></div>
					<div class="st-header-title">
						<h2><?php echo $titulo_1 ?> <span><?php echo $titulo_2 ?></span></h2>
						<p><?php echo $encabezado ?> </p>
					</div>
				</div>
			</div>
		</div>
		<a href="#service" class="mouse-icon hidden-xs">
			<div class="wheel"></div>
		</a>
	</header>
	<!-- /HEADER -->

	<!-- SERVICE ICONS -->
	<section id="service" class="service-icons">
		<div class="container">
			<div class="row">

				<div class="col-sm-4 st-service-box">
					<span><i class="fa fa-weixin"></i></span>
					<h3 class="text-uppercase"><?php echo $chat ?></h3>
					<p><?php echo $chat_des ?></p>
					<a href=<?php echo $url_chat ?>>Mas Informacion</a>
				</div>

				<div class="col-sm-4 st-service-box">
					<span><i class="fa fa-life-ring"></i></span>
					<h3 class="text-uppercase"><?php echo $tipos ?></h3>
					<p><?php echo $tipos_des ?></p>
					<a href=<?php echo $url_tipos ?>>Mas Informacion</a>
				</div>

				<div class="col-sm-4 st-service-box">
					<span><i class="fa fa-cogs"></i></span>
					<h3 class="text-uppercase"><?php echo $soporte ?></h3>
					<p><?php echo $soporte_des ?></p>
					<a href=<?php echo $url_soporte ?>>Mas Informacion</a>
				</div>	

			</div>
		</div>
	</section>
	<!-- /SERVICE ICONS -->

	<!-- SUBSCRIBE -->
	<section class="subscribe">
		<div class="color-overlay"></div><!-- /COLOR OVERLY -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 subscribe-form">
					<div class="st-subscribe-title text-center">
						<h3><?php echo $resultados ?></h3>
						<p><?php echo $resultados_des ?></p>
					</div>
					<!-- FORM -->
					<form id="subscribe">
						<input type="email" value="" name="subscribe-email" id="st-email" placeholder="Ingrese su Correo">
						<input type="submit" name="subscribe-submit" value="Enviar">
						<label for="st-email" class="st-subscribe-message"></label>
					</form>
					<!-- /FORM -->
				</div>
			</div>
		</div>
	</section>
	<!-- /SUBSCRIBE -->

	<!-- CONTACT -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 contact-info">
					<h2 class="contact-title text-uppercase"><?php echo $contactanos ?></h2>
					<p class="contact-content"><?php echo $datos ?></p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong><?php echo $ubicacion ?></strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong><?php echo $telefono ?></strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong><?php echo $correo ?></strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong><?php echo $pagina ?></strong></p>
				</div>
				<div class="col-sm-6 contact-form">
					<div class="st-contact-message">

					</div>
					<form id="" name="contact-form" method="post" action="" >
						<input type="text" name="name" required="required" id="contact-name" placeholder="Tu Nombre">
						<input type="email" name="email" required="required" id="contact-email" placeholder="Tu Correo">
						<textarea placeholder="Mensaje" name="message" required="required" id="contact-message" cols="70" rows="6"></textarea>
						<input type="submit" value="Enviar" name="contact-submit">
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 social-icons">
					<a href=<?php echo $foster_1[0] ?>><i class="fa fa-facebook"></i></a>
					<a href=<?php echo $foster_1[1] ?>><i class="fa fa-twitter"></i></a>
					<a href=<?php echo $foster_1[2] ?>><i class="fa fa-google-plus"></i></a>
					<a href=<?php echo $foster_1[3] ?>><i class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; <?php echo $fecha ?><a href="http://google.com"><?php echo $foster[0] ?></a>. </br><?php echo $foster[1] ?></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->
	
	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->

</body>
</html>
