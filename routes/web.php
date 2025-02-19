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
Route::get('/hello', function ()  {
    return 'Hello World';
});

//d
Route::get('/world', function ()  {
    return 'World';
});

//f
Route::get('/', function ()  {
    return 'Selamat Datang';
});

//g
Route::get('/about', function ()  {
    return '2341720175_Kamila habiba Putri Ananta';
});

//praktikum route parameters
//a
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

//d
Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-".$commentId;
});

//f
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

//praktikum Optional Parameters
//a
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

//d
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});