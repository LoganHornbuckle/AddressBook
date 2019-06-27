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

Route::get('/', [
    'uses'=>'ContactController@show',
    'as'=>'contacts.show'
]);

Route::post('/create', [
    'uses'=>'ContactController@create',
    'as'=>'contacts.create'
]);

Route::get('/delete', [
    'uses'=>'ContactController@delete',
    'as'=>'contacts.delete'
]);