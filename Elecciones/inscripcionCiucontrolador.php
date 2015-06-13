<?php
include './Clases/inscripcionCiudadano.php';
class inscripcionCiucontrolador extends Ciudadano{
	public function guardarDatos($con,$ObjinsCiu){
		$variableSql="INSERT INTO ciudadano";
		$variableSql.="(id_ciudadano,dui,nombres,apellidos,";
		$variableSql.="fecha_vencimiento,genero,foto,id_departamento,id_municipios,direccion)";
		$variableSql.="VALUES (";
		$variableSql.="'".$ObjinsCiu[0]."',";
		$variableSql.="'".$ObjinsCiu[1]."',";
		$variableSql.="'".$ObjinsCiu[2]."',";
		$variableSql.="'".$ObjinsCiu[3]."',";
		$variableSql.="'".$ObjinsCiu[4]."',";
		$variableSql.="'".$ObjinsCiu[5]."',";
		$variableSql.="'".$ObjinsCiu[6]."',";
		$variableSql.="'".$ObjinsCiu[7]."',";
		$variableSql.="'".$ObjinsCiu[8]."',";
		$variableSql.="'".$ObjinsCiu[9]."');";

		return consultaA($con,$variableSql);
	}
	public function modificarDatos($con,$ObjinsCiu){
		$variableSql = "UPDATE ciudadano SET ";
		$variableSql .="dui = '".$ObjinsCiu[1]."'";
		$variableSql .=" ,nombres = '".$ObjinsCiu[2]."'";
		$variableSql .=" ,apellidos = '".$ObjinsCiu[3]."'";
		$variableSql .=" ,fecha_vencimiento ='".$ObjinsCiu[4]."'";
		$variableSql .=" ,genero ='".$ObjinsCiu[5]."'";
		$variableSql .= " ,foto = '".$ObjinsCiu[6]."'";
		$variableSql .= " ,id_departamento = '".$ObjinsCiu[7]."'";
		$variableSql .= " ,id_municipios = '".$ObjinsCiu[8]."'";
		$variableSql .= ",direccion = '".$ObjinsCiu[9]."'";
		$variableSql .= " WHERE id_ciudadano = ".$ObjinsCiu[0].";";
		return consultaA($con,$variableSql);
	}
} 
?>