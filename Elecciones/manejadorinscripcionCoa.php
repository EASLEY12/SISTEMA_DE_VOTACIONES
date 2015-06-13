<?php
include './Clases/Coneccion.php';
include './inscripcionCoalicioncontrolador.php';
$inscripcionCoalicion = new inscripcionCoalicionControlador;
$ORGANIZACIONES  = @$_POST['destino'];
$nombrec=$_GET['Nombrecoalicion'];
 @$hola=$ORGANIZACIONES[0]."/".$ORGANIZACIONES[1]."/".$ORGANIZACIONES[2]."/".$ORGANIZACIONES[3];
$accion=$_REQUEST['accion'];
switch ($accion) {
	case 'save':
				if (isset($_REQUEST['coalicion'])) {
					$inscripcionCoalicion->setId('NULL');
					$inscripcionCoalicion->setNombrecoalicion($hola);
					$inscripcionCoalicion->setLocalidad($_REQUEST['Departamento']);
					$datosObj=array($inscripcionCoalicion->getid(),
									$inscripcionCoalicion->getNombrecoalicion(),
									$inscripcionCoalicion->getLocalidad());
		print $inscripcionCoalicion->guardarDatos($con,$datosObj);
		print '<a href=\'manejadorInscripcionCoa.php?accion=con\'>Ver datos </a>';
		$conexion=mysql_connect("localhost","root","") or die ("no hay conexion");
$conectBD=mysql_select_db("sistema_de_elecciones",$conexion)or die ("no existe BD");

		$rs = mysql_query("SELECT MAX(id_coalicion) AS id FROM coalicion");

if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);

        foreach ($_REQUEST['destino'] as $destino)
      	{ 
      	 	$query = 'INSERT INTO detalle_coalision (id_coalision,id_partido)
            VALUES (\''.$id.'\',\''.$destino.'\')';
            mysql_query($query) or die(mysql_error());


      	} 
      	echo 'La Coalicion '.$nombrec.' ha sido registrado de manera satisfactoria.<br />';
  }else{
 	echo "Error";
 }

			
		}else{
			print 'no se han enviado datos' ;
		}
		break;
	case 'con':
		$sql= 'SELECT * FROM  coalicion';
		print consultaD($con,$sql,2,TRUE);
		break;
	
	
}
?>