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
	<div id="crear_form">
		<img src="../img/logofile1.png" />
		<p class="explain">Las secciones con * (asterisco) son obligatorias</p>
		<form action="insertar_producto.php" method="POST">
			<div id="icons">
				<div id="imagen"></div><input type="text" name="imagen" class="space" placeholder="Imagen"></input></br>
				<div id="img-sec"></div><input type="text" name="img-sec"  class="space" placeholder="Imagen Secundaria"></input></br>
				<div id="nombre"></div><input type="text" name="nombre" class="space" placeholder="Nombre"></input></br>
				<div id="descripcion" ></div><input type="text" name="descripcion"class="space" placeholder="Descripción"></input></br>
				<div id="categoria" ></div><input type="text" name="categoria" class="space" placeholder="Categoria"></input></br>
				<div id="categoria-sec" ></div><input type="text" name="categoria-sec" class="space" placeholder="Categoria Secundaria"></input></br>
				<div id="tamano_frente"></div><input type="text" name="tamano_frente" class="space" placeholder="Frente"></input></br>
				<div id="tamano_altura"></div><input type="text" name="tamano_altura"  class="space" placeholder="Altura"></input></br>
				<div id="tamano_profundidad" ></div><input type="text" name="tamano_profundidad" class="space" placeholder="Profundidad"></input></br>
				<div id="tamano_diametro" ></div><input type="text" name="tamano_diametro" class="space" placeholder="Diametro"></input></br>
				<div id="peso"></div><input type="text" name="peso" class="space" placeholder="Peso"></input></br>
			</div>
			<p><input id="submit" type="submit" value="Enviar"></p>
		</form>
	</div>
</div>

	<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/footer.php'); ?>
	
</body>
</html>