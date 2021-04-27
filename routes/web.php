<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use Illuminate\Http\Request;
Route::resource('barang', BarangController::class);


Route::get('/login', function(){
    return view('sigin');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/', function(){
    return view('login');
});
Route::get('/loading', function(){
    return view('loading');
});