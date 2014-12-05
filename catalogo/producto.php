<?php
		include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php');
		$titulo_pagina = "Producto";
		
		$id = $_GET['id'];
		$categoria_id = $GET['categoria_id'];
		
		
		$productos = mysql_query("SELECT * FROM productos WHERE id='$id'");
		$productos2 = mysql_query("SELECT * FROM productos WHERE categoria_id= LIMIT 3");
		$categorias = mysql_query("SELECT * FROM productos categoria_id='$id'");
		
		while($row = mysql_fetch_array($productos)){
			$nombre=$row['nombre'];
			$descripcion=$row['descripcion'];
			$frente=$row['frente'];
			$altura=$row['altura'];
			$profundidad=$row['profundidad'];
			$diametro=$row['diametro'];
			$peso=$row['peso'];
			$dimension=$row['dimension'];
			$imagen=$row['imagen'];
			$imagen2=$row['imagen_2'];
		}
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
				<h1 id="catalogo">Producto</h1>
			</div>
   	 	</div>
	</div>
	<!--Termina Main Fondo-->
	<!--Categorias-->
		<?php include_once ($segmenu); ?>
	<!--Termina categorías-->
	<!--Inicia Producto-->
	<div id="principalP">
		<div class="frame">
			
			<div class="bit-2">
				<div class="foto">
					<img src="../img/productos/<?php echo $imagen; ?>" alt="" />
					<div class="fotitos">
						<img src="../img/productos/<?php echo $imagen2; ?>" alt="" />
					</div>	
				</div>
			</div>
			<div class="bit-2 producto">
				<h2><a href="#"><?php echo $nombre; ?></a></h2>
			    <p><?php echo $descripcion; ?></p><br>
				<p style="font-weight:bold">Dimensiones</p>
			    <p>Frente: <?php echo $frente; ?></p>
			    <p>Altura: <?php echo $altura; ?></p>
			    <p>Profundidad: <?php echo $profundidad; ?></p>
			    <p>Diametro: <?php echo $diametro; ?></p>
			    <p>Peso: <?php echo $peso; ?></p>
			    <p>Dimension: <?php echo $dimension; ?></p>
			    <p class="categoria">Oficina / Ejecutivo</p>
			</div>
		</div>
	</div>	
	<!--Termina Producto-->
	
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

	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/footer.php'); ?>
	
</body>
</html>