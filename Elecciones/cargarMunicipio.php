<?php
 include './Clases/Coneccion.php';
			print'<div class="dropdown dropdown-dark">';
			print '<select name="Municipio" size="1" title="selecione el municipio" class="dropdown-select" required>';
					print"<option value=";
						print">";
						print "</option>";
					$sql='SELECT id_municipios,municipios,codigo_depart,codigo_municipio FROM municipios where codigo_depart='.$_GET["id"] ;
					$datos=consultaD($con,$sql);
					foreach ($datos as $value) {

						print "<option value='";
						print $value['codigo_municipio'];
						print"'>";
						print utf8_encode($value['municipios']);
						print"</option>";
					}
				print "</select>";
				print"</div>";



?>