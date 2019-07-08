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

// routes for welcome page
Route::get('/', 'PagesController@index');

// routes for contact page
Route::get('/contact', 'PagesController@contact');

// routes for products pages
Route::get('/products', 'PagesController@products');
