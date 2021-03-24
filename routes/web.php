<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\cookieController;
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

//PANTALLA PRINCIPAL
Route::get ('/', function (){
    return view ('/home');
});
/*
Route::match (['get', 'post', 'put', 'delete'], '/', function (){
    return view ('/home');
});

Route::get ('/', function (){
    //return "pantalla principal (get)";
    return view ('/home');
});
Route::post ('/', function (){
    //return "pantalla principal (post)";
    return view ('/home');
});
Route::put ('/', function (){
    //return "pantalla principal (put)";
    return view ('/home');
});
Route::delete ('/', function (){
    //return "pantalla principal (delete)";
    return view ('/home');
});
*/


//LOGIN USUARIO
//Route::get ('/login', [usuarioController::class, 'login'])->name('login');
//Route::post ('/login', [usuarioController::class, 'user']);
Route::get('/login', [cookieController::class, 'cookie'])->name('login');
Route::post('/login', [cookieController::class, 'guardarcookie']);

Route::get ('/recuperacio', [usuarioController::class, 'showrecuperacio'])->name('showrecuperacio');
Route::post ('/recuperacio', [usuarioController::class, 'recuperacio'])->name('recuperacio');

/*
Route::get ('/login', function (){
    //return "login usuario (get)";
    return view ('auth/login');
});
Route::post ('/login', function (){
    //return "login usuario (post)";
    return view ('auth/login');
});
Route::put ('/login', function (){
    //return "login usuario (put)";
    return view ('auth/login');
});
Route::delete ('/login', function (){
    //return "login usuario (delete)";
    return view ('auth/login');
});
*/

//LOGOUT USUARIO
Route::match (['get', 'post', 'put', 'delete'], '/logout', function (){
    return "logout usuario";
});
/*
Route::get ('/logout', function (){
    return "logout usuario (get)";
});
Route::post ('/logout', function (){
    return "logout usuario (post)";
});
Route::put ('/logout', function (){
    return "logout usuario (put)";
});
Route::delete ('/logout', function (){
    return "logout usuario (delete)";
});
*/

//RUTAS PARA CRUD USUARIO
Route::match (['get', 'post', 'put', 'delete'],'/Users/indexuser', [usuarioController::class, 'show'])->name('show');
Route::get ('/Users/createuser', [usuarioController::class, 'create'])->name('create');
Route::post ('/Users/createuser', [usuarioController::class, 'update'])->name('update');
Route::get ('/Users/edituser', [usuarioController::class, 'edit']);
Route::put ('Users/edituser', [usuarioController::class, 'update'])->name('edit');
Route::delete ('/Users/delete', [usuarioController::class, 'delete'])->name('delete');

//LISTA DE LIBROS

Route::match (['get', 'post', 'put', 'delete'], '/catalog', function (){
    return view ('catalog/index');
});
/*
Route::get ('/catalog', function (){
    //return "Llista de llibres (get)";
    return view ('catalog/index');
});
Route::post ('/catalog', function (){
    //return "Llista de llibres (post)";
    return view ('catalog/index');
});
Route::put ('/catalog', function (){
    //return "Llista de llibres (put)";
    return view ('catalog/index');
});
Route::delete ('/catalog', function (){
    //return "Llista de llibres (delete)";
    return view ('catalog/index');
});
*/

//VISTA DETALL LLIBRE id
Route::match (['get', 'post', 'put', 'delete'], '/catalog/show/{id}', function (){
    return view ('catalog/show');
});
/*
Route::get ('/catalog/show/{id}', function (){
    //return "Vista detall llibres (get)";
    return view ('catalog/show');
});
Route::post ('/catalog/show/{id}', function (){
    //return "Vista detall llibres (post)";
    return view ('catalog/show');
});
Route::put ('/catalog/show/{id}', function (){
    //return "Vista detall llibres (put)";
    return view ('catalog/show');
});
Route::delete ('/catalog/show/{id}', function (){
    //return "Vista detall llibres (delete)";
    return view ('catalog/show');
});
*/

//AFEGIR LLIBRE

Route::match (['get', 'post', 'put', 'delete'], '/catalog/create', function (){
    return view ('catalog/create');
});
/*
Route::get ('/catalog/create', function (){
    //return "Afegir llibres (get)";
    return view ('catalog/create');
});
Route::post ('/catalog/create', function (){
    //return "Afegir llibres (post)";
    return view ('catalog/create');
});
Route::put ('/catalog/create', function (){
    //return "Afegir llibres (put)";
    return view ('catalog/create');
});
Route::delete ('/catalog/create', function (){
    //return "Afegir llibres (delete)";
    return view ('catalog/create');
});
*/

//MODIFICAR LLIBRE id

Route::match (['get', 'post', 'put', 'delete'], '/catalog/edit/{id}', function (){
    return view ('catalog/edit');
});
/*
Route::get ('/catalog/edit/{id}', function (){
    //return "Modificar llibres (get)";
    return view ('catalog/edit');
});
Route::post ('/catalog/edit/{id}', function (){
    //return "Modificar llibres (post)";
    return view ('catalog/create');
});
Route::put ('/catalog/edit/{id}', function (){
    //return "Modificar llibres (put)";
    return view ('catalog/create');
});
Route::delete ('/catalog/edit/{id}', function (){
    //return "Modificar llibres (delete)";
    return view ('catalog/create');
});
*/
