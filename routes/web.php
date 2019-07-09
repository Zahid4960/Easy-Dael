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
Route::get('/', 'PagesController@index')->name('FrontendIndex');

// routes for contact page
Route::get('/contact', 'PagesController@contact')->name('FrontendContact');

// routes for products pages
Route::get('/products', 'PagesController@products')->name('FrontendProducts');

// routes for login pages
Route::get('/login', 'PagesController@Signin')->name('Signin');

// routes for register pages
Route::get('/register', 'PagesController@Register')->name('Register');

// routes group for admin
Route::group(['prefix' => 'admin'], function(){

  //route for admin index page
  Route::get('/', 'AdminPagesController@index')->name('AdminIndex');
});
