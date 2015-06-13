<?php

include "Coneccion.php";
$nombre = protect($_POST["Usuario"]);
$clave= protect($_POST["Clave"]);
$clave2= protect($_POST["CClave"]);
$date = date("Y-m-d"); 

/*if (strlen($nombre)<4){
	echo "Nombre deve de tener mas de 4 letras";
	exit();
}

if (strlen($clave)<4){
	echo "Clave deve de tener mas de 4 letras";
	exit();
}
*/
if ($clave != $clave2){
	//echo "No coinciden las contaseñas"
	
	echo "<script type=\"text/javascript\">alert('No coinciden las contraseñas');window.location.assign('Registrar usuario.php');</script>";
	exit();
}
else{

$registrar= mysql_query(" INSERT INTO persona (nombre,clave,fecha) VALUES ('".$nombre."','".$clave."','".$date."');",$Coneccion) or die("HA ocurrido un error en elregistro");

if ($registrar==1){
	echo "Cuenta creada  bienbenido";
}
}
?>