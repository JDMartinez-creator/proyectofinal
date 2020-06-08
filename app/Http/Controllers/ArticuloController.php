<?php

namespace App\Http\Controllers;
use App\articulo as Articulo;
use App\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Articulo::orderBy('fecha','desc')->get();
        
         return view('articulo.main',['noticias' => $noticias,'seccion' => 'noticia']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articulo.nuevo");
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
        $noticia = Articulo::find($id);
        if($noticia != null)
        {
        $user = User::find($noticia -> user_id);
        return view("articulo.articulo",[ 'noticia' => $noticia,'user' => $user]);
        }
        else{abort(404);}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $noticia = Articulo::find($id);
        if ($noticia -> user_id === Auth::User() -> id) {
            if($noticia != null)
        {
        $user = User::find($noticia -> user_id);
        return view("articulo.editar",[ 'noticia' => $noticia,'user' => $user]);
        }
        else{abort(404);}
        }
        else{abort(401);}
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
