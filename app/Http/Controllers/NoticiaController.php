<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticia as Noticia;
use App\User as User;
use Illuminate\Support\Facades\Auth;
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('fecha','desc')->get();
        
         return view('noticia.main',['noticias' => $noticias,'seccion' => 'noticia']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("noticia.nuevo");
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

        $noticia = Noticia::find($id);
        if($noticia != null)
        {
        $user = User::find($noticia -> user_id);
        return view("noticia.noticia",[ 'noticia' => $noticia,'user' => $user]);
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
        $noticia = Noticia::find($id);
        if ($noticia -> user_id === Auth::User() -> id) {
            if($noticia != null)
        {
        $user = User::find($noticia -> user_id);
        return view("noticia.editar",[ 'noticia' => $noticia,'user' => $user]);
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
