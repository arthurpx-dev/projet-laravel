<?php

use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/segunda-pagina', function () {
    return view('SegundaPagina');
});
