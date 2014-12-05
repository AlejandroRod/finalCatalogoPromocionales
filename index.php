<?php
		include_once ('variables.php');
		$titulo_pagina = "Inicio";
		$productos = mysql_query("SELECT * FROM productos LIMIT 4");
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
			<a href="/tecweb1/ProNOW/catalogo/index.php" class="btn">Vé el Catalogo</a>
		</div>
	</div>
	<!--Termina Main Fondo-->
	
	<div id="productos">

		<div class="frame">
			<h3>Productos populares</h3>
		</div>
		<div class="frame2">
				
			<?php
			$counter = 0;
			
				while($row = mysql_fetch_array($productos)){
					$text = $row["descripcion"];
					/*if($counter == 0 || $counter == 4 || $counter == 8 || $counter == 12 || $counter == 16 || $counter == 20 || $counter == 24 || $counter == 28 || $counter == 32 || $counter == 36 || $counter == 40 || $counter == 44 || $counter == 48){
						echo "<div class='frame'>";
					}*/
					echo "<div class='bit-4 producto'>";
					echo "<div class='canvasP'><img src='img/productos/" . $row['imagen'] . "' /></div>";
					echo "<div class='dato_producto nombre_producto'><h2><a href''>" . $row['nombre'] . "</a></h2></div>";
					if(strlen($text) > 150){
						echo "<div class='dato_producto'><p>" . substr($text,0,150) . "<a href='producto.php?id=" . $row['id'] . "'>Seguir leyendo</a></p></div>";
					}else{
						echo "<div class='dato_producto'><p>" . $row['descripcion'] . "</p></div>";
					}
					echo "</div>";
					$counter++;
					
					
					
					/*if($counter == 4 || $counter == 8 || $counter == 12 || $counter == 16 || $counter == 20 || $counter == 24 || $counter == 28 || $counter == 32 || $counter == 36 || $counter == 40 || $counter == 44 || $counter == 48){
						echo "</div>";
					}*/
				}
			?>
			
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