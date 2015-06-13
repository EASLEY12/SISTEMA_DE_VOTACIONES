<?php
require_once('jpgraph/jpgraph.php');
require_once('jpgraph/jpgraph_bar.php');
mysql_connect("localhost","root","");
mysql_select_db("ventas");
$sql="SELECT * FROM inventariov ";
$res =mysql_query($sql);
while ($row=mysql_fetch_array($res)) {
	$datos[]=$row['Ventas'];
	$labels[]=$row['Producto'];
}

$grafico= new Graph(500,400);
$grafico->setScale('textlint');
$grafico->title->Set('Ejemplo de grafico');
$grafico->xaxis->title->set("Producto");
$grafico->xaxis->SetTickLabels($labels);
$grafico->yaxis->title->set("Ventas");
$grafico->SetShadow(); 
$barplot1= new BarPlot($datos);

$barplot1->SetFillGradient('blue','skyblue',GRAD_VERT);
$barplot1->setWidth(30);
$grafico->add($barplot1);
$grafico->Stroke();

?>