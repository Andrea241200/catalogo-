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

<br /><br />
	
    <h1 class="tituloPagina">Datos Generales</h1>
    

    <label class="etiquetaInfo">Dirección:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="direccion" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    <label class="etiquetaInfo">Ciudad:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="ciudad" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


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
    
    <br /><br />


    <label class="etiquetaInfo">Estado Civil:</label> <br>
    <select class="campoEntradaObligatorio">
    <option value=" " >Seleccionar estado civil</option>
                <option>Casado </option>
                <option>Divorsiado</option>
                <option >Soltero</option>
                <option >Union Libre</option>
                <option >Viudo</option>
                </select>

    <br /><br />
    <label class="etiquetaInfo">Telefono 1:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="tel1" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Telefono 2:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="tel2" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />



<!-- Button 1-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><a href="salud.php" class="btn btn-warning">Siguiente </a></button>
  </div>
</div>

<!-- Button 2-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
  <button type="submit" class="btn btn-warning" ><a href="agregar.php" class="btn btn-warning">Regresar</a></button>
  </div>
</div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->


</body>
</html>