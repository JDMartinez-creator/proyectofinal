<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Autor;
use Illuminate\Support\Facades\Auth;
class AutoresController extends Controller
{

public function get()
	{
    	if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'difusor') {
            $autores = Autor::where('rol','autor') -> get();
            return view('difusor.autores',['autores'=>$autores]);
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
