<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route
Route::get('/', 'HomeController@index');

// // Homepage
Route::get('home', 'HomeController@index');

// Search
Route::get('search' , 'SearchController@index');
Route::get('search/query' , 'SearchController@query');

// Items
Route::get('items' , 'ItemsController@index');
// Create hardware item
Route::get('items/create_hardware_item' , 'ItemsController@getHardwareItem');
Route::post('items/create_hardware_item' , 'ItemsController@postHardwareItem');
// Create software item
Route::get('items/create_software_item' , 'ItemsController@getSoftwareItem');
Route::post('items/create_software_item' , 'ItemsController@postSoftwareItem');
// Get items
Route::get('items/all/{id?}' , 'ItemsController@allItems');
Route::get('items/{id}' , 'ItemsController@singleItem');
Route::get('items/{id}/delete' , 'ItemsController@removeItem');
Route::get('items/{id}/edit' , 'ItemsController@getEditItem');
Route::post('items/{id}/edit' , 'ItemsController@postEditItem');

// Kits
Route::get('kits' , 'KitsController@index');
Route::get('kits/create' , 'KitsController@create');
Route::post('kits/create_new_item' , 'KitsController@createNewItem');
Route::get('kits/all' , 'KitsController@allItems');
Route::get('kits/{id}' , 'KitsController@singleKit');
Route::get('kits/{id}/delete' , 'KitsController@removeItem');

// Loans
Route::get('loans' , 'LoansController@index');
Route::get('loans/create' , 'LoansController@create');
Route::post('loans/create_new_loan' , 'LoansController@createNewItem');
Route::get('loans/notify' , 'LoansController@notify');
Route::get('loans/{id}' , 'LoansController@singleItem');
Route::get('loans/{id}/delete' , 'LoansController@removeItem');

// Auth
Route::get('auth/login' , 'Auth\AuthController@getLogin');
Route::post('auth/login' , 'Auth\AuthController@postLogin');
Route::get('auth/logout' , 'Auth\AuthController@getLogout');
Route::get('auth/register' , 'Auth\AuthController@getRegister');
Route::post('auth/register' , 'Auth\AuthController@postRegister');