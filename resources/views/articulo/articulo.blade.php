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
@endsection
