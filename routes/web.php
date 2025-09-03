<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
Route::get('/shop', [ShopController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
