<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subscripcion as Suscrito;

class SubscripcionController extends Controller
{
    public function index(){

    	if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'difusor') {
            $subscritos = Suscrito::all();
            return view('difusor.subscripciones',['subscritos'=>$subscritos]);
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

    public function store(Request $request){
      $suscrito = new Suscrito;
      $suscrito -> correo = $request -> correo;
      $suscrito -> seccion = $request -> seccion;
      $suscrito -> contenido_id = $request -> id;
      $suscrito -> save();
      return redirect()->back();
    }
}
