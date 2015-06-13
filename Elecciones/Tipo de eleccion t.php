<?php  include "Coneccion.php"; ?>

 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>
 	
 	<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<TITLE>TSE</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
		<script type="text/javascript">
		function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
</script>
		
	</head>
		
	<body>
	<div ID ="base">
<section>

<ul Class="juan">
		 <li><a href="hhh.php">inicio</a></li>
		 <li><a href="Index.php?cerrar=session"> salir   <?php echo $_SESSION["nombre"];?></a></li>
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
		</li></li>
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
		<li><a href='Formulario Registro Usuario.php'>registrar nuevo usuario</a></li>
	</ul>
	<br>

</section>
</div>
<div id="M">
	

		  <br><a href='Formulario Registro Usuario.php'>registrar nuevo usuario</a>

		</div>
		
<?php include './Clases/Coneccion.php';?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Pasar opciones de un select list a otro con jQuery</title>
	<script src="jquery.min.js"></script>
	<style>
	
	select{width:180px;margin:0 0 50px 0;border:1px solid #ccc;padding:10px;border-radius:10px 0 0 10px; cursor: pointer;}

	div{float:left;width:200px;text-align:center;cursor:pointer;}
	input {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
	.izq{border-radius:10px 0 0 10px;}
	.der{border-radius:0 10px 10px 0;}
	</style>
</head>
<body >
<br>
<br>
	<h1>Tipo de leccion</h1>
	<table><form action="algo.php" method="post" id="formulario">
		<div>
			<select name='ORGANIZACIONES[]' id="origen" multiple="multiple" size="4" class="pasar izq" required>
			<option value="1" >Presidenciales</option>
			<option value="2">Legisltivas </option>
			<option value="3">Municipales</option>
			</select>
			<label>Año de eleccion</label>
			<input type="" name="fecha" value="<?php echo date("Y") ?>" maxlength="4" onkeypress="return justNumbers(event);" required >
			<input type="submit" class="submit" value="Guardar el tipo de leccion">
		</div>
		<br>
		<br>
		<br>
		<br>

		
	</form>
	</table>


	</body>
</html>

 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>

