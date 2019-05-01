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

Route::redirect('/', 'login');

Auth::routes();

//web
Route::get('home', 'Web\PageController@home')->name('home')->middleware('auth');

//admin
Route::resource('documents', 'Admin\DocumentController');
Route::resource('associateds', 'Admin\AssociatedController');

Route::get('buscar_documento', 'Admin\DocumentController@buscar')->name('buscar_doc');
Route::get('buscar_asociado', 'Admin\AssociatedController@buscar')->name('buscar_aso');
