<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    //return('Pantalla principal');
    //return view('home');
});*/
Route::get('/',[HomeController::class,'getHome']);

Route::get('/auth/login', function () {
    //return('Login usuario');
    return view('auth.login');
});

Route::get('/auth/logout', function () {
    return('Logout usuario');
});


Route::get('/catalog', [CatalogController::class,'getIndex']);
Route::get('/catalog/show/{id}', [CatalogController::class,'getShow']);
Route::get('/catalog/create', [CatalogController::class,'getCreate']);
Route::post('/catalog/create', [CatalogController::class,'postCreate']);
Route::get('/catalog/edit/{id}', [CatalogController::class,'getEdit']);

/*Route::get('/catalog', function () {
    //return('Listado Peliculas');
    return view('catalog.index');
});*/
/*Route::get('/catalog/show/{id}', function ($id) {
    //return('Vista detallada pelicula '.$id);
    return view('catalog.show',['id' => $id]);
});*/

/*Route::get('/catalog/create', function () {
    //return('Añadir pelicula');
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
    //return('Modificar pelicula '.$id);
    return view('catalog.edit',['id' => $id]);
});/

