<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/ajout', function () {
    return view('ajout');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/employe', function () {
    return view('employe');
});
