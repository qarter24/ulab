<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/device', function () {
    return view('device');
});


Route::get('/energy', function () {
    return view('energy');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edittb', function () {
    return view('editTb');
});