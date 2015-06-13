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
<?php
include './clases/coneccion.php';
include './inscripcionAcontrolador.php';
	$sql="DELETE FROM inscripcion_candidato WHERE id_inscripcion_candidato=".$_REQUEST['id'].";";
		print "<div id='dialogo' title='exito' style='display: none;'>";
		print '<p>mensaje: ';
		print consultaA($con, $sql);
		print '<span class="badge glyphicon glyphicon-ok"></span></p>';
		print '<a href=\'manejadorinscripcionA.php?accion=con\'>ver datos</a>';
		print "</div>";

		
?>
<script>
$(document).ready(function(){
	$("#dialogo").dialog();
});
</script>
	</body>
</html>