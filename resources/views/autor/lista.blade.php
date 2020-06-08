@extends('layouts.general')

@section('contenido')
<style >
	a{
		width: 100%;
	}
	table
	{
		text-align: center;
	}
</style>
<div style="width: 80%; margin: auto;">
	<h3 class="text-center">contenido creado por {{Auth::User() -> name}}</h3>
<h3 class="text-center">Noticias</h3>
@if($noticias != "[]")
<table style="margin: auto; color: black; background-color: white; width: 100%">
	<tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">ID</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación </th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">acciones</th>  
  </tr>
	@foreach ($noticias as $noticia)
	<tr>
		<td>{{$noticia -> id}}</td>
		<td>{{$noticia -> titulo}}</td>
		<td>{{$noticia -> fecha}}</td>
		<td><a href="/noticias/{{$noticia -> id}}/edit" class="btn btn-danger">Editar</a></td>
	</tr>
	@endforeach
</table>
@else
<h4 class="text-center">No hay nada que mostrar</h4>
@endif
<br>
<h3 class="text-center">Articulos</h3>
@if($articulos != "[]")

<table style="margin: auto; color: black; background-color: white;width: 100%">
	<tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">ID</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación </th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">acciones</th>  
  </tr>
	@foreach ($articulos as $articulo)
	<tr>
		<td>{{$articulo -> id}}</td>
		<td>{{$articulo -> titulo}}</td>
		<td>{{$articulo -> fecha}}</td>
		<td><a href="/articulos/{{$articulo -> id}}/edit" class="btn btn-danger">Editar</a></td>
	</tr>
	@endforeach
</table>
@else
<h4 class="text-center">No hay nada que mostrar</h4>
@endif
<br>

<h3 class="text-center">lanzamientos</h3>
@if($lanzamientos != "[]")
<table style="margin: auto; color: black; background-color: white; width: 100%">
	<tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">ID</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación </th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">acciones</th>  
  </tr>
	@foreach ($lanzamientos as $lanzamiento)
	<tr>
		<td>{{$lanzamiento -> id}}</td>
		<td>{{$lanzamiento -> titulo}}</td>
		<td>{{$lanzamiento -> fecha}}</td>
		<td><a href="/lanzamientos/{{$lanzamiento -> id}}/edit" class="btn btn-danger">Editar</a></td>
	</tr>
	@endforeach
</table>
@else
<h4 class="text-center">No hay nada que mostrar</h4>
@endif

<br>
<h3 class="text-center">Pendientes por revisión</h3>
@if($pendientes != "[]")

<table style="margin: auto; color: black; background-color: white; width: 100%">
	<tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación </th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">sección</th>  
  </tr>
	@foreach ($pendientes as $pendiente)
	<tr>
		
		<td>{{$pendiente -> titulo}}</td>
		<td>{{$pendiente -> fecha}}</td>
		<td>{{$pendiente -> seccion}}</td>
	</tr>
	@endforeach
</table>

@else
<h4 class="text-center">No hay nada que mostrar</h4>
@endif

<br>
<h3 class="text-center">Propuestas rechazadas</h3>
@if($revisiones != "[]")

<table style="margin: auto; color: black; background-color: white; width: 100%">
	<tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación </th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">sección</th>  
    <th class="bord" style="text-align: center; background: #e3f2fd;">asunto</th>  
  </tr>
	@foreach ($revisiones as $revision)
	<tr>
		
		<td>{{$revision -> titulo}}</td>
		<td>{{$revision -> fecha}}</td>
		<td>{{$revision -> seccion}}</td>
		<td>{{$revision -> asunto}}</td>
	</tr>
	@endforeach
</table>

@else
<h4 class="text-center">No hay nada que mostrar</h4>
@endif
<br>
</div>

@endsection