<?php

namespace App\Http\Controllers;
use App\articulo as Articulo;
use App\lanzamiento as Lanzamiento;
use App\noticia as Noticia;
use App\modificacion as Modificacion;
use Illuminate\Http\Request;

class MapaController extends Controller
{
    public function index()
    {	
    	 $noticias = Noticia::orderBy('fecha','desc')->get();
    	 $modNoticias = Modificacion::where('seccion','noticia')->get();
    	 $articulos = Articulo::orderBy('fecha','desc')->get();
    	 $modArticulos = Modificacion::where('seccion','articulo')->get();
    	 $lanzamientos = Lanzamiento::orderBy('fecha','desc')->get();
    	 $modLanzamientos = Modificacion::where('seccion','lanzamiento')->get();

    	return view("mapa",['noticias' => $noticias,'modNoticias'=>$modNoticias, 'articulos' => $articulos,'modArticulos'=>$modArticulos, 'lanzamientos' => $lanzamientos,'modLanzamientos'=>$modLanzamientos]);
    }
}
