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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/", function() {
    return view("home");
});

Route::get("/equipes/humanoide", function() {
    return view("equipes.humanoide");
});

Route::get("/equipes/@home", "TeamsController@home");
Route::get("/equipes/humanoide", "TeamsController@humanoide");
Route::get("/equipes/sek", "TeamsController@sek");
Route::get("/equipes/vsss", "TeamsController@vsss");
