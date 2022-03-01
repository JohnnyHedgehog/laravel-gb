<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', fn (string $name) =>  "<h1>Hello, {$name}</h1>");

// Выводим страницу приветствия
Route::get('/hello', fn() => "Hello, World!");

//Выводим страницу с информацией о проекте
Route::get('/info', fn() => "This is our porject");

//Выводим страницу с новостями
Route::get('/news', fn() => "Latest news");