<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::post('logout', function () {
    return 'Logout usuario';
});

Route::get('catalog', function () {
    return view('catalog.index');
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
});


Route::get('catalog/create', function () {
    return view('catalog.create');
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);
});