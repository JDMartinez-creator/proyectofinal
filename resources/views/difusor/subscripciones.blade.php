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


<div class="text-center" style="color: black">
  <h1 style="margin:10px; text-align: center; color: white;" >Correos subscritos a la pagina</h1>
  <hr>
<table width="70%" style="margin: auto">
  <tr >
    <th class="bord" style="text-align: center; background: #e3f2fd;">correo</th>
    <th class="bord" style="text-align: center; background: #e3f2fd;">Sección suscrita</th>
    <th></th>  
  </tr>
  
  @foreach($subscritos as $subscrito)
  <tr>
    <td class="bord"> {{$subscrito -> correo}} </td>
    <td class="bord">
                            <?php
                            $id = $subscrito['contenido_id'];
                            $seccion = $subscrito['seccion'];
                            if($id != 0){echo "<a href = '/$seccion/$id'> $seccion #$id</a>";}
                            else{echo "<a href = '/$seccion'> $seccion</a>";}
                             ?> 
                           </td>
                            
  </tr>
  @endforeach
</table>
</div>
@endsection
