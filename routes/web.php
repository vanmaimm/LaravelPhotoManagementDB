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
//CRUD category
Route::get("/admin/category", "Admin\CategoryController@index");
Route::get("/category/create", "Admin\CategoryController@create");
Route::post("/category", "Admin\CategoryController@store");
Route::get("/category/edit/{id}", "Admin\CategoryController@edit");
Route::patch("/category/{id}","Admin\CategoryController@update");

///CRUD photo
Route::get("/admin/photo", "Admin\PhotoController@index");
Route::get("/photo/create", "Admin\PhotoController@create");
Route::post("/photo", "Admin\PhotoController@store");
