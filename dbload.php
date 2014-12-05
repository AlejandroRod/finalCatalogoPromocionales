	<?php 
	//Conectar una base de datos local|usuario|contraseña
	$link = mysql_connect('localhost', 'root', 'root');
	if (!$link) {
    	die('Not connected : ' . mysql_error());
	}
	
	//Instrucciones de PHP con respecto a MySQL
	//mysql_connect
	//mysql_select_db
	//mysql_set_charset
	
	$db = mysql_select_db("catalogo", $link);
	mysql_set_charset('utf8', $link);
	mysql_query("SET NAMES utf8", $link)
	?>