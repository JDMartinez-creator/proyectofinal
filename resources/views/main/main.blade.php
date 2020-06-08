<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<body>
	<h2 class="text-center">Ultimas entradas</h2>

	<h3>Lanzamientos</h3>
	
	<table style=" border-style: groove; width: 96%; margin: 20px;">
			<td>
			<div style="padding:9px;">
			<a href="/lanzamientos/{{$lanzamiento -> id}}"><strong><h3>{{$lanzamiento -> titulo}}</h3> </strong></a>
			<h4>{{$lanzamiento -> introduccion}}</h4>
			<h6>publicado el {{$lanzamiento -> fecha}}</h6>
		</div>	
			</td>
			
			<td>
			</td>

		</table>

		<h3>Noticias</h3>
		<table style=" border-style: groove; width: 96%; margin: 20px;">
			<td>
			<div style="padding:9px;">
			<a href="/noticias/{{$noticia -> id}}"><strong><h3>{{$noticia -> titulo}}</h3> </strong></a>
			<h4>{{$noticia -> introduccion}}</h4>
			<h6>publicado el {{$noticia -> fecha}}</h6>
		</div>	
			</td>
			
			<td>
			</td>

		</table>
	<h3>Articulos</h3>
	<table style=" border-style: groove; width: 96%; margin: 20px;">
			<td>
			<div style="padding:9px;">
			<a href="/articulos/{{$articulo -> id}}"><strong><h3>{{$articulo -> titulo}}</h3> </strong></a>
			<h4>{{$articulo -> introduccion}}</h4>
			<h6>publicado el {{$articulo -> fecha}}</h6>
		</div>	
			</td>
			
			<td>
			</td>

		</table>
</body>
</html>

