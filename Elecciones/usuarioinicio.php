<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Mi inicio de sesion</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">
		<link rel=stylesheet href="css/eslilo2.css" type="text/css">
		<link rel=stylesheet href="css/selec.css" type="text/css">
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
</script>
	</head>


	<body>

		<figure>
   			<img src="tse_logo.gif"><figcaption>Tribunal Supremo Electoral</figcaption>
		</figure>
		<br>
		<h1> Bienvenido al sistemas de votaciones <br>a continuacion elija el tipo de eleccion a realizar</h1>
			
			<section>

<ul Class="juan">
        <li><a href="/Elecciones/index.php"> Inicio de sesion</a></li>
        </ul>
    <br>

</section>
				<center>
				<form action="ingreso.php?accion=save" method="post" name ="fff" class="box login" >
				<table  >
				
				<td>
				<fieldset>
				<legend> Formulario Registro de Usuario</legend>
					<table   bordercolor="green" >
						<td>
						<label>Nombre:</label> 
						</td>
		<td>
		<input type="Text" name="Nombre" Placeholder="Nombre" required>
		</td>
		<tr>
		<td>
		<label> Apellidos:</label>
		</td>
		<td>
			<input type="text" name="Apellido" placeholder="Apellido" >
		</td>
			</tr>
		<tr>
			<td>
				<label>nombre de usuario:</label>
			</td>
			<td>
				<input type="text" name="Usuario" placeholder="Nombre de usuario">
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