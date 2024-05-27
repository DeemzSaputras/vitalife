<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login2');
});

// Route::get('/login', function () {
//     return view('login2');
// });

Route::get('/dash', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/maps', function () {
    return view('maps');
}); 

