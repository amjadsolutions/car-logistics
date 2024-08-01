<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Ensure this view contains the Vue app and AdminLTE layout
});

Route::get('/register', function () {
    return view('welcome'); // Or another view if you have a specific registration view
});

Route::get('/dashboard', function () {
    return view('welcome'); // Or another view if you have a specific registration view
});
