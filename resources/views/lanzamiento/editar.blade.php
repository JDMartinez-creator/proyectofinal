@extends('layouts.general')

@section('contenido')
<style type=>
.algo{
  width: 70%;
  margin: auto;
  border: 1px solid black;
  padding: 10px;
  background-color: white;
}

</style>

<br>
<form method="POST" action="{{ route('propuestas.store')}}">
  @csrf
  @method('POST')
<div class = "algo" style="color: black;">
<label>Titulo  </label><br>
 <input type="text" name="titulo"  style="width: 97%" value="{{ old('titulo') }}"><br><br>
 @error('titulo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 <label>Introducción</label> <textarea rows = "1" cols = "95" name = "intro" value="">{{ old('intro') }} </textarea>
  <br>
  @error('intro')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 <br>
 <label>contenido </label> <textarea rows = "10" cols = "95" name = "contenido" > {{ old('contenido') }}</textarea>

 <br>
  @error('contenido')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
 <label>fecha </label><input type= "datetime-local" name = "fecha" value="{{ old('fecha') }}"> 
  @error('fecha')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<input type="text" name="seccion"  style="width: 97%" value="lanzamiento" hidden="true"><br><br>
 <input type="submit" class="btn btn-success" onclick="myFunction()" value = "Guardar">
 </div>
</form>
@endsection