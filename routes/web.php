<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/admin", "ProductsController@index")->name("adminindex");
Route::get("/admin/create", "ProductsController@create")->name("adminicreate");
Route::post("/admin/store", "ProductsController@store")->name("adminstore");
Route::get("admin/show/{id}", "ProductsController@show")->name("adminshow");
Route::post("/admin/delete", "ProductsController@destroy")->name("admindelete");
Route::get("/admin/edit/{id}", "ProductsController@edit")->name("adminedit");
Route::post("/admin/update", "ProductsController@update")->name("adminupdate");
Route::post("/admin/sotre/products", "StoreController@show_products")->name("storecomment");