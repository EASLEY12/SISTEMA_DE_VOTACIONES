<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Papeleta de votacion</title>
	<link rel=stylesheet href="prototipo1.css" type="text/css">
</head>
<?php
include './c.php';
include 'coneccion.php';

$voto=@$_POST['DUI'];
echo "<br><br>";
echo "<br>";
echo "numero de DUI: ".$voto."<br>";

$consulta= mysql_query('SELECT * FROM ciudadano WHERE dui= "'.$voto.'"',$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == FALSE ){
	echo "DUI no registrado en la base de datos del TSE";
}
//echo $array_consulta["estadodeVoto"];
$estado=$array_consulta["estadodeVoto"];
if ($estado=="no voto") {
//echo "<br>ya  puedes votar";
if ($array_consulta == FALSE ) {
	echo "DUI no registrado en la base de datos del TSE";
}else{
	
$hola= $array_consulta["id_departamento"];
 $array_consulta["id_municipios"];
	$consulta= mysql_query('SELECT * FROM departamentos WHERE codigo_departamento="'.$array_consulta["id_departamento"].'"',$Coneccion);

$array_consulta2 = mysql_fetch_array($consulta);
$consulta= mysql_query('SELECT * FROM municipios WHERE codigo_municipio="'.$array_consulta["id_municipios"].'"',$Coneccion);
$array_consulta3 = mysql_fetch_array($consulta);
echo "<body bgcolor='#FFCC33'>";
	echo "<form>";
echo "<h1> Papeleta para Diputados</h1>";
echo "Tu eres :<label> ".$array_consulta["nombres"]. "<br> Apellidos: ".$array_consulta["apellidos"]." <br> Tu departamento es :".utf8_encode($array_consulta2["departamento"])."</label><br> Municipio es : <label>".utf8_encode($array_consulta3["municipios"]."</label>");
echo "</form>";


$consulta= mysql_query('SELECT * FROM inscripcion_candidato WHERE codigo_departamento="'.$array_consulta["id_departamento"].'"',$Coneccion);

$par=mysql_query("SELECT  * FROM  partidos  "  );

echo "<table border=0>";
echo "<form action='voto.php' method='post'>";
for($i=0;$i<mysql_num_rows($par);$i++){
	//echo "<tr><td bgcolor=black><img src='".mysql_result($par,$i,'imagen')."' width=100 height=100></td><td width=700>";
$hola=$array_consulta["id_departamento"];

$muni=$array_consulta3["codigo_municipio"];
$sql = 'SELECT id_inscripcion_candidato,nombres,apellidos,imagen_candidato,codigo_departamento,id_cargos,id_partidos FROM inscripcion_candidato WHERE codigo_departamento= "'.$hola.'"and codigo_municipio !="'.$muni.'"  and id_partidos="'.mysql_result($par,$i,'id_partidos').'"LIMIT 1';
		$datoss= mysql_query($sql);
		//echo "<p align=right><table border=1px>";
		//echo "<tr>";
		for($a=0;$a<mysql_num_rows($datoss);$a++){
			echo "<td> <img src='".mysql_result($par,$i,'imagen')."'name='".mysql_result($par,$i,'id_partidos')."' width=100 height=100> <label name='".mysql_result($datoss,$a,'nombres')."'></label><input type='Radio' name='tt' value=".mysql_result($par,$i,'id_partidos')." required title='Aun no ha realizado el voto'> </td>";
		}
		//echo "</tr>";
		//echo "</table></p>";

	//echo "</td></tr>";
}
echo "<tr>";
echo "<td><input type='submit' name='voto' value='votar' ></<td>";
	echo "<td><input type='hidden' name='depto' value='".$hola."' ></td>";
	echo "<td><input type='hidden' name='dui' value='".$voto."'><td>";
echo "</tr>";
echo "</form>";
echo "</table>";
		//print imprimetabla($datoss," ciudadano","table table-bordered",1);
}
}else{ 
	echo "<script type=\"text/javascript\">alert('Lo sentimos ya no puedes realizar el voto');window.location.assign('consulta DUI.php');</script>";


	
}

?>