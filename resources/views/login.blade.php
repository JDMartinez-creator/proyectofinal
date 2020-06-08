@extends('layouts.log')
@section('scripts')
<script type="text/javascript">
function cambio(){
	var mes = document.getElementById("mensaje");
	var x = document.getElementById("mail");
	var w = x.value;
	var xhttp;

	if(window.XMLHttpRequest){
		xhttp = new XMLHttpRequest();
	}
		else{
			xhttp = new ActiveXobject("Microsoft.XMLHTTP");
		}


	xhttp.onreadystatechange = function(){
		if(this.readyState === 4 && this.status ===200)
		{
			if (this.responseText == 1) {
				mes.innerHTML = "El email ya esta registrado";
			}
			else{
				
		
			}
		}
	}
	xhttp.open("GET","getemail?p="+w,true);
	xhttp.send();
	}

	//var myElement = document.getElementById("mensaje").innerHTML = ;
	
</script>
@endsection
@section('content')

<form class="form-signin" method = "post" action="{{ route('login') }} " >
	{{ csrf_field() }}
	  <h1 class="h3 mb-3 font-weight-normal">Registrar</h1>
	  
	    <div class="{{ $errors->has('user') ? 'has-error' : '' }}">
	  		  <input type="text" id="user" class="form-control" placeholder="nombre" name ="user"><br>
	  		{!! $errors->first('user','<span class="help-block">:message</span>') !!}
	  		
	  <br>
	  </div>
	  <input type="text" id="mail" class="form-control" placeholder="correo" name ="mail" onchange="cambio()"><br>
	  <h6><div id="mensaje" style="color:red;"> </div></h6>
	  
	  <div class="{{ $errors->has('pass') ? 'has-error' : '' }}">
	  	<input type="password" id="pass" class="form-control" placeholder="Contraseña" name = "pass">
	  	<br>
	  	{!! $errors->first('pass','<span>:message</span>') !!}<br>
	  </div>

	  <button class="btn btn-success" type="submit" autofocus="">Registrarse</button>
	  <button class="btn btn-primary" type="submit" autofocus="">Iniciar sesión</button>
	  <p>&copy; S8A EQUIPO 6</p>
	  	</form>
   

@endsection