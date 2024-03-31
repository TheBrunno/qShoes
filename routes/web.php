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

Route::post('/login', function(Request $request){
    $user = Cadastro::where('email', $request->email)->first();

    if($user && $request->password == $user->password){
        echo "Login bem-sucedido";
    }else{
        echo "Usuario ou senha não foram colocados corretamente";
    }

});