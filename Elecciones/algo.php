<?php
$Coneccion= mysql_connect("localhost","root","");
mysql_select_db("sistema_de_elecciones",$Coneccion);
$ORGANIZACIONES  = @$_POST['ORGANIZACIONES'];
$year=$_POST['fecha'];

if (isset($_POST['ORGANIZACIONES'])) {

//for ($i=0;$i<count($ORGANIZACIONES);$i++)    
//{
//recogiendo valores del array
//echo $ORGANIZACIONES[$i]."<br>";
	//$partido=mysql_query("INSERT INTO elecciones (tipo_eleccion1) VALUES ('".$ORGANIZACIONES[]."');",$Coneccion) or die("ha ocuriido un error");

foreach ($_REQUEST['ORGANIZACIONES'] as $destino)
      	{ 
      	 	$query = 'INSERT INTO  tipo_de_eleccion(tipo_eleccion1,fecha)
            VALUES (\''.$destino.'\',\''.$year.'\')';
            mysql_query($query) or die(mysql_error());


      	} 
      	echo 'datos insertados.<br />';
  }else{
 	echo "Error";
 }
 
 //echo "el nombre del partido es ".$array_consulta[1];


//}
 /*@$hola=$ORGANIZACIONES[0]."/".$ORGANIZACIONES[1]."/".$ORGANIZACIONES[2]."/".$ORGANIZACIONES[3];
$consulta= mysql_query("SELECT * FROM partidos WHERE id_partidos='".$ORGANIZACIONES[$i]."'" ,$Coneccion);
$array_consulta = mysql_fetch_array($consulta);

//,'".$ORGANIZACIONES[1]."','".@$ORGANIZACIONES[2]."'
echo "se ha registrado la coalicion".$ORGANIZACIONES[0]."/".$ORGANIZACIONES[1];

 
if ($partido==1) {
	echo "Se ha registrado la coalicion"."<br>";
}	
}else{
	echo "no se han enviado datos";
}*/
echo "<script type=\"text/javascript\">window.location.assign('hhh.php');</script>";
?>