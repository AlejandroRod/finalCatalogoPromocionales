<?php
		include_once ('variables.php');
		$titulo_pagina = "Inicio";
		$productos2 = mysql_query("SELECT * FROM productos LIMIT 4");
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once ($head); ?>
</head>
<body>
	<!--Main Fondo-->
	<div id="main">
		<div class="frame">
			<!--Empieza Header-->
			<?php include_once ($menu); ?>
			<!--Termina Header-->
			<div class="bit-1 clearfix">
				<h1 id="title">Genera lealtad a tu marca</h1>
			</div>
   	 	</div>
	    <div class="frame">    
			<div class="bit-1 clearfix">
				<h2>Haz que tus clientes se encariñen con tu marca y que tus empleados esten orgullosos de estar en ella.</h2>
			</div>
			<a href="#" class="btn">Vé el Catalogo</a>
		</div>
	</div>
	<!--Termina Main Fondo-->
	
	<div class="frame">
		<div id="nosotros">
			<h2>Nosotros</h2>
			<p class="noso">Somos una empresa líder en venta de artículos promocionales en México con diseños innovadores y la infraestructura más completa; nos dirigimos a múltiples sectores comerciales, utilizando tecnología de vanguardia, permitiéndonos crecer de manera constante. Siendo la mejor opción en calidad de producto, servicio y responsabilidad social, aseguramos la satisfacción total de nuestros clientes con respeto y honestidad. </p>
			<p class="noso">Como visión consideramos ser la empresa líder a nivel nacional en la comercialización de productos promocionales, con posicionamiento en Latinoamérica, a través de la innovación tecnológica y servicio de clase mundial. 

	Estamos enfocados a satisfacer las necesidades de nuestros clientes a través de personal capacitado y trabajo en equipo, basados en un sistema de calidad y comprometidos hacia la excelencia. Nuestra venta es a través de distribuidores a los cuales les damos soporte con herramientas tecnológicas, servicio, inventario y cursos de capacitación.</p>
			<p class="noso">Tenemos en exhibición cientos de productos personalizables para elevar la productividad e impulsar las ventas de tu negocio, así como una línea de regalos fotográficos e invitaciones para eventos sociales.

	Nuestra base de operaciones se encuentra en Guadalajara, Jalisco y enviamos nuestros productos a todos los estados de la República Mexicana.

	Somos muy cuidadosos al momento de elegir nuestros proveedores y los productos que ofrecemos, brindándote la seguridad que todo lo que encuentres en Tienda Gráfica será de excelente calidad, con el mejor costo-beneficio.

	Te invitamos a navegar en nuestro sitio para conocer nuestros productos.</p>
		</div>
	</div>
	<div id="promos">

	</div>

	<div id="prefooter">
	<div class="frame">
		
		    <div class="bit-4">
		    	<div class="canvasprefooter">
			    	<h2>Info</h2>
			    	<ul>
			    		<li>Leon Gto</li>
			    		<li>477 123 987432</li>
			    	</ul>
		    	</div>
		    </div>
			<div class="bit-4">
		    	<div class="canvasprefooter">
		    	</div>
		    </div>
		    <div class="bit-4">
		    	<div class="canvasprefooter">
		    	</div>
		    </div>
		    <div class="bit-4">
		    	<div class="canvasprefooter">
		    	</div>
		    </div>
		</div>	
	</div>

	<?php include_once ('footer.php'); ?>
	
</body>
</html>