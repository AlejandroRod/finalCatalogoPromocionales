<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php'); ?>
<!doctype html>
<html>
<head>
	<?php include_once ($head); ?>
</head>

<body>
<?php

	$url_id = $_GET['id'];
	$productos = mysql_query("SELECT * FROM productos WHERE id=$url_id");

	while($fila = mysql_fetch_array($productos)){
		$id = $fila['id'];
		$n = $fila['nombre'];
		$d = $fila['descripcion'];
		$cat = $fila['categoria'];
		$f = $fila['frente'];
		$a = $fila['altura'];
		$p = $fila['profundidad'];
		$diam = $fila['diametro'];
		$peso = $fila['peso'];
	}

?>
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
	<div id="editarint_form">
		<img src="../img/logofile3.png"/>
		<form action="actualiza.php" method="POST">
			<input type="hidden" name="id" id="id" value="<?php echo $id ?>"></input>
			<label class="estilotitle">Nombre</label>
			<input class="positioninput" type="text" name="nombre" id="nombre_edit" value="<?php echo $n; ?>"></input>
			<label class="estilotitle" for="">Descripción</label>
			<textarea class="positioninput" name="descripcion" id="descripcion_edit"><?php echo $d; ?></textarea>
			<label class="estilotitle" for="">Categoria</label>
			<input class="positioninput" type="text" name="categoria" id="categoria_edit" value="<?php echo $cat; ?>"></input>
			<label class="estilotitle" for="">Frente</label>
			<input class="positioninput" type="text" name="frente" id="frente_edit" value="<?php echo $f; ?>"></input>	
			<label class="estilotitle" for="">Altura</label>
			<input class="positioninput" type="text" name="altura" id="altura_edit" value="<?php echo $a; ?>"></input>	
			<label class="estilotitle" for="">Profundidad</label>
			<input class="positioninput" type="text" name="profundidad" id="profundidad_edit" value="<?php echo $p; ?>"></input>
			<label class="estilotitle" for="">Diametro</label>
			<input class="positioninput" type="text" name="diametro" id="diametro_edit" value="<?php echo $diam; ?>"></input>
			<label class="estilotitle" for="">Peso</label>
			<input class="positioninput" type="text" name="peso" id="peso_edit" value="<?php echo $peso; ?>"></input>				
			<input class="newbtn" type="submit" value="Actualizar"></input>
		</form>
	</div>
</div>
<!-- FOOTER -->
	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/footer.php'); ?>
<!-- TERMINA FOOTER -->
</body>
</html>