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
    return view('welcome');
});


Route::get('/new', [

	'uses' => 'pagesController@new'
]);

Route::get('/firsts', [

	'uses' => 'FirstsController@index'
]);

Route::get('/first/delete/{id}', [

	'uses' => 'FirstsController@delete',

	'as' => 'first.delete'
]);


Route::get('/first/update/{id}', [


	'uses' => 'FirstsController@update',

	'as' => 'first.update'
])


Route::post('/create/first', [


	'uses' => 'FirstsController@store'

]);