<?php
	error_reporting(E_ALL ^ E_NOTICE); 
	include_once($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php');

		$id = $fila['id'];
		$n = $fila['nombre'];
		$d = $fila['descripcion'];
		$cat = $fila['categoria'];
		$f = $fila['frente'];
		$a = $fila['altura'];
		$p = $fila['profundidad'];
		$diam = $fila['diametro'];
		$peso = $fila['peso'];

	mysql_query("UPDATE productos SET nombre='$n', descripcion='$d', categoria='$cat', frente='$f', altura='$a', profundidad='$p', diametro='$diam', peso='$peso' WHERE id=$id");


	header("location:editar.php");
?>