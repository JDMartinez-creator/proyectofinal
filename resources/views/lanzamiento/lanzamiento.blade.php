@extends('layouts.general')

@section('contenido')
<br>

<div style="text-align: justify; width: 80%; margin: auto;">
<b><h2 class="text-center" style="text-transform: uppercase;">{{$noticia['titulo']}}</h2></b>
<br>
<b>publicado el: </b>{{$noticia['fecha']}}
<br>
<b> publicado por: </b> {{$user['name']}}
<br>
<br>
{{$noticia['contenido']}}
</div>
<div style="background-color: red" class="text-center">
	<form method="POST" action="{{ route('subscripciones.store')}}">
	  @csrf
	  @method('POST')
	  	Desea suscribirse a este contenido? 
		<input type="text" name="correo">
		<input type="text" name="seccion" value="lanzamientos" hidden="true">
		<input type="text" name="id" value="{{$noticia -> id}}" hidden="true">
		<button type="submit" onclick="alerta()">Suscribirme</button>
	</form>

</div>
<br><br>
@endsection
