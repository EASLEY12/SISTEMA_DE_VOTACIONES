<?php
include './Clases/InscripcionPartido.php';
class InscripcionPcontrolador extends InscripcionP{
	public function guardarDatos($con,$obInscP){
		$variableSql= " INSERT INTO partidos ";
		$variableSql.= "(id_partidos,nombre_partido,imagen,represent_partido) ";
		$variableSql.="VALUES (";
		$variableSql.= "'".$obInscP[0]."',";
		$variableSql.= "'".$obInscP[1]."',";
		$variableSql.= "'".$obInscP[2]."',";
		$variableSql.= "'".$obInscP[3]."');";
		return consultaA($con,$variableSql);
	}
	public function modificarDatos($con,$obInscP){
		$variableSql = "UPDATE partidos SET ";
		$variableSql .="nombre_partido = '".$obInscP[1]."'";
		$variableSql .=" ,imagen = '".$obInscP[2]."'";
		$variableSql .=" ,represent_partido = '".$obInscP[3]."'";
		$variableSql .= " WHERE id_partidos = ".$obInscP[0].";";
		return consultaA($con,$variableSql);
	}
}
?>