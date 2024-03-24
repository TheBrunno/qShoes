<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cadastro;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', function(Request $request){
    Cadastro::create([
          'name'=> $request -> name,
          'email' => $request -> email,
          'password'=> $request -> password
    ]);
    echo " Cadastrado com sucessso";
});