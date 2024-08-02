<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/second', function () {
//     return view('second');
// });
//OR
// Route::view('/second', 'second');
