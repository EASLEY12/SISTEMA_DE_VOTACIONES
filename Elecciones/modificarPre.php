<html>
	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<head>
	<body>
<?php
include './Clases/Coneccion.php';
include './inscripcionAcontrolador.php';
$insAlcalde= new inscripcionAcontrolador();
@$dui=$_REQUEST['DUI'];
if (strlen($dui)<=9){
	echo "<script type=\"text/javascript\">alert(\"no ha escrito completamente el Dui  \");window.location.assign('Formulario inscrincion de Presidentes.php');</script>";
}else{

if (isset($_REQUEST['envio'])) {
		$insAlcalde->setId($_REQUEST['id']);
		$insAlcalde->setDui($_REQUEST['DUI']);
			$insAlcalde->setNombre($_REQUEST['nombre']);
			$insAlcalde->setApellido($_REQUEST['apellido']);
			$insAlcalde->setDepartamento($_REQUEST['Departamento']);
			$insAlcalde->setMunicipio($_REQUEST['Municipio']);
			$insAlcalde->setCandidatura($_REQUEST['hola']);
			$insAlcalde->setCargo($_REQUEST['Cargo']);
			$insAlcalde->setPartido($_REQUEST['Partido']);
			$datosObj= array($insAlcalde->getId(),
							$insAlcalde->getDui(),
							$insAlcalde->getNombre(),
							$insAlcalde->getApellido(),
							$insAlcalde->getDepartamento(),
							$insAlcalde->getMunicipio(),
							$insAlcalde->getCandidatura(),
							$insAlcalde->getCargo(),
							$insAlcalde->getPartido());	

			 include "Coneccion.php"; 
$consulta= mysql_query("SELECT * FROM inscripcion_candidato WHERE  id_cargos= 3  and id_inscripcion_candidato=".$_REQUEST['id']." ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {

			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $insAlcalde->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
	print '<a href=\'manejadorinscripcionA.php?accion=con\'>ver datos</a>';			print "</div>";

}else{
	$consulta= mysql_query("SELECT * FROM inscripcion_candidato WHERE  id_cargos= 2  and id_inscripcion_candidato=".$_REQUEST['id']." ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {

			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $insAlcalde->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
				print '<a href=\'manejadorinscripcionD.php?accion=con\'>ver datos</a>';
				print "</div>";
			}else{
				$consulta= mysql_query("SELECT * FROM inscripcion_candidato WHERE  id_cargos= 1  and id_inscripcion_candidato=".$_REQUEST['id']." ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {

			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $insAlcalde->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
				print '<a href=\'manejadorinscripcionPre.php?accion=con\'>ver datos</a>';
				print "</div>";
			}
			}
}

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