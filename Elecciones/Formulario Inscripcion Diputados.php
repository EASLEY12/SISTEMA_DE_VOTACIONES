<?php  include "Coneccion.php"; ?>
<?php include './Clases/Coneccion.php';?>
 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<!DOCTYPE html>
<html>
	<head>
		<meta <meta charset="iso-8859-1">
		<TITLE>Inscrincion de candidato a Diputados</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/name.css">
		<link rel=stylesheet href="css/selec.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/prototipo1.css">


<SCRIPT type="text/javascript" src="verificacion.js"></SCRIPT>
<SCRIPT type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

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

function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 46) ||(keynum == 8) ) 
return true;
 
return /\d/.test(String.fromCharCode(keynum));
}

			function wordCount() {
  
  textoArea = document.getElementById("nombre").value;
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
document.getElementById('salu').innerHTML="introdusca todos los digitos";
document.getElementById('nombre').focus()
 }

 }

   function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

</script>

<style type="text/css">
	
		

	</style>

	</head>
	<body>
	
			<div ID ="base">
		
<section>

<ul Class="juan">
		 <li><a href="hhh.php">inicio</a></li>
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
		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
		<ul>
	<li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>
</li>
	<li>Inscricion de candidato<ul> 
		<?php
		$consulta= mysql_query("SELECT * FROM  tipo_de_eleccion WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
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

?></ul></li>
		<li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
	</ul>
	<br>
</section>
</div>
<br>
<br>
		<br>
		<h1> Bienvenido al sistemas de votaciones <br>a continuacion debe inscribir al candidato a diputado</h1>

		<form action="manejadorinscripcionD.php?accion=save" method="post" class="box logn" enctype="multipart/form-data">
		<table >
		<td><fieldset>
  				<legend> Formulario para incripcion candidato a diputado </legend>
			<table bordercolor="pink" >
				<td>
						<label>Tipo de candidatura</label>
					</td>
					<td>
					<input type="radio" title="Si quieres registrar una coalicion selecciona aqui" name="hola" value="3" onclick="if(this.checked==true){document.getElementById('coa').src='coalision2.php';document.getElementById('coa').style.display='';}{document.getElementById('divBandera').style.display='none';}{document.getElementById('Partido').style.display='none';}" required>coalicion
					<input type="radio" title="si quieres registrar una eleccion partidaria selecciona aqui" name="hola" value="1" onclick="if(this.checked==true){document.getElementById('coa').src='';document.getElementById('coa').style.display='none';}{document.getElementById('Partido').style.display='';}{document.getElementById('divBandera').style.display='';}"> partidaria
					<input type="radio" title="si quieres registrar una eleccon independiente selecciona aqui" name="hola" value="2" onclick="if(this.checked==true){document.getElementById('coa').src='';document.getElementById('coa').style.display='none';}{document.getElementById('Partido').style.display='none';}{document.getElementById('divBandera').style.display='none';}"> independiente
					</td>
				<tr>
					<td>
						<label>N° de DUI:</label>
					</td>
					<td>
						<input type="text" title="Escribe el Dui del candidato a Diputado" name="DUI" placeholder="Numero de DUI" id="nombre" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10" required/>
					<output id="salu"></output>
					</td>
				</tr>
				<tr>
					<td>
						<label>Nombre:</label>
					</td>
					<td>
						<input type="text" title="Escribe los nombres del candidato" name="nombre" placeholder="Nombre" onkeypress="txNombres()" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Apellido:</label>
					</td>
					<td>
						<input type="text" title="Escribe los apellidos del candidato" name="apellido" placeholder="Apellidos" onkeypress="txNombres()">
					</td>
				</tr>

				<tr>
					<td>
						<label>Ingrese una fotografia:</label>
					</td>
					<td>
						<input type="file" title="Ingresa una fotografia del candidato electo para ser registrado" name="imagen" id="files"  accept="image/*" required>
						</td><td height="126px" >
				 <output id="list"></output>
					</td>
				</tr>
				<tr>
					<td>
					<label> Elija su partido Politico</label>
				</td>
				<td>
<div class="dropdown dropdown-dark">
					<select name="Partido" title="Elije el partido que el candidato representara" id="Partido" class="dropdown-select" onchange="cargarBandera(this.options[this.selectedIndex].value);" />
  				<option value=""></option>
  					<?php
  					$sql="SELECT id_partidos,nombre_partido FROM partidos; ";
  					$datos = consultaD($con,$sql);
  					foreach ($datos as  $value) {
  						print "<option value='";
  						print $value['id_partidos']."'";
  							if(isset($_POST["Partido"])){
  						if($_POST['Partido']==$value['id_partidos'])
  						print "SELECTED";
  						}
  						print">";
  						print $value['nombre_partido'];
  						print "</option>";
  						

  					}
  					
  					?>
  				</select>
  				</div>
				</td>
				<td width="170px" height="126px">
					<output id="divBandera" ><output/>
				</td>
				
				</tr>
				
				<tr>
					<td>
						<label>Cargo al que aspira</label>
					</td>
					<td>
					<div class="dropdown dropdown-dark">
						<select name="Cargo" title="Selecciona el cargo por el cual inspira el candidato" class="dropdown-select">
   					<?php
   					$sql= "SELECT id_cargos,Tipo_cargo FROM cargos where id_cargos= 2  ;";
   					$datos= consultaD($con,$sql);
   					foreach ($datos as $value) {
   					print "<option value='";
					print $value['id_cargos'];	
					print "'>";
					print $value['Tipo_cargo'];
					print "</option>";
   					}
   					?>
   				</select>
   				</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Pais</label>
					</td>
					<td>
						<div class="dropdown dropdown-dark">
						<select name="Pais" title="Selecciona el pais a representar" size="1" class="dropdown-select">
				<option value="" label="EL SALVADOR"></option>
				</select>
</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Departamento</label>
					</td>
					<td>
					<div class="dropdown dropdown-dark">
						<select name="Departamento" title="selecciona el departamento por el cual representara el candidato" class="dropdown-select" required>
				<option value=""></option>
				<?php
			
					$sql="SELECT id_departamento,departamento,codigo_departamento FROM departamentos ;";
					$datos= consultaD($con,$sql);
					foreach ($datos as  $value) {
						print "<option value='";
						print $value['codigo_departamento'];
						echo  "'>";
						echo utf8_encode($value['departamento']);
						echo "</option>";
					}

				?>
				</select>
				</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="bot" value="guardar" onclick="wordCount()" >
					</td>
				</tr>
			</table>
			</fieldset>
			<td><output><iframe src="" name="nombre" id="coa" style="display:none" width="620px" height="580px"></iframe></output></td>
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
      </script>
	</body>
</html>
<br>

 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>


