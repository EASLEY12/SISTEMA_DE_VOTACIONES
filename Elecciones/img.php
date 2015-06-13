<?php
	if(isset($_GET["id"])){
		$coneccion= mysql_connect('localhost','root','') or die ('no hay coneccion a la base de datos');
		$db= mysql_select_db('sistema_de_elecciones',$coneccion) or die ('no existe la base de datos');
		$co=mysql_query("SELECT imagen FROM partidos where id_partidos='".$_GET["id"]."'");
		if(mysql_num_rows($co)>0){
			echo "<img style='width:150px;height:100px;' src='".mysql_result($co,0,0)."'>";
		}else{
			echo "NO SE ENCUANTRA";
		}


	}
?>