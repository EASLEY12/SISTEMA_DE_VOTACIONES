<?php
include'./Clases/inscripcionDiputado.php';
class inscripcionDcontrolador extends inscripcionD{
	public function guardarDatos($con,$objinscD){
		$variableSql= "INSERT INTO inscripcion_candidato ";
		$variableSql.= "( id_inscripcion_candidato,dui,nombres,apellidos,";
		$variableSql.= " imagen_candidato,codigo_departamento,id_candidatura,id_cargos,id_partidos )";
		$variableSql.="VALUES (";
		$variableSql.= "'".$objinscD[0]."',";
		$variableSql.= "'".$objinscD[1]."',";
		$variableSql.= "'".$objinscD[2]."',";
		$variableSql.= "'".$objinscD[3]."',";
		$variableSql.= "'".$objinscD[4]."',";
		$variableSql.= "'".$objinscD[5]."',";
		$variableSql.= "'".$objinscD[6]."',";
		$variableSql.= "'".$objinscD[7]."',";
		$variableSql.= "'".$objinscD[8]."');";
	    return consultaA($con,$variableSql);
	}
}

?>