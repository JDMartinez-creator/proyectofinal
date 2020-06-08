<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>@yield('titulo')</title>
  </head>
  <body onload="onL()" style="background-color: #da2727">
    <div class="text-center"> <img src="/img/principal2.png" width="75%" height="100%"> </div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a href= "/" class="navbar-brand">Game Reviewers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
                             
        @guest
                            <li class="nav-item active">
                              <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" onclick="funLan()">lanzamientos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" onclick="funNot()">Noticias</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" onclick="funArt()" >Articulos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

    </ul>
    <ul class="navbar-nav text-center" >
      <li >
                                <a class="nav-link" onclick="onMap()">mapa del sitio</a>
                            </li>
    </ul>
  </div>
</nav>
<div>
  @yield('contenido')

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
  function funNot() {
  var iframe = document.getElementById("myFrame");
  iframe.src = '/noticias';
  
}
function funLan() {
  var iframe = document.getElementById("myFrame");
  iframe.src = '/lanzamientos';
  
}
function funArt() {
  var iframe = document.getElementById("myFrame");
  iframe.src = '/articulos';
  
}

function onL(){
  var iframe = document.getElementById("myFrame");
  iframe.src = '/main';
}
function onMap(){
  var iframe = document.getElementById("myFrame");
  iframe.src = '/sitemap';
}
</script>
</body>
</html>