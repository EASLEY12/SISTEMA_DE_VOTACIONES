<?php
include './Clases/inscripcionAlcaldes.php';

class inscripcionAcontrolador extends InscripcionAlcalde{
	public function guardarDatos($con,$ObjinsA){
		$variableSql= "INSERT INTO inscripcion_candidato ";
		$variableSql.= "(id_inscripcion_candidato,dui,nombres,apellidos,";
		$variableSql.="codigo_departamento,codigo_municipio,id_candidatura,id_cargos,id_partidos)";
		$variableSql.="VALUES (";
		$variableSql.="'".$ObjinsA[0]."',";
		$variableSql.="'".$ObjinsA[1]."',";
		$variableSql.="'".$ObjinsA[2]."',";
		$variableSql.="'".$ObjinsA[3]."',";
		$variableSql.="'".$ObjinsA[4]."',";
		$variableSql.="'".$ObjinsA[5]."',";
		$variableSql.="'".$ObjinsA[6]."',";
		$variableSql.="'".$ObjinsA[7]."',";
		$variableSql.="'".$ObjinsA[8]."');";
		
		return consultaA($con,$variableSql);

	}
	public function modificarDatos($con,$ObjinsA){
		$variableSql = "UPDATE inscripcion_candidato SET ";
		$variableSql .="dui = '".$ObjinsA[1]."'";
		$variableSql .=" ,nombres = '".$ObjinsA[2]."'";
		$variableSql .=" ,apellidos = '".$ObjinsA[3]."'";
		$variableSql .=" ,codigo_departamento ='".$ObjinsA[4]."'";
		$variableSql .=" ,codigo_municipio ='".$ObjinsA[5]."'";
		$variableSql .= " ,id_candidatura = '".$ObjinsA[6]."'";
		$variableSql .= " ,id_cargos = '".$ObjinsA[7]."'";
		$variableSql .= " ,id_partidos = '".$ObjinsA[8]."'";
		$variableSql .= " WHERE id_inscripcion_candidato = ".$ObjinsA[0].";";
		return consultaA($con,$variableSql);
	}
}
?>