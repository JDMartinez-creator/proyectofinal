@extends('layouts.general')

@section('contenido')

</head>
<body>

<h2 class="text-center">MAPA DE SITIO</h2>
<div style="width: 70%; margin: auto;">
  
  <p>SECCIONES:</p>
<button class="collapsible">LANZAMIENTOS</button>
<div class="content" style="color: black;">
  
<br>
                            
  @foreach($lanzamientos as $lanzamiento)

  <ul>
    <li> <a href="/lanzamientos/{{$lanzamiento-> id}}">{{$lanzamiento -> titulo}}</a> <strong>fecha:</strong> {{$lanzamiento -> fecha}}</li>
    @if(Auth::User()['rol'] === 'difusor')

    <ul>
      Modificaciones:
      <ul>
        @if($modLanzamientos == "[]")
          <li>Ninguna</li>
        @endif

            @foreach($modLanzamientos as $moLanzamiento)
         <?php
          
            if($lanzamiento['id'] === $moLanzamiento['contenido_id'])
            {
              echo "<li><a href= '/porhay' >{$moLanzamiento -> fecha}</a></li>";
            }
            else
            {
              echo "<li>Ninguna</li>";
            }

         ?> 
         @endforeach

      </ul>
    </ul>
     @endif
  </ul>

  @endforeach

</div>
<button class="collapsible">NOTICIAS</button>
<div class="content" style="color: black;">
  <br>
                            
  @foreach($noticias as $noticia)

  <ul>
    <li> <a href="/noticias/{{$noticia-> id}}">{{$noticia -> titulo}}</a> <strong>fecha:</strong> {{$noticia -> fecha}}</li>
    @if(Auth::User()['rol'] === 'difusor')


    <ul>
      Modificaciones:
      <ul>
        @if($modNoticias == "[]")
          <li>Ninguna</li>
        @endif
            @foreach($modNoticias as $modificacion)
         <?php
            if($noticia['id'] === $modificacion['contenido_id'])
            {
              echo "<li><a href= '/porhay' >{$modificacion -> fecha}</a></li>";
            }
            else
            {
              echo "<li>Ninguna</li><br>";
            }

         ?> 
         @endforeach
      </ul>
    </ul>
     @endif
  </ul>

  @endforeach
</div>

<button class="collapsible">ARTICULOS</button>
<div class="content" style="color: black;">
  <br>
                            
  @foreach($articulos as $articulo)

  <ul>
    <li> <a href="/articulos/{{$articulo-> id}}">{{$articulo -> titulo}}</a> <strong>fecha:</strong> {{$articulo -> fecha}}</li>
    @if(Auth::User()['rol'] === 'difusor')

    <ul>
      Modificaciones:
      <ul> 
        @if($modArticulos == "[]")
          <li>Ninguna</li>
        @endif
            @foreach($modArticulos as $modificacion)
         <?php
            if($articulo['id'] === $modificacion['contenido_id'])
            {
              echo "<li><a href= '/porhay' >{$modificacion -> fecha}</a></li>";
            }
            else
            {
              echo "<li>Ninguna</li>";
            }

         ?> 
         @endforeach
      </ul>
    </ul>
     @endif
  </ul>

  @endforeach

</div>
</div>






<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
@endsection