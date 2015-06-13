<?php  include "Coneccion.php"; ?>

 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Mi inicio de sesion</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">
		<link rel=stylesheet href="css/eslilo2.css" type="text/css">
		<link rel=stylesheet href="css/selec.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
		<script>
function comprobarClave(){
	Clave = document.fff.Clave.value
	CClave = document.fff.CClave.value
	
	if (Clave == CClave){

		document.getElementById('resultado').innerHTML="Las Claves coinciden"; 
		document.getElementById('img2').innerHTML="<img style='width:13px;height:15px;' src='OK.jpg'>"

	}else
 { 
 	document.getElementById('resultado').innerHTML="Las Claves son diferentes"; 
 	document.getElementById('img2').innerHTML=""
}
	
		}
function wordCount() {
  
  textoArea = document.getElementById("hola").value;
  numeroCaracteres = textoArea.length;
  inicioBlanco = /^ /
  finBlanco = / $/
  variosBlancos = /[ ]+/g 

  textoArea = textoArea.replace(inicioBlanco,"");
  textoArea = textoArea.replace(finBlanco,"");
  textoArea = textoArea.replace(variosBlancos," ");


  textoAreaDividido = textoArea.split(" ");
  numeroPalabras = textoAreaDividido.length;

  tC = (numeroCaracteres==1)?" carácter":" caracteres";
  tP = (numeroPalabras==1)?" palabra":" palabras";
     
  //alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);


if (numeroCaracteres>=12) {document.getElementById('img').innerHTML="<img style='width:13px;height:15px;' src='OK.jpg'>"}
else{ document.getElementById('img').innerHTML=""}; 
if (numeroCaracteres<=11  ) { 
	document.getElementById('Caracter').innerHTML= "hasta el momento a utilizado " +numeroCaracteres + " incluyendo " +numeroPalabras+" " +tP ;
	document.getElementById('salu').innerHTML= "Para mayor seguridad utilice mas de  12 caracteres"



	if (numeroCaracteres<=0) {
	 document.getElementById('Caracter').innerHTML= "" ;
document.getElementById('salu').innerHTML= "";


};



}else{document.getElementById('Caracter').innerHTML= "" ;
	document.getElementById('salu').innerHTML= "";



};

 }
 function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

</script>
	</head>

	<body>
	<div ID ="base">	
<section>
<ul Class="juan">
<li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
		 <li><a href="hhh.php  ?>">inicio</a></li>
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
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a><ul>
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
		<li><a href='Formulario Registro Usuario.php'>registrar nuevo usuario</a></li>
	</ul>
</section>
</div>
<br>
<br>
<br>
		<h1> Bienvenido al sistemas de votaciones <br> Registre el nuevo usuario</h1>
			
				<center>
				<form action="manejadorinscripcionUs.php?accion=save" method="post" name ="fff" class="box lgin" >
				<table  >
				
				<td>
				<fieldset>
				<legend> Formulario Registro de Usuario</legend>
					<table  >
						<td>
						<label>Nombre:</label> 
						</td>
		<td>
		<input type="Text" name="Nombre" Placeholder="Nombre" onkeypress="txNombres()" required>
		</td>
		<tr>
		<td>
		<label> Apellidos:</label>
		</td>
		<td>
			<input type="text" name="Apellido" placeholder="Apellido" onkeypress="txNombres()" required >
		</td>
			</tr>
		<tr>
			<td>
				<label>nombre de usuario:</label>
			</td>
			<td>
				<input type="text" name="Usuario" placeholder="Nombre de usuario" required>
			</td>
		</tr>
		<tr>
		<td>
		<label>Ingrese contraseña:</label>
		</td>
		<td>
		<input type="password" name="Clave" placeholder="Ingrese clave"   id="hola"  onkeyup="wordCount()" required><output id="img" >  </output>
		</td>
		<tr>
			<td></td>
			<td width="700px"><output id="salu"></output> <output id="Caracter"></output> </td>
		</tr>
		</tr>
		<tr>
		<td>
		<label>Ingrese de nuevo la contraseña:</label>
		<td>
		<input Type="password" name="CClave" placeholder="Ingrese nuevamente la clave"   onkeyup="comprobarClave()" ></output> <output id="img2"></output>
		</td>
		<tr>
			<td></td>
			<td><output id="resultado"> </output> </td>
		</tr>
		<tr>
			<td>
				<label>Tipo de usuario:</label>
			</td>
			<td>
				<input type="radio" name="tipo" value="1">administrador
				<input type="radio" name="tipo" value="2">usuario
			</td>
		</tr>
		<tr>

			<td><label>Fecha:</label></td>
			<td><input type="Text" name="fecha"  value="<?php echo date("Y/m/d"); ?>" readonly ></td>
		</tr>
		</tr>
		<tr>
		<td>
		<input type="submit" value="Crear Cuenta" name="cuenta"  onclick="wordCount()">	
		</td>
		</tr>
					</table>
				</fieldset>

				</td>
				
		</TABLE>
		</form>		
		</center>
		
		
	</body>
</html>
 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>
