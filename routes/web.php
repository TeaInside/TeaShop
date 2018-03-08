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

Route::get("/", "IndexController@index");


// Menu routes.
Route::get("/how-to-order", function () {
	return view("how_to_order");
})->name("menu.how_to_order");

Route::get("/price-list", "PriceListController@index")->name("menu.price_list");
