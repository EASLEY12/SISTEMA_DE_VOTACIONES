
function soyentero(valor)
{ 
	valor = parseInt(valor)
	if (isNaN(valor)){
 alert("introduzca valor numerico")
document.forms.cc.DUI.value="";
return falso;
} else { 
 return true;
} }

function verificonumero() {
dato = document.forms.cc.DUI.value;
dato = soyentero(dato);
return dato;
}