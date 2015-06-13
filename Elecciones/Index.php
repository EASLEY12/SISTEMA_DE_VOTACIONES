<?php
session_start();
if (@$_GET["cerrar"]) {
	session_unset();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<TITLE>TSE</title>
		<link rel="stylesheet" href="css/estyle.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/micss.css">


	</head>
	<body>
		
		<figure>
   			<img src="tse_logo.gif"><figcaption>Tribunal Supremo Electoral</figcaption>
		</figure>
		<br>
		<h1> Bienvenido al sistemas de votaciones <br>Ingrese su usuario para poder iniciar </h1>
	<a href="GRAFICA2/GRAFICA.php"> Vista de grafica</a>
	
		<form action="Tipo de eleccion.php"  method="post" class="box login">
		
		<table   >
		<td><label>Ingrese nombre de usuario</label>
		</td>
		<td>
		<input type="Text" name="Usuario" Placeholder="Nombre de usuario" >
		</td>
		<tr>
		<td><label>Ingrese contraseña</label>
		</td>
		<td>
		<input type="password" name="Clave" placeholder="Ingrese contraseña">
		<output id="resultado"> </output>
		</td>
		</tr>
		<tr>
			<td>
				<label>Tipo de usuario:</label>
			</td>
			<td>
				<input type="radio" name="tipo" value="1" required>administrador
				<input type="radio" name="tipo" value="2">usuario
				<input type='checkbox' name='Presidente' id="p" value='1'  onclick="if(this.checked==true){window.open('usuarioinicio.php')}"> Registrate
			</td>
			<td> </td>
		</tr>
		<td > 
		
		<input type="submit" value="enviar" name="envio" class="btnLogin"><BR>
		<a href="GRAFICA2/GRAFICA.php"> Vista de grafica</a>
		</td>
		</table>

		</form>
	
		<script type="text/javascript">
//window.open('inscrincion de presidentes.html')
		</script>
	</body>
</html>
