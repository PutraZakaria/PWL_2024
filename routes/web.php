<?php

use Illuminate\Support\Facades\Route;

// BASIC ROUTING
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

// ROUTE PARAMETER
// ROUTES PERTAMA
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

// ROUTES KEDUA
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

// ROUTES KETIGA
Route::get('/articles/{id}', function($Id) {
    return 'Halaman Artikel dengan ID '.$Id;
    });

// OPTIONAL PARAMETERS
// ROUTES PERTAMA
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
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
