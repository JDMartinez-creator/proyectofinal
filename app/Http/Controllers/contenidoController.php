<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\noticia as Noticia;
use App\articulo as Articulo;
use App\lanzamiento as Lanzamiento;
use App\User as Autor;
use App\Permisos as Permisos;
use App\namePermisos as namePermisos;
class contenidoController extends Controller
{
     public function index()
     {
     	if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'autor') {
         	$collection = collect();
         	$permisos = Permisos::where('user_id',Auth::user()->id) -> get();
         	foreach ($permisos as $permiso) {
         		$name = namePermisos::find( $permiso-> permisos_id);
         		if ($name-> id < 4) {
         			$collection -> push($name -> nombre);	
         		}
         		
         	}
         	return view("autor.proponer",["nombres" => $collection]);
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
     	/**$noticias = Noticia::where('user_id',Auth::User()-> id)->get();
     	$lanzamiento = Articulo::where('user_id',Auth::User()-> id)->get();
     	echo $lanzamiento;
     