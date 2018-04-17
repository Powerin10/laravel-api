<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function(){

	Route::group(['prefix' => 'posts', 'middleware' => 'auth:api'], function(){
	    Route::get('/','PostsController@index');
	    Route::get('view/{id}','PostsController@viewPost');
	    Route::post('add','PostsController@createPost');
	    Route::put('edit/{id}','PostsController@updatePost');
	    Route::delete('delete/{id}','PostsController@deletePost');
	});

	Route::group(['prefix' => 'users'], function(){
	    Route::get('/','UsersController@index');
	    Route::get('view/{id}','UsersController@view');
	    Route::post('add','UsersController@add');
	    Route::put('edit/{id}','UsersController@update');
	    Route::delete('delete/{id}','UsersController@delete');
	});

});
