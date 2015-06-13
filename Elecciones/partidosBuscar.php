<?php include './Clases/Coneccion.php';?>
<?php  include "Coneccion.php"; ?>

 <?php 
 session_start();
 if (isset($_SESSION["nombre"])) {
  ?>
<?php   $sql = "SELECT * FROM  partidos WHERE  id_partidos='".$_REQUEST['id']."';";
  $datos=consultaD($con,$sql,3);?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <TITLE>Inscripcion de partidos politicos</title>
    <link rel=stylesheet href="css/estyle.css" type="text/css">
    <link rel=stylesheet href="css/eslilo2.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/prototipo1.css">
    

  </head>
  <body>
     <div ID ="base">  
<section>
<ul Class="juan">
    <li><a href="hhh.php">inicio</a></li>
    <li><a href="Index.php?cerrar=session"> salir(<?php echo $_SESSION["nombre"];?>)</a></li>
    <li><a href="Tipo de eleccion t.php"> Apertura de elecciones</a></li>
    <li><a href="Formulario Inscripcion Partido.php">Inscripcion de partido</a>
<ul>
  <li><a href='manejadorInscripcionP.php?accion=con'>Ver datos </a></li>
</ul>

    </li>
    <li>Inscricion de candidato<ul> 
    <?php
    $consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 1 AND fecha= '". date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario inscrincion de Presidentes.php'>Inscripcion Candidato a Presidente</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionPre.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
  $consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 2 AND fecha= '".date("Y")."'",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscripcion Diputados.php'>Inscripcion Candidato a Diputado</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionD.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}
  $consulta= mysql_query("SELECT * FROM elecciones WHERE tipo_eleccion1= 3 AND fecha= '".date("Y")."' ",$Coneccion);
$array_consulta = mysql_fetch_array($consulta);
if ($array_consulta == TRUE ) {
echo "<li> <a href='Formulario Inscrincion de Alcaldes.php'>Inscripcion Candidato Alcalde</a>";
echo "<ul>";
echo "<li><a href='manejadorinscripcionA.php?accion=con'>Ver datos </a></li>";
echo "</ul>";
echo "</li>";
}else{echo "";}

?>
    </ul>
    </li></li>
    <li><a href="Formulario Registro de votante .php">Inscricion  de ciudadano</a></li>
  </ul>
</section>
</div>
    <br>
    <br>
    <br>
    <h1>A continuacion debe inscribir los partidos a realizar la contienda electoral</h1>
    <form action="modificarPartido.php" method="POST" enctype="multipart/form-data" class="box lgin">
    <center>
    <table bordercolor="yellow" >
      <td>
      <fieldset>
          <legend>Formulario para incripcion de partido</legend>
          <table >
            <td><labe>Ingrese nombre del Partido:</labe></td>
            <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
            <td><input type="text" name="partidoN" placeholder="nombre del partido" value="<?php print $datos[0][1]?>" onkeypress="txNombres()" required></td>
            <tr>
              <td>
                <label> Ingrese nombre del representante legal:</label>
              </td>
              <td>
                <input type="text" name="representanle" placeholder="Persona natural"  value="<?php print $datos[0][4]?>" onkeypress="txNombres()" required>
                 <input type="hidden" name="original"  value="<?php print $datos[0][3] ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label>Bandera del partido</label>
              </td>
              <td>
                <input type="file"  name="imagen"  id="files"  accept="image/*"  onclick="document.getElementById('imagen').style.display='none'"  >
              </td>
              <td width="170px" height="126px">
              <img  id="imagen"style="width:150px;height:100px;" src="<?php print $datos[0][3] ?>">
                 <output id="list"></output>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" name="bot" value="Guardar" >
              </td>
            </tr>
          </table>
          
        <div id="imagen"></div>  
        
      </fieldset>
    
      
      </td>
    </table>
</center>
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
              function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 63) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}
      </script>
  </body>
</html>

  <?php
  
}else{
  echo "<script type=\"text/javascript\">alert(\"Tu session ha sido cerrada inicia nuevamente\");window.location.assign('Index.php');</script>";
}

  ?>


