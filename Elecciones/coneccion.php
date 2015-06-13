<?php

$Coneccion= mysql_connect("localhost","root","");
mysql_select_db("sistema_de_elecciones",$Coneccion);

function protect($v){
	$v = mysql_real_escape_string($v);
	$v = htmlentities($v,ENT_QUOTES);
	$v = trim($v);
	return $v;
}
?>