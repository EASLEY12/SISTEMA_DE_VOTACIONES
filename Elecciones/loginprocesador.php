<?php
session_start();

 include "Coneccion.php";
$nombre = protect($_POST["Usuario"]);
$clave= protect($_POST["Clave"]);
//echo $nombre;
//echo "<br>";
//echo $contraseña;

//if ($nombre=="Marvin") {

//	print "<br>"."Hola Marvin te esperava";
//}else{
//	print "<br>"."A ti ni te cosnosco";
//}



$consulta= mysql_query("SELECT * FROM persona WHERE nombre='".$nombre."' AND clave='".$clave."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == FALSE ) {
	echo "Usuario no encontrado en nuestra base de datos";
}else{
	echo "Bienvenido ".$array_consulta["nombre"]. "Tu Cuenta fue creada ".$array_consulta["fecha"];
$_SESSION["nombre"] = $array_consulta["nombre"];
echo "<br> <a href='cerar sesion.php'>cerar sesion</a>";
}
?>