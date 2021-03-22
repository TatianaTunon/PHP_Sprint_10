<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\usuarioRequest;

class usuarioController extends Controller
{
    //Llama al controlador date (afecta a las acciones dentro del controlador, por eso no se ve en la pantalla inicio)
    public function __construct(){
        $this->middleware ('date');
    }

    public function show () {
        //echo "estoy pasando por la funcion show";
        return view('users/indexuser');
    }

    public function create(Request $request) {
       //echo "estoy pasando por la funcion create";
       return view('users/createuser');
    }
  
    public function edit(Request $request) {
        //echo "estoy pasando por la funcion edit";
        return view('users/edituser');
    } 

    public function update(usuarioRequest $request) {
        echo "Datos validados";
        dd($request->all());
    } 

    public function delete() {
        //echo "estoy pasando por la funcion delete";
        return view ('users/deleteuser');
    }

    public function login() {
        //echo "estoy pasando por la funcion login";
        return view ('auth/login');
    }

    public function showrecuperacio() {
        //echo "estoy pasando por la funcion recuperacio";
        return view ('auth/recuperacio');
    }

    public function recuperacio() {
       echo "Te hemos enviado un email";
       //return redirect ('login');
    }
}
