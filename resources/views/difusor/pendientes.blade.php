@extends('layouts.general')

@section('contenido')
<style type="text/css">
  .bord{
    border: 1px solid black;
    padding: 2px;
  }
  body{
    background-color: #0099ff;

  }
  td{
    background-color: white;
  }
</style>

<div class="text-center">
  <h1 style="margin:10px; text-align: center;  color: white;" >PROPUESTAS PENDIENTES DE REVISION</h1>
  <hr>
@if ($pendientes != "[]")
<table width="70%" style="margin: auto; color: black">
  <tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">Sección</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Titulo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Fecha de creación</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Autor</th>
    <th></th>  
  </tr>
  
  @foreach($pendientes as $pendiente)
  <tr>
    <td class="bord"> {{$pendiente -> seccion}} </td>
    <td class="bord"> {{$pendiente -> titulo}} </td>
    <td class="bord"> {{$pendiente -> fecha}} </td>
    <td class="bord"> {{$pendiente -> autor_id}} </td>
    <td class="bord"> <a href="/propuestas/{{$pendiente -> id}}" class="btn btn-info" style="margin: 5px;">revisar</a></td>
  </tr>
  @endforeach
</table>
@else
<h2 style="color: white;">no hay propuestas por revisar</h2>
@endif
</div>
@endsection


