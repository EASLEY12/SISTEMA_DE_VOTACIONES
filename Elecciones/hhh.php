<?php  include "Coneccion.php";


 ?>
  <?php 
 session_start();
 if (isset($_SESSION["nombre"])) 
 {
 	?>
 	
 	<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="iso-8859-1">
<meta name="Informaci" content="Rios de El salvador ">
<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
<title>Sistema de votaciones</title>
</head>
<body>



<header>
<h1> Bienvenido al sistemas de elecciones</h1>

</header>

<div ID ="base">

	
<br><br>
<section>

<ul Class="juan">
		<li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
		
		
				<?php
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
</li>
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
		</li>
		<li>Inscricion de candidato
		<ul> 
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
	$consulta= mysql_query("SELECT * FROM  tipo_de_eleccion WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
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
		<li>><a href='Formulario Registro Usuario.php'>registrar nuevo usuario</a></li>
	</ul>
	<br>
<input type="hidden" name="year" value="<?php echo date("Y"); ?>">
</section>
</div>
<style type="text/css">
* { margin: 0; padding: 0; }
#input, #start, #canvas, #output { display: block; position: relative; margin: 10px auto; }
</style>
<script type="text/javascript">
window.onload=function(){
  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');
  var start_button = document.getElementById('start');
  var input = document.getElementById('input');

  canvas.width  = 1000;
  canvas.height = 300;

  var x = canvas.width / 2;
  var y = canvas.height / 2;

  var full_text,
      full_text_arr,
      curr_text,
      frame;

  function drawText(text) {
      context.fillStyle = "#E4F1FE";
      context.font = "50px Arial Black";
      context.textAlign = 'center';
      context.fillText(text, x, y+10);
  }

  function animate() {
      frame = setInterval(function(){drawFrame()}, 100);
  }

  function drawFrame() {
      if (curr_text.length == full_text_arr.length) {
          clearInterval(frame);
      } else {
          context.clearRect(0, 0, canvas.width, canvas.height);
          curr_text.push(full_text_arr[curr_text.length]);
          context.fillStyle = "rgb(96, 211, 185)";
          context.fillRect(0,0,canvas.width,canvas.height);
          drawText(curr_text.join(''));
      }
  }

  function reset() {
    curr_text = [];
    clearInterval(frame);
    animate();
  }

  start_button.onclick = function() {
    clearInterval(frame);
    full_text = input.value;
    full_text_arr = full_text.split('');
    curr_text = [];
    animate();
  }
}
</script>
</head>
<style type="text/css">

	button {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
</style>

<body>
<div><br><br><br><br><br><br>
  <input type="text" id="input" value="Bienvenido  <?php echo $_SESSION["nombre"];?>" style="display:none">
  <button  id="start">Click para comenzar</button> <canvas id="canvas" width="600" height="300"></canvas>
</div>
</body>
</html>

 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"lo sentimos Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";

}

  ?>

