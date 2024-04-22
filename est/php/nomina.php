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
	
    <h1 class="tituloPagina">Nomina</h1>

    <label class="etiquetaInfo">Fecha de ingreso:</label> <br>
    <input type="date" class="campoEntradaObligatorio" id="f_ingreso" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    <label class="etiquetaInfo">No. Afiliación IMSS:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="imss" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    <label class="etiquetaInfo">Infonavit:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="info" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Unidad Medica Familiar:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="umf" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Sueldo diario:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="sueldo" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />
  

    <label class="etiquetaInfo">Deudor:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="deudor" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    <label class="etiquetaInfo">Fecha de inicio de contrato:</label> <br>
    <input type="date" class="campoEntradaObligatorio" id="f_contrato" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    <label class="etiquetaInfo">Fecha de contrato vence:</label> <br>
    <input type="date" class="campoEntradaObligatorio" id="f_vence" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


<!-- Button 1-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><a href="../bienvenido.php" class="btn btn-warning">Finalizar </a></button>
  </div>
</div>

<!-- Button 2-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" ><a href="datos_gen.php" class="btn btn-warning">Regresar</a></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


</body>
</html>
