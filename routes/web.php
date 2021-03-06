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

Route::get('/', function () {
    return view('index');
});

Route::get('/artikel','ArticleController@index');
Route::get('/artikel/create','ArticleController@create');
Route::post('/artikel','ArticleController@store');
// Route::get('/artikel/{id}','ArticleController@index');
Route::get('/artikel/{id}/edit','ArticleController@edit');
Route::post('/artikel/{id}/update','ArticleController@update');
Route::get('/artikel/{id}/delete','ArticleController@delete');
Route::get('/artikel/{id}/detail','ArticleController@detail');