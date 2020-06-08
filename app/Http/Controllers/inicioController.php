<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticia as Noticia;
use App\lanzamiento as lanzamiento;
use App\articulo as articulo;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class inicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::user()== null)
        {
            $aux = DB::table('noticia')->select('id')->get();
            foreach ($aux as $t) 
            {
                $id = $t -> id;
            }
            $not = Noticia::find($id);

             $aux = DB::table('articulos')->select('id')->get();
            foreach ($aux as $t) 
            {
                $id = $t -> id;
            }
            $art = articulo::find($id);

            $aux = DB::table('lanzamientos')->select('id')->get();
            foreach ($aux as $t) 
            {
                $id = $t -> id;
            }
            $lanz = lanzamiento::find($id);
            
            
            //$not = $noticias;
            return view('main.main',['noticia' => $not,'articulo' => $art,'lanzamiento'=>$lanz,'seccion' => 'main']);
                
        }
        else
        {
            
            $rol = Auth::user()-> rol;
            if ($rol === 'difusor') {
                return view('difusor.main');
            }
            else if($rol === 'autor')
            {
                return view("autor.main");
            }
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
