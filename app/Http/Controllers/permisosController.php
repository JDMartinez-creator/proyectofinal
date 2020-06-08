<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permisosController extends Controller
{
    public function index()
    {
    	return view("difusor.permisos");
    }
}
