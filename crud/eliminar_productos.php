<?php
	error_reporting(E_ALL ^ E_NOTICE);

	include_once ($_SERVER['DOCUMENT_ROOT'].'/tecweb1/ProNOW/variables.php');

	$URL_id = $_GET['id'];
	mysql_query("DELETE FROM productos WHERE id = $URL_id");
	header('location:eliminar.php');
?>

</body>
</html>