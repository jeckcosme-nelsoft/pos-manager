<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientlist', function () {
    return view('clientlistView');
});

Route::get('/terminallist/1000', function () {
    return view('terminallistView');
});