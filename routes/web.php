<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Resource Controller
// Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
    ]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);

// Membuat Controller
// ROUTE '/hello'
Route::get('/hello', [WelcomeController::class,'hello']);

// ROUTE '/'
Route::get('/', [HomeController::class,'index']);
    
// ROUTE '/about'
Route::get('/about', [AboutController::class,'about']);

// ROUTE '/articles/{id}'
Route::get('/articles/{id}', [ArticleController::class,'articles']);


// BASIC ROUTING
// ROUTES PERTAMA
// Route::get('/hello', function () {
// return 'Hello World';
// });

// ROUTES KEDUA
Route::get('/world', function () {
return 'World';
});

// ROUTES KETIGA
// Route::get('/', function () {
//     return 'Selamat Datang';
//     });

// // ROUTES KETIGA
// Route::get('/about', function () {
//     return 'NIM : 2241720220 <br> NAMA : PUTRA ZAKARIA MUZAKI';
//     });

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
// Route::get('/articles/{id}', function($Id) {
//     return 'Halaman Artikel dengan ID '.$Id;
//     });

// OPTIONAL PARAMETERS
// ROUTES PERTAMA
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

// ROUTE NAME
Route::get('/user/profile', function() {
    //
    })->name('profile');

    //untuk singkatan nama router apabila mau dipake diview 

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
