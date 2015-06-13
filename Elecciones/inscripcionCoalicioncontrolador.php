<?php
include './Clases/inscripcionCoalicionDepartamento.php';
class inscripcionCoalicionControlador extends inscripcionColalicion{
	public function guardarDatos($con,$objCoa){
		$variableSql=" INSERT INTO coalicion ";
		$variableSql.="(id_coalicion,Nombre_coalicion,Localidad)";
		$variableSql.="VALUES (";
		$variableSql.="'".$objCoa[0]."',";
		$variableSql.="'".$objCoa[1]."',";
		$variableSql.="'".$objCoa[2]."');";
		
		return consultaA($con,$variableSql);

	}
}
?>