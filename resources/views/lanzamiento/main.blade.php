@extends('layouts.general')

@section('contenido')
<h2 class="text-center">Lanzamientos</h2>
@foreach ($noticias as $noticia)
		<table style=" border-style: groove; width: 96%; margin: 20px;color: black">

			<td>

			<div style="padding:9px;">
			<a href="/lanzamientos/{{$noticia -> id}}"><strong><h3>{{$noticia -> titulo}}</h3> </strong></a>
			<h4>{{$noticia -> introduccion}}</h4>
			<h6>publicado el {{$noticia -> fecha}}</h6>
      @if ( 'tip' === 'autor')
      <a href="/noticias/{{$noticia -> id}}/edit" class="btn btn-success" style="margin:10px;"> Editar</a>
      @elseif('tip' === 'difusor')
      <form action="{{ route('noticias.destroy', $noticia->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="margin:10px;">Eliminar</button>
      </form>
      @endif
		</div>	
			</td>
			
			<td>
			</td>

		</table>
	 @endforeach

@endsection
