@extends('layouts.general')

@section('contenido')
<style>
	.cont{
	border: 1px solid black;
    padding: 2px;
    width: 40%;
    margin: auto;
    justify-content: space-between;
    background-color: white;
	}
</style>
<script>
	var xhttp1;
	var xhttp2;
	var xhttp3;
	var xhttp4;
	var xhttp5;

	if(window.XMLHttpRequest){
		xhttp1 = new XMLHttpRequest();
		xhttp2 = new XMLHttpRequest();
		xhttp3 = new XMLHttpRequest();
		xhttp4 = new XMLHttpRequest();
		xhttp5 = new XMLHttpRequest();
	}
	else 
	{
		xhttp1 = new ActiveXobject("Microsoft.XMLHTTP");
		xhttp2 = new ActiveXobject("Microsoft.XMLHTTP");
		xhttp3 = new ActiveXobject("Microsoft.XMLHTTP");
		xhttp4 = new ActiveXobject("Microsoft.XMLHTTP");
		xhttp5 = new ActiveXobject("Microsoft.XMLHTTP");
	}

	function lista()
	{
		
		xhttp1.onreadystatechange = function()
		{
			if (this.readyState === 4 && this.status === 200) 
			{
      			
      			var div = document.getElementById("demo");
				div.innerHTML = this.responseText;
    		}
  		};
	  xhttp1.open("GET", "/getautores", true);
	  xhttp1.send();
		}
//checar por separado cada permiso
		function ls(){
			var x = document.getElementById("seleccionar");
			var id = x.options[x.selectedIndex].value;
			//noticia
			var chkNoticia = document.getElementById("noticia");
			xhttp1.onreadystatechange = function(){
				if (this.readyState === 4 && this.status === 200) 
					{ chkNoticia.checked = this.responseText; }};
			xhttp1.open("GET", "/getpermisos1?id="+id, true);
			xhttp1.send();
			//lanzamiento
			var chkLanzamiento = document.getElementById("lanzamiento");
			xhttp2.onreadystatechange = function(){
				if (this.readyState === 4 && this.status === 200) 
					{chkLanzamiento.checked = this.responseText;}};
			xhttp2.open("GET", "/getpermisos2?id="+id, true);
			xhttp2.send();
			//articulos
			var chkArticulo = document.getElementById("articulos");
			xhttp3.onreadystatechange = function(){ 
				if (this.readyState === 4 && this.status === 200) 
				{ chkArticulo.checked = this.responseText; } };
			xhttp3.open("GET", "/getpermisos3?id="+id, true);
			xhttp3.send();
			//subsecciones
			var chkSub = document.getElementById("sub");
			xhttp4.onreadystatechange = function(){ 
				if (this.readyState === 4 && this.status === 200) 
				{ chkSub.checked = this.responseText; } };
			xhttp4.open("GET", "/getpermisos4?id="+id, true);
			xhttp4.send();
			//independencia
			var chkIndependencia = document.getElementById("independencia");
			xhttp5.onreadystatechange = function(){ 
				if (this.readyState === 4 && this.status === 200) 
				{ chkIndependencia.checked = this.responseText; } };
			xhttp5.open("GET", "/getpermisos5?id="+id, true);
			xhttp5.send();
		}

		function show()
		{
			var x = document.getElementById("seleccionar");
			var id = x.options[x.selectedIndex].value;
			var cContent = document.getElementById('chkbx');
			var chks = cContent.getElementsByTagName('input');
			for (var i=0, len=chks.length; i<len; i++) {
	    if ( chks[i].type === 'checkbox' ) {
	        chks[i].onclick = function() {
	        	var tipo;

	        	var chkNoticia = document.getElementById("noticia");
	        		xhttp5.onreadystatechange = function(){ 
					if (this.readyState === 4 && this.status === 200) 
					{ alert(this.responseText); } };

	            	if (this.value === 'noticia') 
	            	{ if (this.checked) {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=1&tipo=1", true);
	            		} else {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=1&tipo=0", true);} }
	            	else if(this.value === 'lanzamiento')
	            	{ if (this.checked) {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=2&tipo=1", true);}
	            		else { xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=2&tipo=0", true);}
	            	}
	            	else if(this.value === 'articulos')
	            	{ if (this.checked) {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=3&tipo=1", true);
	            		}
	            		else
	            		{ xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=3&tipo=0", true);
	            		}
	            	}
	            	else if (this.value === 'sub') 
	            	{ if (this.checked) {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=4&tipo=1", true);
	            		}
	            		else
	            		{ xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=4&tipo=0", true);}
	            	} else if(this.value === 'independencia')
	            	{ if (this.checked) {
	            			xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=5&tipo=1", true);
	            		} else
	            		{ xhttp5.open("GET", "/setpermisos?id="+id+"&permiso_id=5&tipo=0", true); } }

	            	xhttp5.send();
			    }
			}
		
	}
	}
</script>
	<br>
	<button onclick="lista()" style="margin-left: 45%; color: black;" class="btn btn-warning">obtener autores</button>
	<br>
	
	<br>
	<div id="chkbx" class="cont text-center" style="color: black">
		<div id="demo" class="text-center" >
		
	</div>
	<br>
		<input type="checkbox" id="noticia" name="noticia" value="noticia" >
  <label for="noticia">Noticias</label><br>
  <input type="checkbox" id="lanzamiento" name="lanzamiento" value="lanzamiento">
  <label for="lanzamiento">Lanzamientos</label><br>
  <input type="checkbox" id="articulos" name="articulos" value="articulos">
  <label for="articulos">Articulos</label><br>
  <input type="checkbox" id="sub" name="sub" value="sub">
  <label for="sub"> SubSecciones</label><br>
  <input type="checkbox" id="independencia" name="independencia" value="independencia">
  <label for="independencia"> Independencia</label><br>
	</div>
    
    
 
@endsection