<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Datos</title>
    
    <link rel="stylesheet" href="../diseños/EstilosEmpresa.css">
    <script src="../diseños/scripBase.js"></script>
    
</head>
<body style="background-color:#CCC;"> 
<div class="container">

<form autocomplete="off" action="" method="POST">
<fieldset>
<table style="width:100%" cellspacing="12px" >
  <tr width="33%">
    <td colspan=3 ><h1 class="tituloPagina">Datos Basicos</h1></td>
  </tr>
  <tr width="33%">
   <td><label class="etiquetaInfo">Nombre:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="nombre" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
  </td>
    <td>
      <label class="etiquetaInfo">Apellidos:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="apellido" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
  </td>
    <td>
    <label class="etiquetaInfo">Fecha de nacimiento:</label> <br>
    <input type="date" class="campoEntradaObligatorio" id="f_nacimiento" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    </td>
  </tr>
  <tr width="33%">
    <td>
    <label class="etiquetaInfo">Genero:</label> <br>
                            <div class="radio">
                            <label class="etiquetaCampo">
                                    <input type="radio" name="genero" value="1" /> Maculino
                                </label>                                              
                            <label class="etiquetaCampo">
                                    <input type="radio" name="genero" value="2" /> Femenino
                                </label>                            
                            <label class="etiquetaCampo">
                                    <input type="radio" name="genero" value="3" /> Otros
                                </label>
                            </div>
    </td>
    <td>
    <label class="etiquetaInfo">RFC:</label> <br>
     <input type="text" class="campoEntradaObligatorio" id="rfc" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    </td>
    <td>
    <label class="etiquetaInfo">CURP:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="curp" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    </td>
  </tr>

  <tr>
    <td><label class="etiquetaInfo">Reportar a:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="reportar" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/></td>
    <td><label class="etiquetaInfo">Proyecto asignado:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="proyecto" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/></td>
    <td><form action="agregar.php" method="POST" enctype="multipart/form-data">
<label class="etiquetaArchivo">Subir foto</label> <input name="archivo" id="archivo" type="file"/>
<input type="submit" name="subir" value="Subir imagen"/>
</form>
<?php

//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((stripos($tipo, "gif") !== false) || (stripos($tipo, "jpeg") !== false) || (stripos($tipo, "jpg") !== false) || (stripos($tipo, "png") !== false)) && ($tamano < 2000000)) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'imagen/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('imagen/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="imagen/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>
</td>
  </tr>
</table>


<form autocomplete="off" action="" method="POST">
<fieldset>
<table style="width:100%" cellspacing="12px" >
  <tr width="33%">
    <td colspan=3 ><h1 class="tituloPagina">Datos Generales</h1></td>
  </tr>
  <td> <label class="etiquetaInfo">Dirección:</label> <br>
  <input type="text" class="campoEntradaObligatorio" id="direccion" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
</td>
<td> <label class="etiquetaInfo">Ciudad:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="ciudad" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
</td>
<td>
<label class="etiquetaInfo">Estado:</label> <br>
<select class="campoEntradaObligatorio">
    <option value=" " >Seleccionar su estado</option>
                <option>Aguascalientes </option>
                <option>Baja California </option>
                <option >Baja California Sur</option>
                <option >Campeche</option>
                <option >Chiapas</option>
                <option >Chihuahua </option>
                <option >Ciudad de México </option>
                <option >Coahuila</option>
                <option >Colima</option>
                <option> Durango</option>
                <option >Estado de México</option>
                <option >Guanajuato</option>
                <option >Guerrero</option>
                <option >Hidalgo</option>
                <option >Jalisco</option>
                <option >Michoacán</option>
                <option> Morelos</option>
                <option >Nayarit</option>
                <option >Nuevo León</option>
                <option>Oaxaca</option>
                <option >Puebla</option>
                <option> Querétaro </option>
                <option >Quintana Roo </option>
                <option >San Luis Potosí</option>
                 <option>Sinaloa</option>
                 <option>Sonora</option>
                 <option>Tabasco</option>
                 <option>Tamaulipas</option>
                 <option>Tlaxcala</option>
                 <option>Veracruz</option>
                 <option>Yucatán</option>
                 <option>Zacatecas</option>
                </select>
</td>
</tr>

<tr width="33%">
<td><label class="etiquetaInfo">Estado Civil:</label> <br>
    <select class="campoEntradaObligatorio">
    <option value=" " >Seleccionar estado civil</option>
                <option>Casado </option>
                <option>Divorsiado</option>
                <option >Soltero</option>
                <option >Union Libre</option>
                <option >Viudo</option>
                </select>
  </td>

  <td>
  <label class="etiquetaInfo">Telefono 1:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="tel1" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
  </td>

  <td>
  <label class="etiquetaInfo">Telefono 2:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="tel2" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
</td>
</tr>
</table>


<form autocomplete="off" action="" method="POST">
<fieldset>
<table style="width:100%" cellspacing="12px" >
  <tr width="33%">
    <td colspan=3 ><h1 class="tituloPagina">Datos de Salud</h1></td>
</tr>

<td>
<label class="etiquetaInfo">Tipo de Sangre:</label> <br>
<select class="campoEntradaObligatorio">
    <option value=" " >Seleccionar Tipo de Sangre</option>
                <option>A+ </option>
                <option>A- </option>
                <option >B+</option>
                <option >B-</option>
                <option >AB+</option>
                <option >AB- </option>
                <option >O+ </option>
                <option >O-</option>
                </select>
</td>
<td>
<label class="etiquetaInfo">Padece alguna enfermedad:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="enfermedad" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
</td>
<td>
<label class="etiquetaInfo">Alergia a algún medicamento:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="medicamento" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
</td>
</tr>
</table>




<!-- Button 1-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><a href="contacto.php" class="btn btn-warning">Siguiente </a></button>
  </div>
</div>

<!-- Button 2-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><a href="../bienvenido.php" class="btn btn-warning">Regresar</a></button>
  </div>
</div>

<table cellspacing="3px" width="100%">
<tr>
        	<td width="20%" align="center"></td>
            <td width="20%" align="center" colspan="2">
            <br/>
            <input type="submit" class="BotonDisable" id="btnCalcularDis" value="Calcular"/>
            <input type="submit" class="BotonEnable" id="btnCalcular" value="Calcular" style="display:none;" onmouseover="this.className='BotonOver'" onmouseout="this.className='BotonEnable'" onclick="mensaje();"/>
            </td>
            <td width="20%" align="center"></td>
        </tr>
</table>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


</body>
</html>
