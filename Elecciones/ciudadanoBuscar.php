<?php include './Clases/Coneccion.php';?>

<?php  include "Coneccion.php"; ?>
 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<?php   $sql = "SELECT * FROM  ciudadano WHERE id_ciudadano='".$_REQUEST['id']."';";
  $datos=consultaD($con,$sql,3);?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Votantes</title>
			<link rel=stylesheet href="css/estyle.css" type="text/css">
			<link rel=stylesheet href="css/name.css" type="text/css">
			<link rel=stylesheet href="css/selec.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/prototipo1.css">
			<SCRIPT type="text/javascript" src="jquery.js"></script>

			<script type="text/javascript">
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


if (numeroCaracteres<=9) {
	alert("Escriba completo el numero de DUI")

}

 }
function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122) && (event.keyCode<166))
  event.returnValue = false;
}
			
</script>

	</head>
	<body>
				<div ID ="base">
		
<section>

<ul Class="juan">
 <li><a href="hhh.html">inicio</a></li>
 <li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
		<li><?php
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
?></li>
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
		<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
</li>
		<li>Inscricion de candidato<ul> 
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
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a>
<ul>
	<li>
		<a href="manejadorInscripcionCiu.php?accion=con">Ver datos  de los ciudadanos</a>
	</li>
</ul>
		</li>
	</ul>
	<br>
</section>
</div>
<br>
		<br>
		<h1> Bienvenido al sistemas de votaciones <br>Inscripcion de votantes</h1>
			<form action="modificarCiudadano.php"  method="post" enctype="multipart/form-data" class="box lgin">
		<table  >
		<td>
		
		<fieldset>
  				<legend> Formulario para Registro de Votantes</legend>
  				<table  bordercolor="red">
  				<td> 
  				<label>DUI:</label>
  				</td>
  				<td>
  				<?php
  				$depto=$datos[0][7];
  				$muni=$datos[0][8];
  				echo $depto;
  				echo "<br>";
  				echo $muni;
  				echo "<br>";
  				$generos=$datos[0][5];
  				echo $generos;
  				?>
  				<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
  					<input type="Text" name="DUI" value='<?php print $datos[0][1]?>' id="hola" Placeholder="00000000-0" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10"  required>
  				</td>		
		<tr>
			<td>
				<label>Apellidos</label>
			</td>
			<td>
				<input type="Text" name="Apellido" value='<?php print $datos[0][3]?>' onkeypress="txNombres()" placeholder="Apellido" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Nombres:</label>
			</td>
			<td>
				<input type="Text" name="Nombre" value='<?php print $datos[0][2]?>' onkeypress="txNombres()"  placeholder="Nombres" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Foto:</label>
			</td>
			<td>
			<input type="hidden"  name="original"   value="<?php print $datos[0][6]?>" >
				 <input type="file" name="imagen" onclick="document.getElementById('imagen').style.display='none'" id="files"  accept="image/*"  >
			</td>
			<td width="170px" height="126px">
			<img  id="imagen"  style="width:150px;height:100px;"src="<?php print $datos[0][6]?>" >
                 <output id="list"></output>
              </td>
		</tr>
		<tr>
			<td>
				<label>Genero:</label>
			</td>
			<td>
			<?php
				if ($generos=="M") {

		echo '<input type="Radio" checked="TRUE" name="genero" value="M">M';
		echo '<input type="Radio" name="genero" value="F" required>F ';
				}else{
					echo '<input type="Radio"  name="genero" value="M">M';
		echo '<input type="Radio" checked="TRUE" name="genero" value="F" required>F ';

				}
			  ?>
				
				
			</td>
		</tr>
		<tr>
			<td>
				<label>Fecha de vencimiento</label>
			</td>
			<td>
				<input type="date" name="fecha"  value='<?php print $datos[0][4]?>'required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Direccion:</label>
			</td>
			<td>
				 <textarea name="direccion" placeholder='direccion' required><?php print $datos[0][9]?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Departamento</label>
			</td>
			<td>
			<div class="dropdown dropdown-dark">
			<select name="Departamento" size="1"   class="dropdown-select" onchange="cargarMunicipio(this.options[this.selectedIndex].value);" required>
				<?php
	
								 	$sql="SELECT id_departamento,departamento,codigo_departamento FROM departamentos WHERE codigo_departamento ='".$depto."'";
				$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['codigo_departamento']."'";
  						print">";
  						print utf8_encode($value['departamento']);
  						print "</option>";
					}

				?>
				<option value=""></option>
				<?php

				$sql="SELECT id_departamento,departamento,codigo_departamento FROM departamentos WHERE codigo_departamento !='".$depto."' ORDER BY departamento ASC " ;
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
		<tr>
			<td>
				 <label>Municipio</label>
			</td>
			<td width="203px" height="32px">
			<output id="municipios" ></output>
			<div class="dropdown dropdown-dark">
					<select name="Municipio" size="1" class="dropdown-select" >
				
				<?php
			
				$sql="SELECT id_municipios,municipios,codigo_municipio FROM municipios WHERE codigo_municipio ='".$muni."'";
				$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['codigo_municipio']."'";
  						print">";
  						print utf8_encode($value['municipios']);
  						print "</option>";
					}

				?>
				<option value=""></option>
				<?php
				$sql="SELECT id_municipios,municipios,codigo_municipio,	codigo_depart FROM municipios WHERE codigo_depart='".$depto."' AND codigo_municipio !='".$muni."' ORDER BY municipios   ASC" ;
				$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['codigo_municipio']."'";
  						print">";
  						print utf8_encode($value['municipios']);
  						print "</option>";
					}				
				?>

				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="enviar" name="envio" onclick="wordCount()" >
			</td>
		</tr>
		</table>
		</fieldset>
	</td>

		</table>

		</form>
		</div>
		<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img style=width:150px;height:100px; class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);

function cargarMunicipio(id){
	
		$("#municipios").load('cargarMunicipio.php?id='+id);
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





      </script>
	</body>
</html>

 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>
