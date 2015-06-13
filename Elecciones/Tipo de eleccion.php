<?php
/*
session_start();
*/
?>
<?php

 include "Coneccion.php";
$nombre = protect($_POST["Usuario"]);
$Clave= sha1($_POST["Clave"]);
$tipo= $_POST['tipo'];
//echo $nombre;
//echo "<br>";
//echo $contraseña;

//if ($nombre=="Marvin") {

//	print "<br>"."Hola Marvin te esperava";
//}else{
//	print "<br>"."A ti ni te cosnosco";
//}



$consulta= mysql_query("SELECT * FROM usuario WHERE nomb_usuario='".$nombre."' AND clave='".$Clave."' AND tipo_de_usuario='".$tipo."'" ,$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == FALSE ) {
	echo "<script type=\"text/javascript\">alert(\"Usuario no encontrado en nuestra base de datos\");window.location.assign('Index.php');";


	
	echo "</script>";

}else{
session_start();
	$_SESSION["nombre"] = $array_consulta["nombres"];

	header('location:hhh.php');
	print"<!DOCTYPE html>";
print "<html>";
echo "Bienvenido señor Magistrado ".$array_consulta["nombres"]. " Su Cuenta fue creada ".$array_consulta["fecha_creacion"];



}


?>
