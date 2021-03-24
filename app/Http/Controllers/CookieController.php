<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function __construct(){
        $this->middleware ('date');
    }
    
    public function cookie(){
        //$name = \Request::cookie('name');
        return view('auth/login');
    }

    public function guardarcookie (Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);
        Cookie::queue(Cookie::forget ('name')); //olvida variables anteriores
        Cookie::queue(Cookie::make('name', $request->name, 10)); //crea nueva variable
        return redirect ('Users/indexuser');

    }
    
}
