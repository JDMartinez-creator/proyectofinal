@extends('layouts.general')

@section('contenido')
<style type="text/css">
	td{
		margin: 10px;
		padding: 5px;
	}
	a{
		width: 100%;
	}
	body{
    background-color: #0099ff;
    font-size: 16px;
  }
	.bord
	{
		border: 1px solid black;
    	padding: 2px;
    	width: 35%;
    	margin: auto;
    	background-color: white;
	}
</style>
<br>
<div class="bord" style="color: black;">
	<h3 class="text-center">acciones disponibles para agregar contenido</h3>
<table style="margin: auto;">
	@foreach ($nombres as $nombre)
	<tr>
		<td>{{$nombre}}</td>
		<td><a href="/{{$nombre}}s/create" class="btn btn-primary">Nuevo</a></td>
	</tr>
	@endforeach
</table>
</div>

@endsection