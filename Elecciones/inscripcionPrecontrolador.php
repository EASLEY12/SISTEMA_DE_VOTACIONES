<?php
include './Clases/inscripcionPresidente.php';
class inscripcionPrecontrolador extends inscripcionPresidente{
	public function guardarDatos($con,$ObJPres){
		$variableSql="INSERT INTO inscripcion_candidato";
		$variableSql.="(id_inscripcion_candidato,dui,nombres,apellidos,";
		$variableSql.="id_candidatura,id_cargos,id_partidos)";
		$variableSql.="VALUES (";
		$variableSql.="'".$ObJPres[0]."',";
		$variableSql.="'".$ObJPres[1]."',";
		$variableSql.="'".$ObJPres[2]."',";
		$variableSql.="'".$ObJPres[3]."',";
		$variableSql.="'".$ObJPres[4]."',";
		$variableSql.="'".$ObJPres[5]."',";
		$variableSql.="'".$ObJPres[6]."');";
		return consultaA($con,$variableSql);
	}
	
}
?>