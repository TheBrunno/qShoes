<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cadastro;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["name"]);

    return redirect('/');
});

Route::post('/register', function(Request $request){
    Cadastro::create([
          'name'=> $request -> name,
          'email' => $request -> email,
          'password'=> $request -> password
    ]);

    session_start();
    $_SESSION["email"]=$request -> email;
    $_SESSION["name"]=$request -> name;
    return redirect('/');
});

Route::post('/login', function(Request $request){
    $user = Cadastro::where('email', $request->email)->first();

    if($user && $request->password == $user->password){
        session_start();
        $_SESSION["email"]=$user -> email;
        $_SESSION["name"]=$user -> name;
        return redirect('/');
    }else{
        echo "Usuario ou senha não foram colocados corretamente";
    }

});