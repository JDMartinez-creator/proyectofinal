<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticia as Noticia;
use App\articulo as Articulo;
use App\lanzamiento as Lanzamiento;
use App\User as Autor;
use App\pendiente as Pendiente;
use App\revisiones as Revision;
use Illuminate\Support\Facades\Auth;

class listaController extends Controller
{
    public function index()
    {
    	if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'autor') {
         	$collection = collect();
			$noticias = Noticia::where('user_id',$user -> id)->get();
			$articulos = Articulo::where('user_id',$user -> id)->get();
			$lanzamientos = Lanzamiento::where('user_id',$user -> id)->get();
			$pendientes = Pendiente::where('autor_id',$user -> id)->get();
      $revisiones = Revision::where('user_id',$user -> id)->get();
         	return view("autor.lista",['noticias' => $noticias,'articulos' => $articulos,'lanzamientos'=> $lanzamientos,'pendientes' => $pendientes, "revisiones" => $revisiones]);
         	
         }
            else{
               abort(403);
            }
      }
      else
      {
         abort(403);
      }
    	
    }
}
