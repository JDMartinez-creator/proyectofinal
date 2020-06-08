@extends('layouts.general')

@section('contenido')
<style type="text/css">
body{
	text-align: center;
	color: white;
}
</style>
<script type="text/javascript">
	function aceptar(){
		document.getElementById("razon").innerHTML = "¿Publicar ahora?";
		document.getElementById("si").hidden = false;
		document.getElementById("no").hidden = false;
		document.getElementById("texb").hidden = true;
		document.getElementById("acep").hidden = true;

	}
	function rechazar(){
		document.getElementById("razon").innerHTML = "ingrese la razón:";
		document.getElementById("texb").hidden = false;
		document.getElementById("acep").hidden = false;

	}
	function enviar(){
		alert("contenido regresado al autor para modificación");
		window.location.replace("/propuestas");
	}
	function si(){
		alert("Pagina publicada correctamente");
		window.location.replace("/propuestas");
	}
	function no(){
		document.getElementById("chss").innerHTML = "Elija fecha y hora de publicación";
		document.getElementById("hora").hidden = false;
		document.getElementById("cnf").hidden = false;
	}
	function confirmar(){
		alert("Pagina programada correctamente");
		window.location.replace("/propuestas");
	}
</script>
<h2><strong>seccion: </strong> {{$pendiente-> seccion}}</h2><br>
<h2><strong>titulo: </strong> {{$pendiente-> titulo}}</h2><br>
<h3><strong>Introducción: </strong> {{$pendiente-> introduccion}}</h3><br>
<h3><strong>contenido: </strong> {{$pendiente-> contenido}}</h3><br>
<h3><strong>contenido: </strong> {{$pendiente-> contenido}}</h3><br>

<div><a onclick="aceptar()" class="btn btn-success"> aceptar </a> <a class="btn btn-danger" onclick="rechazar()"> Rechazar</a></div>

<br>
<strong><label id="razon"></label></strong>


<form method="POST" action="{{ route('revisar.store',$pendiente -> id)}}">
	@csrf
	@method('POST')
	<input id="texb" type="text" name="asunto" hidden="true" style="width: 40%"><br>
	<input type="text" name="id" value="{{$pendiente -> id}}" hidden="true">
	<button class="btn btn-success" style="margin: 20px;" hidden="true" id="acep">enviar</button>
</form>



<div>



<form method="POST" action="{{ route('propuestas.destroy',$pendiente -> id)}}">
	@csrf
	@method('DELETE')
	<button type="submit" id="si" hidden="true" class="btn btn-success">si</button>
</form>
<a onclick="no()" class="btn btn-danger" style="margin: 20px;" hidden="true" id="no"> no </a>

</div>
<strong><label id="chss"></label></strong><br>

<form method="POST" action="{{ route('revisar.store',$pendiente -> id)}}">
	@csrf
	@method('POST')
	<input type="datetime-local" id="hora" name="birthdaytime" hidden="true">
	<button onclick="confirmar()" class="btn btn-success" style="margin: 20px;" hidden="true" id="cnf">Confirmar</button>
</form>


@endsection
