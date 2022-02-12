<?php

use App\Http\Controllers\ClienteController;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cliente', ClienteController::class);
