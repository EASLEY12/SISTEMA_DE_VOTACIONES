<?php
include "Coneccion.php";
$Coneccion= mysql_connect("localhost","root","");
mysql_select_db("sistema_de_elecciones",$Coneccion);
@$voto=$_POST['tt'];
$depto=$_POST['depto'];
$muni=$_POST['muni'];

//echo"<br>";
//echo var_dump($voto);
//echo "<br>";
//echo "este es el id del candidato";
 $voto[0];

//echo "<br>";
//echo "este es el id del partido";
 $NN=$voto[0];
//echo $voto[1];
echo "<br>";
//echo "este es elcargo";
// $voto[2];
 //echo $cargo=$voto[3];
echo "<br>";
//echo "este es el coddigo del departamento ";
 $depto;
//echo "<br>";
//echo "el codigo del municipio";
 $muni;
//echo "<br>";
//echo " lo que vale el voto";

 $valorvoto=1;
echo "<br>";
$consulta= mysql_query("SELECT * FROM resultados_elecciones WHERE id_partidos='".$voto[0]."'  and id_departamento='".$depto."' and id_municipios='".$muni."'"  ,$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == FALSE ) {
	
$partido=mysql_query("INSERT INTO resultados_elecciones (id_partidos,id_departamento,id_municipios,numeros_votos) VALUES ('".$NN."','".$depto."','".$muni."','".$valorvoto."');",$Coneccion) or die("ha ocuriido un error");
if ($partido==1) {
	echo "Se inserto un nuevo voto"."<br>";
}else{
	echo "no hay coincidencia";
}
}else{
"este es el id del candidato ".$array_consulta["id_partidos"] ."<br>"."numeros_votos".$array_consulta["numeros_votos"];
$numv=$array_consulta["numeros_votos"];
$numv2=1;
$nuevovoto=$numv+$numv2;
$nuevovoto;
if ($NN==$array_consulta["id_partidos"]) {

	//echo "<br>hay qu sumar uno";
	$partido=mysql_query( "UPDATE resultados_elecciones SET numeros_votos='".$nuevovoto."' WHERE id_partidos='".$NN."' and id_departamento='".$depto."' and id_municipios='".$muni."';",$Coneccion) or die("ha ocuriido un error");
}else{
	"hay que insertar uno nuevo";
	//$partido=mysql_query("INSERT INTO resultados_elecciones (id_partidos,id_cargos,inscripcion_candidato,id_departamento,numeros_votos) VALUES ('".$voto[1]."','".$voto[2]."','".$voto[0]."','".$voto[3]."". $voto[4]."','".$voto[5]."');",$Coneccion) or die("ha ocuriido un error");


}
}
echo "<script type=\"text/javascript\">alert('Felicidades !HAS VOTADO¡');window.location.assign('consulta DUI.php');</script>";
echo "<br>";
?>