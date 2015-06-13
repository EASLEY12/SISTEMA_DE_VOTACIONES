<?php
$coneccion = mysql_connect('localhost','root','') or die ('No hay coneccion a la base de datos');
$db= mysql_select_db('eleccion',$coneccion) or die("no existe la base de datos");
$rutaEnServidor='Imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$deac= $_POST["partidoN"];
$Nombre=$_POST["representanle"];
$sql="INSERT INTO rp (Nombre,Imagen,RRRR) VALUES ('".$deac."','".$rutaDestino."','".$Nombre."') ";
$re=mysql_query($sql,$coneccion);
if ($re){
	echo "EXITO";
}else{
	echo "Falle";
}
?>

