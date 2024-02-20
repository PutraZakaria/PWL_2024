<?php

use Illuminate\Support\Facades\Route;

// ROUTES PERTAMA
Route::get('/hello', function () {
return 'Hello World';
});

// ROUTES KEDUA
Route::get('/world', function () {
return 'World';
});

// ROUTES KETIGA
Route::get('/', function () {
    return 'Selamat Datang';
    });

// ROUTES KETIGA
Route::get('/about', function () {
    return 'NIM : 2241720220 <br> NAMA : PUTRA ZAKARIA MUZAKI';
    });

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

// Route::get('/', function () {
//     return view('welcome');
// });
