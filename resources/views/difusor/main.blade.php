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

<h1 class="text-center" style="color: white;">bienvenido {{Auth::User()->name}}</h1>
<hr>

<div class="bord" style="color: black;">
	<h3 class="text-center">acciones disponibles para el difusor</h3>
<table style="margin: auto;">
	<tr>
		<td>Propuestas pendientes de revisión</td>
		<td><a href="/propuestas" class="btn btn-primary">Ver propuestas</a></td>
	</tr>
	<tr>
		<td>Administrar permisos(pendiente)</td>
		<td><a href="/permisos" class="btn btn-primary">Administrar</a></td>
	</tr>
	<tr>
		<td>listado completo de subscripciones</td>
		<td><a href="/subscripciones" class="btn btn-primary">Ver lista</a></td>
	</tr>
	<tr>
		<td>Lista completa de autores</td>
		<td><a href="/autores" class="btn btn-primary">Ver lista</a></td>
	</tr>
</table>
</div>
	

@endsection