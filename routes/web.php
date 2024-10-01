<?php

use App\Http\Controllers\terminalListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('terminalListView'); });

Route::get('/terminalList/', [terminalListController::class, 'postCheckIfMallAccred']);