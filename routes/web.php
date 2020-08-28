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

Route::view('/', 'welcome');
Route::post('/addUser', 'UserController@store')->name('addUser');

Route::view('/login', 'Login');

Route::view('/customer', 'Customer');
Route::get('/customer', 'CustomerController@index');
Route::get('/editCustomer/{id}', 'CustomerController@edit');
Route::put('/updateCustomer/{id}', 'CustomerController@update');
Route::post('/addCustomer', 'CustomerController@store')->name('addCustomer');
Route::get('/deleteCustomer/{id}', 'CustomerController@destroy');

Route::view('/contact', 'Contact');
Route::get('/contact', 'ContactController@index');
Route::get('/edit/{id}', 'ContactController@edit');
Route::put('/update/{id}', 'ContactController@update');
Route::post('/addContact', 'ContactController@store')->name('addContact');
Route::get('/delete/{id}', 'ContactController@destroy');


Route::view('/report', 'Report');
Route::get('/report', 'ReportController@index');

