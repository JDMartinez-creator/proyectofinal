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
 <h2 style="text-align: center; color: white;">AUTORES</h2>
<hr>
<div class="text-center" style="color: black;">
  
<table width="70%" style="margin: auto">
  <tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">ID</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">NOMBRE</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">E-MAIL</th>
    <th></th>  
  </tr>
  
  @foreach($autores as $autor)
  <tr>
    <td class="bord"> {{$autor-> id}} </td>
    <td class="bord"> {{$autor-> name}} </td>
    <td class="bord"> {{$autor-> email}} </td
  </tr>
  @endforeach
</table>
</div>
@endsection