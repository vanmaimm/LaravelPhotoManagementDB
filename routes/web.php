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
Route::delete("/category/delete/{id}", "Admin\CategoryController@destroy");

///CRUD photo
Route::get("/photo/create", "Admin\PhotoController@create");
Route::get("/admin/photo", "Admin\PhotoController@index");
Route::delete("/admin/photo/{id}", "Admin\PhotoController@destroy");
Route::post("/photo", "Admin\PhotoController@store");
Route::get("/photo/edit/{id}", "Admin\PhotoController@edit");
Route::patch("/photo/{id}","Admin\PhotoController@update");

/// CRUD tag
Route::get("/admin/tag", "Admin\TagController@index");
Route::get("/tag/create", "Admin\TagController@create");
Route::post("/tag", "Admin\TagController@store");
Route::get("/tag/edit/{id}", "Admin\TagController@edit");
Route::patch("/tag/{id}","Admin\TagController@update");
Route::delete("/tag/delete/{id}", "Admin\TagController@destroy");