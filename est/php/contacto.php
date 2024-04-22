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
  <td colspan=3 ><h1 class="tituloPagina">Contactos</h1></td>
  </tr>
  <td>
    <h2 class="subtituloPagina">Contacto 1 </h2>

    <br /><br />


    <label class="etiquetaInfo">Nombre Completo:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="nombre1" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Correo electronico:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="correo1" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Telefono:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="tel1" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />

    <label class="etiquetaInfo">Parentezco:</label> <br>
    <input type="text" class="campoEntradaObligatorio" id="parent" onkeypress="campoLleno(this.id);habilitarCalcular();" onkeydown="campoLleno(this.id);habilitarCalcular();" onblur="campoLleno(this.id);habilitarCalcular();" onkeyup="campoLleno(this.id);habilitarCalcular();"/>
    <br /><br />


    </div><!-- /.container -->

</td></tr></table>
    <div class="container">

<form autocomplete="off" action="" method="POST">
<fieldset>
<table style="width:100%" cellspacing="12px" >
  <tr width="33%">
  <td colspan=3 ><h1 class="tituloPagina">Contacto 2</h1></td>
  </tr>
  <td>

<h2 class="subtituloPagina">Contacto 2 </h2>

<label class="etiquetaInfo">Nombre Completo:</label> <br>
<input type="text" class="campoEntrada" id="nombre2"/>
    
    <br /><br />

    <label class="etiquetaInfo">Correo electronico:</label> <br>
    <input type="text" class="campoEntrada" id="correo2"/>
    
    <br /><br />


    <label class="etiquetaInfo">Telefono:</label> <br>
    <input type="text" class="campoEntrada" id="tel2"/>
    
    <br /><br />


    <label class="etiquetaInfo">Parentezco:</label> <br>
    <input type="text" class="campoEntrada" id="parent"/>
    
</td></tr></table>



<!-- Button 1-->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" ><a href="nomina.php" class="btn btn-warning">Siguiente </a></button>
</div>
</div>

<!-- Button 2-->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" ><a href="salud.php" class="btn btn-warning">Regresar</a></button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->


</body>
</html>