<?php

namespace App\Http\Controllers;
use App\User;
use App\pendiente as Pendiente;
use App\articulo as Articulo;
use App\lanzamiento as Lanzamiento;
use App\noticia as Noticia;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Datos;

class PendientesController extends Controller
{
   public function index()
   {
      if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'difusor') {
            $pendientes = Pendiente::all();
            
            return view('difusor.pendientes',['pendientes'=>$pendientes]);
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

   public function show($id)
    {
        if (Auth::user() != null) {
         $user= Auth::user();
         if ($user -> rol === 'difusor') {
            $pendiente = Pendiente::find($id);
            if ($pendiente != null) {
               return view('difusor.verpendiente',['pendiente'=>$pendiente]);
            }
            else 
            {
               abort(404);
            }
            
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

 public function destroy($id)
 {
   if (Auth::user() != null) {
         $user= Auth::user();
         
         
         if ($user -> rol === 'difusor') {
            $pendiente = Pendiente::find($id);
            $seccion = $pendiente -> seccion;
            $now = new \DateTime();
            if($seccion === 'noticia')
            {
               $noticia = new Noticia;
               $noticia -> titulo = $pendiente -> titulo;
               $noticia -> introduccion = $pendiente -> introduccion;
               $noticia -> contenido = $pendiente -> contenido;
               $noticia -> fecha = $now->format('Y-m-d H:i');
               $noticia -> user_id = $pendiente -> autor_id;
               $noticia -> save(); 
               $pendiente -> delete();
               return redirect('/propuestas');
            }
            else if($seccion === 'lanzamiento')
            {
               $noticia = new Lanzamiento;
               $noticia -> titulo = $pendiente -> titulo;
               $noticia -> introduccion = $pendiente -> introduccion;
               $noticia -> contenido = $pendiente -> contenido;
               $noticia -> fecha = $now->format('Y-m-d H:i');
               $noticia -> user_id = $pendiente -> autor_id;
               $noticia -> save(); 
               $pendiente -> delete();
               return redirect('/propuestas');
            }
            else if ($seccion === 'articulo') 
            {
               $noticia = new Articulo;
               $noticia -> titulo = $pendiente -> titulo;
               $noticia -> introduccion = $pendiente -> introduccion;
               $noticia -> contenido = $pendiente -> contenido;
               $noticia -> fecha = $now->format('Y-m-d H:i');
               $noticia -> user_id = $pendiente -> autor_id;
               $noticia -> save(); 
               $pendiente -> delete();
               return redirect('/propuestas');
            }
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

 public function store(Datos $request)
    {
      $valido = $request -> validated();
      $pendiente = new Pendiente;
      $pendiente -> titulo = $request -> titulo;
      $pendiente -> introduccion = $request -> intro;
      $pendiente -> contenido = $request -> contenido;
      $pendiente -> fecha = $request -> fecha;
      $pendiente -> seccion = $request -> seccion;
      $pendiente -> autor_id = Auth::User()-> id;
      $pendiente -> save();
      return view("autor.main")->with('alert', 'Propuesta enviada para su revisión');
      
    }
}
