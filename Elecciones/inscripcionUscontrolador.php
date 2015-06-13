<?php
include './Clases/inscripcionUsuario.php';
class inscripcionUcontrolador extends InsUsuario{
	public function guardarDatos($con,$OjbinsU){
		$variableSql="INSERT INTO  usuario ";
		$variableSql.="(id_usuario,nombres,apellidos,";
		$variableSql.="nomb_usuario,clave,fecha_creacion,tipo_de_usuario)";
		$variableSql.="VALUES(";
		$variableSql.="'".$OjbinsU[0]."',";
		$variableSql.="'".$OjbinsU[1]."',";
		$variableSql.="'".$OjbinsU[2]."',";
		$variableSql.="'".$OjbinsU[3]."',";
		$variableSql.="'".$OjbinsU[4]."',";
		$variableSql.="'".$OjbinsU[5]."',";
		$variableSql.="'".$OjbinsU[6]."');";
		return consultaA($con,$variableSql);

	}
}
?>