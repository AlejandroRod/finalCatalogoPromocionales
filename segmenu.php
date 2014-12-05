<?php $categorias = mysql_query("SELECT * FROM categorias"); ?>

	<div class="stuckeado">
		<div class="frame2">
			<div id="segmenu">
				<ul>
					<li>
						<div id="categorias" class="frame">
							<h3>Categorías</h3>
						</div>
						<ul>
						<?php
					
						while($row = mysql_fetch_array($categorias)){
							echo "<li><a href='/tecweb1/ProNOW/catalogo/productos.php?id=" . $row['id']. "'>" . $row['nombre'] . "</a></li>";
						}
						?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>