<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Socialbits - Contacto</title>
		<meta name="author" content="Ignacio Ribes @ignacioribes" />
	    <meta name="keywords" content="diseño web, desarrollo web, social media, streaming, stream, html5, css3, responsive design" />
	 	<meta name="description" content="Contacta con nosotros, dejanos un mensaje con tu idea." />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
	
		<!-- Favicon.ico placeholder -->
		<link rel="shortcut icon" href="imgs/ink-favicon.ico">
		
		<!-- Apple icon placeholder -->
		<link rel="apple-touch-icon-precomposed" href="imgs/touch-icon.57.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="imgs/touch-icon.72.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="imgs/touch-icon.114.png">

		<!-- Apple splash screen placeholder -->
		<link rel="apple-touch-startup-image" href="imgs/splash.320x460.png" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="imgs/splash.768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="imgs/splash.1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="./css/ink.css">
		<link rel="stylesheet" href="./css/demo.css" type="text/css" media="screen" title="no title" charset="utf-8">
		
		<!--[if IE]>
			<link rel="stylesheet" href="./css/ink-ie.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<![endif]-->

        <script type="text/javascript" src="bundles/ink.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>

		<!-- Google Analytics -->

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21528940-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
	</head>
	<body onload="prettyPrint()">
   		
		<!-- Add your site or application content here -->

		<div id="topbar">
			<nav class="ink-navigation ink-collapsible ink-container">
				<ul class="menu horizontal flat black" data-instance="collapsible1"><li class="ink-title">
					<a title="Site Title" href="index.html" class="logoPlaceholder">InK</a>
						<button class="ink-for-s ink-for-m ink-button" style="display: none;"><i style="height:auto" class="icon-reorder"></i></button></li>
						<li style="display: inline-block;"><a href="index.html">Inicio</a></li>
						<li style="display: inline-block;"><a href="nosotros.html">Nosotros</a></li>
						<li style="display: inline-block;"><a href="portfolio.html">Portfolio</a></li>
						<li style="display: inline-block;"><a href="servicios.html">Servicios</a></li>
						<li><a href="http://www.socialbits.com.ar/blog/" target="_blank">Blog</a></li>
						<li class="active" style="display: inline-block;"><a href="#">Contacto</a></li>
						<li style="display: inline-block;"><a href="english.html"><i class="icon-globe"></i> English</a></li>
				</ul>
			</nav>
			<div class="border"></div>
		</div>

		<div class="ink-hero"></div><!-- Importante! para ink-navigation -->
   
		<div class="ink-container ink-l100 ink-vspace">

			<?php
			    if(isset($_POST['submit'])){
			        $errors = array(); // declaramos un array para almacenar los errores
			        if($_POST['name'] == ''){
			            $errors[1] = '<p class="tip space short"> Este campo es requerido, ingrese su Nombre.</p>';
			        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
			            $errors[2] = '<p class="tip space short"> Este campo es requerido, ingrese una direccion valida.</p>';
			        }else if($_POST['message'] == ''){
			            $errors[3] = '<p class="tip space short"> Este campo es requerido, ingrese su mensaje.</p>';
					}else{
					            $dest = "katanaweb@gmail.com"; //Email de destino
					            $nombre = $_POST['name'];
					            $email = $_POST['email'];
								$asunto = "Formulario de contacto de Socialbits"; //Email de destino
					            $cuerpo = $_POST['message']; //Cuerpo del mensaje
					            //Cabeceras del correo
					            $headers = "From: $nombre $email\r\n"; //Quien envia?
					            $headers .= "X-Mailer: PHP5\n";
					            $headers .= 'MIME-Version: 1.0' . "\n";
					            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
					 
					            if(mail($dest,$asunto,$cuerpo,$headers)){
					                $result = '<div class="ink-alert success">
												<button class="ink-close">×</button>
												<p><b>Listo:</b> El mensaje se envio correctamente. Nos rapidamente contactaremos contigo!</p>
												</div>';
					                // si el envio fue exitoso reseteamos lo que el usuario escribio:
					                $_POST['name'] = '';
					                $_POST['email'] = '';
					                $_POST['message'] = '';
					            }else{
					                $result = '<div class="ink-alert error">
												<button class="ink-close">×</button>
												<p><b>Error:</b> Hubo un error en el envio, intentelo nuevamente en unos minutos</p>
												</div>';
					            }
					        }
					    }
			?>			

			<div class="ink-l50">

				    <form method="post" action="" class="ink-form inline" onsubmit="return SAPO.Ink.FormValidator.validate(this);">
				    <fieldset>

				    <h4>Formulario de Contacto</h4>

				    <?php echo $result; ?>

						<div class="control">
						    <label for="name" class="short">Nombre</label>
						    <input type="text" name="name" id="name" class="medium">
						    <?php echo $errors[1]; ?>
					  	</div>
						<div class="control">
		 					<label class="short" for="email">Email</label>
		 					<input type="text" class="medium" name="email" id="email">
		 					<?php echo $errors[2]; ?>
		 				</div>
						<div class="control">
		 					<label class="short" for="message">Mensaje</label>
		 					<textarea class="medium" id="area" name="message"></textarea>
		 					<?php echo $errors[3]; ?>
		 					<p class="tip space short">Haz un pequeño resumen.</p>
		 				</div>
				    	<button class="ink-button success" name="submit">Enviar</button>
				    </fieldset>
				    </form>			   
				     
			</div> <!-- /ink-l50 -->

			<div class="ink-l50">

				<div class="ink-gutter">

					<h4>Otras formas de contacto</h4>

						<ul class="unstyled">
						    <li><a href="http://twitter.com/#!/socialbitsar"><i class="icon-twitter"></i> @socialbits_ar</a></li>
						    <li><a href="https://www.facebook.com/pages/Social-Bits/147882781932279?sk=wall"><i class="icon-facebook"></i> Socialbits on Facebook</a></li>
						    <!-- <li><i class="icon-phone"></i></li> -->
						    <li><a href="mailto:para@socialbits.com.ar"><i class="icon-envelope"></i> para@socialbits.com.ar</a></li>
					    </ul>
				</div>

			</div> <!-- /ink-l50 -->


		</div> <!-- /ink-container ink-l100 -->
		
		<footer>
			<div class="ink-container">
				<nav class="ink-navigation">
					<ul class="ink-footer-nav">
						<li><a href="index.html">Inicio</a></li>
						<li><a href="nosotros.html">Nosotros</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="servicios.html">Servicios</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contacto.php">Contacto</a></li>
					</ul>
				</nav>
				<p class="copyright">
					Sitio bajo <a href="http://creativecommons.org/licenses/by/3.0/deed.es_AR">Licencia Creative Commons Atribución 3.0 Unported</a> | <a href="mailto:para@socialbits.com.ar"><i class="icon-envelope"></i> para@socialbits.com.ar</a><br>
					Made in Socialbits, Argentina.
				</p>
			</div>
		</footer>
		<script type="text/javascript" src="http://imgs.sapo.pt/ink/assets/js/ink.js"></script>
	</body>
</html>
