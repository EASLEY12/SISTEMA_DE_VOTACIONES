<?php
include './Clases/Coneccion.php';
include './inscripcionUscontrolador.php';
$inscripUs= new inscripcionUcontrolador();
$accion=$_REQUEST['accion'];
$username = $_POST["Usuario"];
 $hola= $password = sha1($_POST["CClave"]);
  $password2 = sha1($_POST["Clave"]);
switch ($accion) {
	case 'save':
		if (isset($_REQUEST['cuenta'])) {
			if($password!=$password2) {
         echo "<script type=\"text/javascript\">alert('No coinciden las contraseñas');window.location.assign('Formulario Registro Usuario.php');</script>";
         
      }else{
         // Comprobamos si el nombre de usuario o la cuenta de correo ya existían
         $conexion=mysql_connect("localhost","root")or die ('Ha fallado la conexión con el servidor: '.mysql_error());
         mysql_select_db("sistema_de_elecciones",$conexion)or die ('Error al seleccionar la Base de Datos: '.mysql_error());
         $checkuser = mysql_query("SELECT nomb_usuario FROM usuario WHERE nomb_usuario='$username'");

         if (mysql_num_rows($checkuser)>0) {
            echo "<script type=\"text/javascript\">alert(\"El Nombre de Usuario ".$username." ya Existe\");window.location.assign('Formulario Registro Usuario.php');</script>";
         }else{
      
		$inscripUs->setId('NULL');
		$inscripUs->setNombre($_REQUEST['Nombre']);
		$inscripUs->setApellido($_REQUEST['Apellido']);
		$inscripUs->setNombreUsuario($_REQUEST['Usuario']);
		$inscripUs->setClave($hola);
		$inscripUs->setFecha($_REQUEST['fecha']);
		$inscripUs->settipo($_REQUEST['tipo']);
		$datosObj=array ($inscripUs->getId(),
						$inscripUs->getNombre(),
						$inscripUs->getApellido(),
						$inscripUs->getNombreUsuario(),
						$inscripUs->getClave(),
						$inscripUs->getFecha(),
						$inscripUs->gettipo());
		print $inscripUs ->guardarDatos($con,$datosObj);
	
		echo "<script type=\"text/javascript\">alert(\"El Nombre de Usuario '".$username."' ha sido registrado exitosamente \");</script>";
		print"</script>";
		print"<script>";
		
		print'window.close()';
		print"</script>";
			
		}
		}
		}else{
			print 'no se han enviado datos' ;
		
		
		}
		
		break;
	
	case 'con':
		$sql= 'SELECT * FROM usuario';
		print consultaD($con,$sql,2,TRUE);
		break;
}
?>