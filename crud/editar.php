<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php'); ?>
<!doctype html>
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
			<h1 id="editar">Editar</h1>
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
	<div id="editar_form">
		<img src="../img/logofile3.png"/>
		<table>
			<tr class="fondo_details2">
				<!--<th>Id</th>-->
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Categoria</th>
				<th>Frente</th>
				<th>Altura</th>
				<th>Profundidad</th>
				<th>Diametro</th>
				<th>Peso</th>
				<th></th>
			</tr>
			<tr>
				<?php 
				$productos = mysql_query("SELECT * FROM productos");

				while($fila = mysql_fetch_array($productos)){
					echo "<tr class='size_details2'>";
					//echo "<td>" . $fila['id'] . "</td>";
					echo "<td><p class='editarp'>" . $fila['nombre'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['descripcion'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['categoria'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['frente'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['altura'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['profundidad'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['diametro'] . "</p></td>";
					echo "<td><p class='editarp'>" . $fila['peso'] . "</p></td>";
					echo "<td><a class='newbtn' href='editarint.php?id=" . $fila['id'] . "'/>Editar</a></td>";
					echo "<tr>"; 
				}

				?>
			</tr>
		</table>
	</div>
</div>
<!-- FOOTER -->
	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'manuelrod.info/universidad/pronow/footer.php'); ?>
<!-- TERMINA FOOTER -->
</body>
</html>