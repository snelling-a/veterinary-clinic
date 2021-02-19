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

Route::get("/", "HomepageController@index");

Route::get("/search", "SearchController@index");

Route::get("/pets", "PetController@index");
Route::get("/pet/{id}", "PetController@show");
Route::get("/pet/{id}/edit", "PetController@edit");
Route::post("/pet/{id}/update", "PetController@update");

Route::get("/owners", "OwnerController@index");
Route::get("/owner/{id}", "OwnerController@show");
Route::get("/owner/{id}/edit", "OwnerController@edit");
Route::post("/owner/{id}/update", "OwnerController@update");
