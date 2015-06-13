
<?php include './Clases/Coneccion.php';?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Pasar opciones de un select list a otro con jQuery</title>
	<script src="jquery.min.js"></script>
	<style>
	body{width:600px;margin:0 auto;overflow-x:hiden;}
	select{width:180px;margin:0 0 50px 0;border:1px solid #ccc;padding:10px;border-radius:10px 0 0 10px; cursor: pointer;}
	.clear{clear:both;text-align:center}
	div{float:left;width:200px;text-align:center;cursor:pointer;}
	input {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
	.izq{border-radius:10px 0 0 10px;}
	.der{border-radius:0 10px 10px 0;}
	</style>
</head>
<body style="zoom: 1;">
	<h1>Tipo de leccion</h1>
	<form action="algo.php" method="post" id="formulario">
		<div>
			<select name='ORGANIZACIONES[]' id="origen" multiple="multiple" size="3" class="pasar izq" >
			<option value="1" >Presidenciales</option>
			<option value="2">Legisltivas </option>
			<option value="3">Municipales</option>
			</select>
			<label>Año de eleccion</label>
			<input type="" name="fecha" value="<?php echo date("Y") ?>" readonly >
		</div>
	
		
		<p class="clear"><input type="submit" class="submit" value="Guardar el tipo de leccion"></p>
	</form>
