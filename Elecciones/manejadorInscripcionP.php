 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>


<?php  include "Coneccion.php"; ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
			<div ID ="base">
		
<section>

<ul Class="juan">
 <li><a href="hhh.php">inicio</a></li>
 <li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
<?php
mysql_query("SET NAMES 'utf8'");
 

		$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 1 or tipo_eleccion1=2 or tipo_eleccion1=3  ",$Coneccion);
@$array_consulta = mysql_fetch_array($consulta);
$fecha=$array_consulta["fecha"];

if ($fecha<date("Y") ) {
echo "si se puede abrir";
echo $fecha;
echo "<li><a href='Tipo de eleccion t.php'> Apertura de elecciones</a>
";
}else{
	echo "";
}
?>	
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
		</li>
		<li>Inscricion de candidato<ul> 
		<?php
		$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario inscrincion de Presidentes.php'>Inscripcion Candidato a Presidente</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionPre.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 2 AND fecha= '".date("Y")."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscripcion Diputados.php'>Inscripcion Candidato a Diputado</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionD.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscrincion de Alcaldes.php'>Inscripcion Candidato Alcalde</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionA.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}

?>
		</ul>
		</li>
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
	</ul>
	<br>
</section>
</div>
<br>
<br>
<br>
<?php
include './Clases/Coneccion.php';
include './inscripcionPcontrolador.php';
$InsPartido= new InscripcionPcontrolador();
$rutaEnServidor='Imagenes';
@$rutaTemporal=$_FILES['imagen']['tmp_name'];
@$nombreImagen=$_FILES['imagen']['name'];

$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
	$accion= $_REQUEST['accion'];
switch ($accion) {
	case 'save':
		if(isset($_REQUEST['bot'])){
			$InsPartido->setId('NULL');
			$InsPartido->setNombreP($_REQUEST['partidoN']);
			$InsPartido->setImagen($rutaDestino);
			$InsPartido->setRlegal($_REQUEST['representanle']);
			$datosObj=array($InsPartido->getId(),
							$InsPartido->getNombreP(),
							$InsPartido->getImagen(),
							$InsPartido->getRlegal());
			print $InsPartido->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorInscripcionP.php?accion=con\'>Ver datos </a>';
		}else{
			print 'no se han enviado datos' ;
		}
		break;
	case 'con':
		$sql = 'SELECT id_partidos,nombre_partido AS Nombre,Codigo_Registro AS Registro,imagen AS Bandera,represent_partido AS Representante FROM partidos';
		$datoss= consultaD($con,$sql);
		print imprimetabla1($datoss,"partidos","table table-bordered",1);
}

?>
 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>