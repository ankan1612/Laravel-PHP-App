<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('authors', ['as'=> 'authors', 'uses'=>'AuthorsController@index']);

Route::get('author/{id}', ['as'=>'author', 'uses'=>'AuthorsController@show']);

Route::get('authors/new', ['as'=>'author_new', 'uses'=>'AuthorsController@new_author']);

Route::post('authors/create', ['as'=>'author_create', 'uses'=>'AuthorsController@create_author']);

Route::get('author/{id}/edit',['as'=>'edit', 'uses'=>'AuthorsController@edit']);

Route::post('authors/update', ['as'=>'author_update', 'uses'=>'AuthorsController@update_author']);

Route::delete('author/delete' , ['uses'=>'AuthorsController@delete_author']);
