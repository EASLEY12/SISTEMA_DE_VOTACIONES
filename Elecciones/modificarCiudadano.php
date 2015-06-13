<?php  include "Coneccion.php"; ?>
 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

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

		<li><a href="Tipo de eleccion t.php"> Apertura de elecciones</a></li>
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
		</li>
		<li>Inscricion de candidato<ul> 
		<?php
		$consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario inscrincion de Presidentes.php'>Inscripcion Candidato a Presidente</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionPre.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 2 AND fecha= '".date("Y")."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscripcion Diputados.php'>Inscripcion Candidato a Diputado</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionD.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
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
include './inscripcionCiucontrolador.php';
$insCiu= new inscripcionCiucontrolador();
$rutaEnServidor='Imagenes';
@$rutaTemporal=$_FILES['imagen']['tmp_name'];
@$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
@$dui=$_REQUEST['DUI'];
$imagen=$_REQUEST['original'];
if ($rutaTemporal<>"") {
	if (strlen($dui)<=9){
	echo "<script type=\"text/javascript\">alert(\"no ha escrito completamente el Dui  \");window.location.assign('Formulario Registro de votante .php');</script>";
}else{ 

	echo $rutaTemporal;

	if (isset($_REQUEST['envio'])) {
		$insCiu->setId($_REQUEST['id']);
		$insCiu->setDui($_REQUEST['DUI']);
		$insCiu->setNombres($_REQUEST['Nombre']);
		$insCiu->setApellidos($_REQUEST['Apellido']);
		$insCiu->setFecha($_REQUEST['fecha']);
		$insCiu->setgenero($_REQUEST['genero']);
		$insCiu->setImagen($rutaDestino);
		$insCiu->setDepartamento($_REQUEST['Departamento']);
		$insCiu->setMunicipio($_REQUEST['Municipio']);
		$insCiu->setDireccion($_REQUEST['direccion']);
		$datosObj=array($insCiu->getId(),
						$insCiu->getDui(),
						$insCiu->getNombres(),
						$insCiu->getApellidos(),
						$insCiu->getFecha(),
						$insCiu->getgenero(),
						$insCiu->getImagen(),
						$insCiu->getDepartamento(),
						$insCiu->getMunicipio(),
						$insCiu->getDireccion());
		print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
	print $insCiu->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
print '<a href=\'manejadorInscripcionCiu.php?accion=con\'>Ver datos </a>';
				print "</div>";
		}}

}else{

	if (strlen($dui)<=9){
	echo "<script type=\"text/javascript\">alert(\"no ha escrito completamente el Dui  \");window.location.assign('Formulario Registro de votante .php');</script>";

}else{
		$insCiu->setId($_REQUEST['id']);
		$insCiu->setDui($_REQUEST['DUI']);
		$insCiu->setNombres($_REQUEST['Nombre']);
		$insCiu->setApellidos($_REQUEST['Apellido']);
		$insCiu->setFecha($_REQUEST['fecha']);
		$insCiu->setgenero($_REQUEST['genero']);
		$insCiu->setImagen($imagen);
		$insCiu->setDepartamento($_REQUEST['Departamento']);
		$insCiu->setMunicipio($_REQUEST['Municipio']);
		$insCiu->setDireccion($_REQUEST['direccion']);
		$datosObj=array($insCiu->getId(),
						$insCiu->getDui(),
						$insCiu->getNombres(),
						$insCiu->getApellidos(),
						$insCiu->getFecha(),
						$insCiu->getgenero(),
						$insCiu->getImagen(),
						$insCiu->getDepartamento(),
						$insCiu->getMunicipio(),
						$insCiu->getDireccion());
		

			
				print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
	print $insCiu->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
print '<a href=\'manejadorInscripcionCiu.php?accion=con\'>Ver datos </a>';
				print "</div>";
		}
}
?>

	<script >
	$(document).ready(function(){
		$("#dialogo").dialog();
	});
</script>
</body>
</html>
 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>