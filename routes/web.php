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

// Route::get('/', function () {
//     return view('welcome');
// });

//praktikum basic routing
//b
// Route::get('/hello', function ()  {
//     return 'Hello World';
// });

//d
Route::get('/world', function () {
    return 'World';
});

//f
Route::get('/', function () {
    return 'Selamat Datang';
});

//g
Route::get('/about', function () {
    return '2341720175_Kamila habiba Putri Ananta';
});

//praktikum route parameters
//a
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

//d
Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-" . $commentId;
});

//f
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

//praktikum Optional Parameters
//a
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

//d
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/user/profile', function() { 
    // 
})->name('profile'); 


//praktikum controller 
use App\Http\Controllers\WelcomeController;

//d
Route::get('/hello', [WelcomeController::class, 'hello']);

//f
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

//g
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtcleController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArtcleController::class, 'articles']);

// praktikum resource Controller
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

//d
Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);


//praktikum View 
//membuat view
//b
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'kamila']);
// });

// menampilkan view dalam controller
Route::get('/greeting', [WelcomeController::class, 
'greeting']);
