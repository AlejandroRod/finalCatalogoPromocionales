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
			<h1 id="crear">Crear</h1>
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
	<?php
	echo "<h2>Estos fueron los datos agregados:</h2>"; 
	echo "Imagen: " . $_POST['imagen'] . "</br>";
	echo "Imagen Secundaria: " . $_POST['img_sec'] . "</br>";
	echo "Nombre: " . $_POST['nombre'] . "</br>";
	echo "Descripcion: " . $_POST['descripcion'] . "</br>";
	echo "Categoria: " . $_POST['categoria'] . "</br>";
	echo "Categoria secundaria: " . $_POST['categoria_sec'] . "</br>";
	echo "Frente: " . $_POST['tamano_frente'] . "</br>"; 
	echo "Altura: " . $_POST['tamano_altura'] . "</br>";
	echo "Profundidad: " . $_POST['tamano_profundidad'] . "</br>"; 
	echo "Diametro: " . $_POST['tamano_diametro'] . "</br>";  
	echo "Peso: " . $_POST['peso'] . "</br>"; 

	$a = $_POST['imagen'];
	$b = $_POST['imagensecundaria'];
	$c = $_POST['nombre'];
	$d = $_POST['descripcion'];
	$e = $_POST['categoria'];
	$f = $_POST['categoria_sec'];
	$g = $_POST['tamano_frente'];
	$h = $_POST['tamano_altura']; 
	$i = $_POST['tamano_profundidad'];
	$j = $_POST['tamano_diametro'];   
	$k = $_POST['peso'];  

	mysql_query("INSERT INTO productos (imagen,nombre,descripcion,frente,altura,profundidad,diametro,peso)
		VALUES ('$a','$b',$c,'$d','$e','$f', '$g', '$h','$i')");
	mysql_query("INSERT INTO categorias (imagen,nombre,descripcion,frente,altura,profundidad,diametro,peso)
		VALUES ('$a','$b',$c,'$d','$e','$f', '$g', '$h','$i')");
?>
</div>
<!-- FOOTER -->
	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/footer.php'); ?>
<!-- TERMINA FOOTER -->
</body>
</html>

