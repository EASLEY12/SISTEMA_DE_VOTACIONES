<?php  include "Coneccion.php"; ?>
<?php include './Clases/Coneccion.php';?>

 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Inscrincion de candidato a Alcaldes</title>
		<link rel="stylesheet" href="css/estyle.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/name.css">
		<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
<link rel="stylesheet" type="text/css" href="css/selec.css">

		<SCRIPT type="text/javascript" src="verificacion.js">
		</SCRIPT>
<SCRIPT type="text/javascript" src="jquery.js"></script>
<script type="text/javascript"> 
function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}
function idmunicipio(){

}
	function cargarMunicipio(id){
		$("#municipios").load('cargarMunicipio.php?id='+id);
	}	
	function cargarBandera(id){
		$("#divBandera").load('img.php?id='+id);
	}


		function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
	val = d.value
	largo = val.length
	val = val.split(sep)
	val2 = ''
	for(r=0;r<val.length;r++){
		val2 += val[r]	
	}
	if(nums){
		for(z=0;z<val2.length;z++){
			if(isNaN(val2.charAt(z))){
				letra = new RegExp(val2.charAt(z),"g")
				val2 = val2.replace(letra,"")
			}
		}
	}
	val = ''
	val3 = new Array()
	for(s=0; s<pat.length; s++){
		val3[s] = val2.substring(0,pat[s])
		val2 = val2.substr(pat[s])
	}
	for(q=0;q<val3.length; q++){
		if(q ==0){
			val = val3[q]
		}
		else{
			if(val3[q] != ""){
				val += sep + val3[q]
				}
		}
	}
	d.value = val
	d.valant = val
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


if (numeroCaracteres<=9) {alert("Escriba completo el numero de DUI")}

 }

</script>
	</head>
	<body>
	<div ID ="base">	
<section>
<ul Class="juan">
<li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
		 <li><a href="hhh.php">inicio</a></li>
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
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>

		</li>
		<li>Inscricion de candidato<ul> 
		<?php
		$consulta= mysql_query("SELECT * FROM tipo_de_eleccion  WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario inscrincion de Presidentes.php'>Inscripcion Candidato a Presidente</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionPre.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion  WHERE tipo_eleccion1= 2 AND fecha= '".date("Y")."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscripcion Diputados.php'>Inscripcion Candidato a Diputado</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionD.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
	$consulta= mysql_query("SELECT * FROM tipo_de_eleccion  WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscrincion de Alcaldes.php'>Inscripcion Candidato Alcalde</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionA.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}

?></ul></li>
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
	</ul>

</section>
</div>
<br>
<br>
<br>
<h1> Bienvenido al sistemas de votaciones <br>a continuacion debe inscribir al candidato a alcalde</h1>
		
		<form action="manejadorinscripcionA.php?accion=save" method="post" id="cc" class="box lgin">
		
				<table  >
		<td>
		<fieldset>
		<legend> Formulario para incripcion candidato a Alcalde</legend>
		<table  bordercolor="violet" border="">
		<tr><td><label>Tipo de candidatura</label></td>
					<td>
<input type="radio" title="si deceas crear una coalicion selecciona aqui " name="hola" value="3" onclick="if(this.checked==true){document.getElementById('coa').src='Formulario Inscripcion de Colalicion.php';document.getElementById('coa').style.display='';}{document.getElementById('Partido').style.display='none';}{document.getElementById('divBandera').style.display='none';}" required>coalicion
<input type="radio" title="Si quieres que la candidatura sea partidaria selecciona aqui" name="hola" value="1" onclick="if(this.checked==true){document.getElementById('coa').src='';document.getElementById('coa').style.display='none';}{document.getElementById('Partido').style.display='';}{document.getElementById('divBandera').style.display='';}"> partidaria
<input type="radio" title="Si quieres que la candidatura sea independiente selecciona aqui" name="hola" value="2" onclick="if(this.checked==true){document.getElementById('coa').src='';document.getElementById('coa').style.display='none';}{document.getElementById('Partido').style.display='none';}{document.getElementById('divBandera').style.display='none';}"> independiente
				</td>
					

								<tr>
				<td><label>N° de DUI:</label></td>
				<td><input type="text" title="Registra el DUI del candidato electo" name="DUI" id="hola" value='<?php if(isset($_POST["DUI"])){echo $_POST["DUI"];} ?>' placeholder="Numero de DUI" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" required ></td>
				</tr>
				<td><label>Nombre:</label></td>
				<td><input type="text" title="Escribe el nombre del candidato electo a Alcalde" name="nombre" onkeypress="txNombres()" placeholder="Nombre" value='<?php if(isset($_POST["nombre"])){echo $_POST["nombre"];} ?>' required></td>
				<tr>
				<tr>
					<td><label>Apellido:</label></td>
				<td><input type="text" title="escribe los Apellidos del candidato" name="apellido"  onkeypress="txNombres()" value='<?php if(isset($_POST["apellido"])){echo $_POST["apellido"];} ?>'placeholder="Apellidos" required></td>
				</tr>
				<tr>
					<td><label> Elija su partido Politico:</label></td>
					<td>
					<div class="dropdown dropdown-dark">
			<select name="Partido" title="Elije el partido que representara el candidato" size="1" class="dropdown-select" id="Partido" onchange="cargarBandera(this.options[this.selectedIndex].value);" >
				<option value=""></option>
				<?php 
				$sql="SELECT id_partidos,nombre_partido FROM partidos; ";
  					$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['id_partidos']."'";
  						print">";
  						print $value['nombre_partido'];
  						print "</option>";
  					}
				?>
				</select>
</div>

   				</td>
   				<td width="150px" height="100px"><output id="divBandera"></output></td>

				</tr>

				<tr>
				<td><label>Cargo al que aspira</label></td>
			
			<td>
			<div class="dropdown dropdown-dark">
					<select name="Cargo" title="Seleccione el cargo al que inspira el candidato" class="dropdown-select" >
   					<?php
   					$sql= "SELECT id_cargos,tipo_cargo FROM cargos where id_cargos= 3 ;";
   					$datos= consultaD($con,$sql);
   					foreach ($datos as $value) {
   					print "<option value='";
					print $value['id_cargos'];	
					print "'>";
					print $value['tipo_cargo'];
					print "</option>";
   					}
   					?>

   				</select>
   				</div>
				</td>
			
					
				</tr>
				<tr>
					<td><label>Pais:</label></td>
					<td>
<div class="dropdown dropdown-dark">
					<select name="Pais" size="1" class="dropdown-select">
				<option value="" label="EL SALVADOR"></option>
				</select>
				</div>
				</td>
				<tr>
					<td><label>Departamento</label></td>
					<td>
<div class="dropdown dropdown-dark">
					<select name="Departamento" title="Seleccione el departamento" size="1" class="dropdown-select" onchange="cargarMunicipio(this.options[this.selectedIndex].value);" required>
				<option value=""></option>
				<?php

				$sql="SELECT id_departamento,departamento,codigo_departamento FROM departamentos ";
				$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['codigo_departamento']."'";
  						print">";
  						print utf8_encode($value['departamento']);
  						print "</option>";
					}

				?>
				</select>
</div>
				</td>
				</tr>
					<tr><td>
					<label>Municipio:</label>
				</select>
				</td>
			

				<td width="172px" height="32px"><output id="municipios" > </output></td>
				<tr>
				<td>
				<input type="submit" name="envio" value="Guardar" onclick= "wordCount()" >
				</td>
				</tr>
			

		</table>
		</fieldset>

		
		</td>
		<td><output><iframe src="" name="nombre" id="coa" style="display:none" width="705px" height="550px"></iframe></output></td>
		</tr>

		</table>

	
			
		
		

				<?php
				/*
				$co = 0;
				echo "<table border=1><tr>";
				while ( $co < 10) {
					echo '<td><input type="checkbox" name="s'.$co.'" id="s'.$co.'"> ' ;
					echo '<label>'.$co.'</label></td>';
					$co++;
				}
				echo "</tr></table>";
				 */
				?>
				


		</form>
	
		
	</body>
</html>

 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>

