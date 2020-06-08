<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pendiente as Pendiente;
use App\revisiones as Revision;
class RevisarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pendiente = Pendiente::find($request->id);
        $revision = new Revision;
        $revision -> titulo = $pendiente -> titulo;
        $revision -> introduccion = $pendiente -> introduccion; 
        $revision -> contenido = $pendiente -> contenido;
        $revision -> fecha = $pendiente -> fecha;
        $revision -> asunto =  $request -> asunto;
        $revision -> seccion = $pendiente -> seccion;
        $revision -> user_id = $pendiente -> autor_id;
        $revision -> save();
        $pendiente -> delete();
        return view("difusor.main");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
