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
	
    <h1 class="tituloPagina">Datos de Salud</h1>



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
            
       <br /><br />

    <label class="etiquetaInfo">Padece alguna enfermedad:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="enfermedad" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Alergia a algún medicamento:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="medicamento" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


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