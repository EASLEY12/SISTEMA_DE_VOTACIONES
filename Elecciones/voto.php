<?php
include "Coneccion.php";
$Coneccion= mysql_connect("localhost","root","");
mysql_select_db("sistema_de_elecciones",$Coneccion);
$voto=$_POST['tt'];
$depto=$_POST['depto'];
$Dui=$_POST['dui'];
 $Dui;

//echo"<br>";
//echo var_dump($voto);
//echo "<br>";
//echo "este es el id del candidato";
 $voto[0];

//echo "<br>";
//echo "este es el id del partido";
$NN=$voto[0];
//echo $voto[1];
//echo "<br>";
//echo "este es elcargo";
// $voto[2];
 //echo $cargo=$voto[3];
//echo "<br>";
//echo "este es el coddigo del departamento ";
 $depto;
//echo "<br>";
//echo " lo que vale el voto";

 $valorvoto=1;
echo "<br>";
$consulta= mysql_query("SELECT * FROM resultados_elecciones WHERE id_partidos='".$voto[0]."' and id_departamento='".$depto."'"  ,$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == FALSE ) {
	
$partido=mysql_query("INSERT INTO resultados_elecciones (id_partidos,id_departamento,numeros_votos) VALUES ('".$NN."','".$depto."','".$valorvoto."');",$Coneccion) or die("ha ocuriido un error");
if ($partido==1) {
	echo "Se inserto un nuevo voto"."<br>";
}else{
	echo "no hay coincidencia";
}
}else{
//echo "este es el id del candidato ".$array_consulta["id_partidos"] ."<br>"."numeros_votos".$array_consulta["numeros_votos"];
$numv=$array_consulta["numeros_votos"];
$numv2=1;
$nuevovoto=$numv+$numv2;
$nuevovoto;
if ($NN==$array_consulta["id_partidos"]) {

	//echo "<br>hay qu sumar uno";
	$partido=mysql_query( "UPDATE resultados_elecciones SET numeros_votos='".$nuevovoto."' WHERE id_partidos='".$NN."' and id_departamento='".$depto."' ;",$Coneccion) or die("ha ocuriido un error");
}else{
	"hay que insertar uno nuevo";
	//$partido=mysql_query("INSERT INTO resultados_elecciones (id_partidos,id_cargos,inscripcion_candidato,id_departamento,numeros_votos) VALUES ('".$voto[1]."','".$voto[2]."','".$voto[0]."','".$voto[3]."". $voto[4]."','".$voto[5]."');",$Coneccion) or die("ha ocuriido un error");


}
}
echo "<br>";
$Dui;
//echo "<script type=\"text/javascript\">alert(\" has realizado el voto !FElicidades¡\");window.location.assign('consulta DUI.php');</script>";

/*$partido=mysql_query("INSERT INTO resultados_elecciones (id_partidos,id_cargos,inscripcion_candidato,id_departamento,numeros_votos) VALUES ('".$voto[1]."','".$voto[2]."','".$voto[0]."','".$voto[3]."". $voto[4]."','".$voto[5]."');",$Coneccion) or die("ha ocuriido un error");


 
if ($partido==1) {
	echo "Se ha registrado la coalicion"."<br>";
}else{
	echo "no se han enviado datos";
}*/
$consulta= mysql_query('SELECT * FROM ciudadano WHERE dui= "'.$Dui.'"',$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
$hola= $array_consulta["id_departamento"];
 $array_consulta["id_municipios"];
	$consulta= mysql_query('SELECT * FROM departamentos WHERE codigo_departamento="'.$array_consulta["id_departamento"].'"',$Coneccion);
echo "<body bgcolor='#FF6699'>";
$array_consulta2 = mysql_fetch_array($consulta);
$consulta= mysql_query('SELECT * FROM municipios WHERE codigo_municipio="'.$array_consulta["id_municipios"].'"',$Coneccion);
$array_consulta3 = mysql_fetch_array($consulta);
	echo "<form>";
echo"<h1> Papeleta para Alcaldes</h1>";
echo "tu eres <label> ".$array_consulta["nombres"]. " <br> Tu departamento es ".utf8_encode($array_consulta2["departamento"])."</label><br> Municipio es : <label>".utf8_encode($array_consulta3["municipios"]."</label>");
echo "</form>";


$consulta= mysql_query('SELECT * FROM inscripcion_candidato WHERE codigo_departamento="'.$array_consulta["id_departamento"].'"',$Coneccion);

$par=mysql_query("SELECT  * FROM  partidos  "  );

echo "<table border=0>";
echo "<form action='voto2.php' method='post'>";
for($i=0;$i<mysql_num_rows($par);$i++){
	//echo "<tr><td bgcolor=black><img src='".mysql_result($par,$i,'imagen')."' width=100 height=100></td><td width=700>";
$hola=$array_consulta["id_departamento"];
$muni=$array_consulta3["codigo_municipio"];

$sql = 'SELECT id_inscripcion_candidato,nombres,apellidos,imagen_candidato,codigo_departamento,codigo_municipio,id_cargos,id_partidos FROM inscripcion_candidato WHERE codigo_departamento= "'.$hola.'" and codigo_municipio="'.$muni.'" and id_partidos="'.mysql_result($par,$i,'id_partidos').'"LIMIT 1';
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
$Dui;
$estado="si voto";
$partido=mysql_query( "UPDATE ciudadano SET estadodeVoto='".$estado."' WHERE dui='".$Dui."';",$Coneccion) or die("ha ocuriido un error");
echo "<tr>";
echo "<td><input type='submit' name='voto' value='votar' ></<td>";
	echo "<td><input type='hidden' name='depto' value='".$hola."' ></td>";
	echo "<td><input type='hidden' name='muni' value='".$muni."'><td>";
echo "</tr>";
echo "</form>";
echo "</table>";
		//print imprimetabla($datoss," ciudadano","table table-bordered",1);

?>