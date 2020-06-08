<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\noticia as Noticia;
use App\lanzamiento as lanzamiento;
use App\articulo as articulo;
use DB;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class MainController extends Controller
{
    function mostrar()
    {

       $aux = DB::table('noticia')->select('id')->get();
        foreach ($aux as $t) {
            $id = $t -> id;
        }
        $not = Noticia::find($id);

         $aux = DB::table('articulos')->select('id')->get();
        foreach ($aux as $t) {
            $id = $t -> id;
        }
        $art = articulo::find($id);
        
        $noticias = Collect([$not,$art]);
        
        //$not = $noticias;
        return view('main',['noticias' => $noticias,'seccion' => 'main']);
    
    }

    public function log(){


    	return redirect('login');
    }
}
