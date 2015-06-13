<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Verificacion de DUI</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">

<link href="jquery.keypad.css" rel="stylesheet">
<script src="min.js"></script>
<script src="jquery.plugin.js"></script>
<script src="jquery.keypad.js"></script>
<script>
$(function () {
	$('#defaultKeypad').keypad();
	$('#inlineKeypad').keypad({onClose: function() {
		alert($(this).val());
	}});
});
</script>
<script type="text/javascript">
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
	val = d.value
	largo = val.length
	val = val.split(sep)
	val2 = ''
	for(r=0;r<val.length;r++){
		val2 += val[r]	
	}
	if(nums){
		for(z=0;z<val2.length;z++){
			if(isNaN(val2.charAt(z))){
				letra = new RegExp(val2.charAt(z),"g")
				val2 = val2.replace(letra,"")
			}
		}
	}
	val = ''
	val3 = new Array()
	for(s=0; s<pat.length; s++){
		val3[s] = val2.substring(0,pat[s])
		val2 = val2.substr(pat[s])
	}
	for(q=0;q<val3.length; q++){
		if(q ==0){
			val = val3[q]
		}
		else{
			if(val3[q] != ""){
				val += sep + val3[q]
				}
		}
	}
	d.value = val
	d.valant = val
	}
}
</script>
	</head>
	<body>
		<div id="r">
		<form action="Papeleta.php" method="post">
		<figure>
   			<img src="tse_logo.gif"><figcaption>Tribunal Supremo Electoral</figcaption>
		</figure>
		<br>
		<h1> Bienvenido al sistemas de votaciones <br>a continuacion debera ingresar el numero de DUI<br> para verificar </h1>
		<table  >
		 	<td>
		 	<fieldset>
  				<legend> Consulta de Votacion</legend>
  			
				<label>N° de DUI:</label> <input type="text" name="DUI" placeholder="Numero de DUI" id="defaultKeypad" onchange="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);" maxlength="10">
 			</fieldset>
 			<br>
 			<input type="submit" name="envio" value="Abrir eleciones" >
 			</td>
		</table>


		</form>
		</div>
	</body>
</html>