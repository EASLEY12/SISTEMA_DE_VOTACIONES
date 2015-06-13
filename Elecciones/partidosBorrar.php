 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">"
	<title></title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src=".libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	</head>
<body>
<li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>

<?php
include './clases/coneccion.php';
include './inscripcionDcontrolador.php';
	$sql="DELETE FROM  partidos WHERE id_partidos=".$_REQUEST['id'].";";
		print "<div id='dialogo' title='exito' style='display: none;'>";
		print '<p>mensaje: ';
		print consultaA($con, $sql);
		print '<span class="badge glyphicon glyphicon-ok"></span></p>';
		print '<a href=\'manejadorInscripcionP.php?accion=con\'>Ver datos </a>';
		print "</div>";
?>
<script>
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
