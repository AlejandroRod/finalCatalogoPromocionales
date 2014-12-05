<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php'); ?>
<!doctype html>
<html>
<head>
	<?php include_once ($head); ?>
</head>

<body>
<?php
	$productos = mysql_query("select * FROM productos");
?>
<!--Main Fondo-->
<div id="main">
	<div class="frame">
		<!--Empieza Header-->
			<?php include_once ($menu); ?>
		<!--Termina Header-->
		<div class="bit-1 clearfix">
			<h1 id="eliminar">Eliminar</h1>
		</div>
    </div>
</div>
<!--Termina Main Fondo-->
<!--ADMIN MENU-->
<div id="categorias">
	<div class="frame">
		<h3>Admin</h3>
	</div>
</div>	
	<?php include_once ($segmenuEdit); ?>	
<!--Termina AMIN MENU-->
<div class="frame">
	<div id="eliminar_form">
		<img src="../img/logofile2.png"/>
		<table>
			<tbody>
				<tr class="fondo_details">
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th></th>
				</tr>
				<tr class="list_details">
					<?php
						while ($row = mysql_fetch_array($productos)){
							echo "<tr class='size_details'>";
							echo "<td><img class='producto_img' src='img/productos/". $row['imagen'] . "'/></td>";
							echo "<td class='details_text'><p class='estilop'>".$row['nombre'] . "</p></td>";
							echo "<td class='details_text'><p class='estilop'>".$row['descripcion'] . "</p></td>";
							echo "<td><a class='btn btn_det' href='eliminar_productos.php?id=".$row['id'] . "'>Eliminar</a></td>";
							echo "</tr>";
						};		
					?>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- FOOTER -->
	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/footer.php'); ?>
<!-- TERMINA FOOTER -->
</body>
</html>