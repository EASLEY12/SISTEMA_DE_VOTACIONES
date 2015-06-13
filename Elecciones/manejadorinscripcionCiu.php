 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
 	?>

<?php  include "Coneccion.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/prototipo1.css">

</head>
<body>
<section>

<ul Class="juan">
 <li><a href="hhh.php">inicio</a></li>
 <li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>

<?php
mysql_query("SET NAMES 'utf8'");
 

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
?>		<li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
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
<?php
include './Clases/Coneccion.php';
include './inscripcionCiucontrolador.php';
$insCiu= new inscripcionCiucontrolador();
$rutaEnServidor='Imagenes';
@$rutaTemporal=$_FILES['imagen']['tmp_name'];
@$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);
$accion=$_REQUEST['accion'];
@$dui=$_REQUEST['DUI'];

switch ($accion) {
	case 'save':
	if (strlen($dui)<=9){
	echo "<script type=\"text/javascript\">alert(\"no ha escrito completamente el Dui  \");window.location.assign('Formulario Registro de votante .php');</script>";
}else{ 

	if (isset($_REQUEST['envio'])) {
		$conexion=mysql_connect("localhost","root")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
         mysql_select_db("sistema_de_elecciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
         $checkuser = mysql_query("SELECT dui FROM ciudadano WHERE dui='$dui'");

         if (mysql_num_rows($checkuser)>0) {
            echo "<script type=\"text/javascript\">alert(\"El numero de DUI  ".$dui." ya Existe\");window.location.assign('Formulario Registro de votante .php');</script>";
         }else{

		$insCiu->setId('NULL');
		$insCiu->setDui($_REQUEST['DUI']);
		$insCiu->setNombres($_REQUEST['Nombre']);
		$insCiu->setApellidos($_REQUEST['Apellido']);
		$insCiu->setFecha($_REQUEST['fecha']);
		$insCiu->setgenero($_REQUEST['genero']);
		$insCiu->setImagen($rutaDestino);
		$insCiu->setDepartamento($_REQUEST['Departamento']);
		$insCiu->setMunicipio($_REQUEST['Municipio']);
		$insCiu->setDireccion($_REQUEST['direccion']);
		$datosObj=array($insCiu->getId(),
						$insCiu->getDui(),
						$insCiu->getNombres(),
						$insCiu->getApellidos(),
						$insCiu->getFecha(),
						$insCiu->getgenero(),
						$insCiu->getImagen(),
						$insCiu->getDepartamento(),
						$insCiu->getMunicipio(),
						$insCiu->getDireccion());
		print $insCiu->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorInscripcionCiu.php?accion=con\'>Ver datos </a>';
		}
		}else{
			print 'no se han enviado datos' ;
			}
		}

		break;
	
	case 'con':
	$sql = 'SELECT C.id_ciudadano AS Codigo,C.dui AS DUI,C.nombres AS Nombres ,C.apellidos AS Apellidos ,C.fecha_vencimiento AS Vencimiento,C.genero AS Genero ,C.foto AS Foto ,D.departamento AS Departamento ,M.municipios AS Municipio,C.direccion AS Direccion,C.estadodeVoto AS Estado FROM ciudadano C INNER JOIN departamentos D INNER JOIN municipios M   ON D.codigo_departamento= C.id_departamento AND M.codigo_municipio= C.id_municipios';
		$datoss= consultaD($con,$sql);
		print imprimetabla2($datoss,"ciudadano","table table-bordered",1);
		break;
}
?>
 	<?php
	
}else{
	echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>