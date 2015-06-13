<?php
include './Clases/Coneccion.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<TITLE>Inscripcion de partidos politicos</title>
		<link rel=stylesheet href="css/estyle.css" type="text/css">
    <link rel=stylesheet href="cs/eslilo2.css" type="text/css">
    <script src="jquery.min.js"></script>
    <SCRIPT type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
function cerrar(){
 
  getElementById('hola').alert('coalision2.php')
}
    </script>
  <style>

  select{width:180px;margin:0 0 50px 0;border:1px solid #ccc;padding:10px;border-radius:10px 0 0 10px; cursor: pointer;}
  .clear{clear:both;text-align:center}
  
  input {margin:25px 1px 0 1px;border:1px solid #ccc;padding:10px;}
  .izq{border-radius:10px 0 0 10px;}
  .der{border-radius:0 10px 10px 0;}
  </style>

	</head>
	<body>
    
		<form action="manejadorinscripcionCoa.php?accion=save" method="POST" enctype="multipart/form-data" class="box login">
		
		
    <table bordercolor="yellow" >
		 	<td>
		 	<fieldset>
  				<legend>Formulario para incripcion coalicion</legend>
          <table  border="" >
            <tr>
            <tr>
                  
                  <td>
                  <label>Departamento</label><br>
                    <div class="dropdown dropdown-dark">
          <select name="Departamento" size="1" class="dropdown-select" onchange="cargarMunicipio(this.options[this.selectedIndex].value);">
        <option value=""></option>
        <?php

        $sql="SELECT id_departamento,departamento,codigo_departamento FROM departamentos ";
        $datos = consultaD($con,$sql);
            foreach ($datos as  $value) {
              print "<option value='";
              print $value['codigo_departamento']."'";
              print">";
              print utf8_encode($value['departamento']);
              print "</option>";
          }

        ?>
        </select>
</div>        
              <tr>
                <td>
                    <label>Partidos:</label><br>
                  <select name='ORGANIZACIONES[]' id="origen" multiple="multiple" size="6" class="pasar izq" >
      <?php 
        $sql="SELECT id_partidos,nombre_partido FROM partidos; ";
            $datos = consultaD($con,$sql);
            foreach ($datos as  $value) {
              print "<option value='";
              print $value['id_partidos']."'";
              print">";
              print $value['nombre_partido'];
              print "</option>";
            }
        ?>
      </select>
                </td>
                  <td>
                <input type="button" clas="pasar izq" value="Pasar »">
              </td>
              <td>
                    <input type="button" clas="quitar der" value="« Quitar">
                  </td>
                  
                   
                  
                <td>
                <label>Partidos en coalicion</label><br>
                  <select name="destino[]" id="destino" multiple="multiple" size="6" class="quitar der"></select>
                </td>
                <tr>
                
                  <td> 
                  <label>Nombre de la coalicion</label><br>
                  <input type="text" name="Nombrecoalicion"></td>
                </tr>
              </tr>
              
<td>  <input type="submit" class="submit" value="Guardar coalicion" name="coalicion" ></td>

           
            </tr>
                      </table>
  				
				<div id="imagen"></div>  
				
 			</fieldset>
 		
 			
 			</td>
		</table>

		</form>
		</div>
		<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img style=width:150px;height:100px; class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
      <script type="text/javascript">
  $().ready(function() 
  {
    $('.pasar').click(function() { return !$('#origen option:selected').remove().appendTo('#destino'); });  
    $('.quitar').click(function() { return !$('#destino option:selected').remove().appendTo('#origen'); });
    $('.pasartodos').click(function() { $('#origen option').each(function() { $(this).remove().appendTo('#destino'); }); });
    $('.quitartodos').click(function() { $('#destino option').each(function() { $(this).remove().appendTo('#origen'); }); });
    $('.submit').click(function() { $('#destino option').prop('selected', 'selected'); });
  }); 
  </script>
	</body>
</html>
