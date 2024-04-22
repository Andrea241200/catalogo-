function campoLleno(id){
	var campo = document.getElementById(id);
	if(campo.value != ""){
		campo.className = "campoEntrada";
	}
	else{
		campo.className = "campoEntradaError";
	}
}

function habilitarCalcular(){
	var nombre = document.getElementById("txtNombre").vlaue;
	var proyecto = document.getElementById("txtProyecto").value;
	var ayuda = document.getElementById("txtAyuda").value;
	var edad = document.getElementById("txtEdad").value;
	
	if(nombre != "" && proyecto != "" && ayuda != "" && edad != ""){
		document.getElementById("btnCalcularDis").style.display="none";
		document.getElementById("btnCalcular").style.display="";
	}else{
		document.getElementById("btnCalcularDis").style.display="";
		document.getElementById("btnCalcular").style.display="none";
	}
}

function mensaje(){
	alert("Mensaje Correcto");	
}