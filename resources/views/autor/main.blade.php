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
	<h3 class="text-center">acciones disponibles para el autor</h3>
<table style="margin: auto;">
	<tr>
		<td>Proponer nuevo contenido</td>
		<td><a href="/proponer" class="btn btn-primary">proponer</a></td>
	</tr>
	<tr>
		<td>listado completo del contenido</td>
		<td><a href="/lista" class="btn btn-primary">Ver lista</a></td>
	</tr>
</table>
</div>
	
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection