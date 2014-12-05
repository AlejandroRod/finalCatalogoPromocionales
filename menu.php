<?php $categorias = mysql_query("SELECT * FROM categorias"); ?>
<a href="/tecweb1/ProNOW/index.php"><div id="logo"></div></a>
<div id="nav">
	<nav>
		<ul>
				<li><a href="/tecweb1/ProNOW/catalogo/index.php">Catálogo</a>
					<ul>
						<?php
						
						while($row = mysql_fetch_array($categorias)){
							echo "<li><a href='/tecweb1/ProNOW/catalogo/productos.php?id=" . $row['id']. "'>" . $row['nombre'] . "</a></li>";
						}
						
						
						
						?>
						
						
				     
				    </ul>
				</li>
				<li><a class="linea" href="/tecweb1/ProNOW/nosotros.php">Nosotros</a></li>
				<li><a class="btn2" href="/tecweb1/ProNOW/crud/editar.php">Log In</a></li>
		</ul>
	</nav>
</div>