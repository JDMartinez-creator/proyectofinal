<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {   return view('main',['seccion'=> 'main']);});
Route::get('/','MainController@mostrar');
Route::resource('/main','inicioController');
Route::resource('/noticias','NoticiaController');
Route::resource('propuestas','pendientesController');
Route::resource('articulos','articuloController');
Route::resource('lanzamientos','lanzamientoController');
Route::resource('subscripciones','SubscripcionController');
Route::resource('sitemap',"MapaController");
Route::get('/autores','AutoresController@get');
Route::resource("permisos","permisosController");
Route::resource("proponer","contenidoController");
Route::resource("lista","listaController");
Route::resource("revisar","revisarController");
Route::get("/getautores",function()
{	

	return view('autores');
}
	);

Route::get("getpermisos1",function(Request $request)
	{
	$mivar = $_GET['id'];
	return view('permisos1',['var'=>$mivar]);
	});
Route::get("getpermisos2",function(Request $request)
	{
	$mivar = $_GET['id'];
	return view('permisos2',['var'=>$mivar]);
	});
Route::get("getpermisos3",function(Request $request)
	{
	$mivar = $_GET['id'];
	return view('permisos3',['var'=>$mivar]);
	});
Route::get("getpermisos4",function(Request $request)
	{
	$mivar = $_GET['id'];
	return view('permisos4',['var'=>$mivar]);
	});
Route::get("getpermisos5",function(Request $request)
	{
	$mivar = $_GET['id'];
	return view('permisos5',['var'=>$mivar]);
	});
Route::get("setpermisos",function(Request $request)
	{
	$myid = $_GET['id'];
	$myPermiso = $_GET['permiso_id'];
	$mytipo = $_GET['tipo'];
	return view('setpermisos',['myid'=>$myid,'permiso_id'=>$myPermiso,'tipo' => $mytipo]);
	});
Route::get("/conexion",function()
{	

	return view('conexion');
}
	);
//Route::get('login','MainController@log');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
