<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Home*/
Route::get('/', 'HomeController@index');

/*CRUD*/
Route::resource('news', 'NewsController');
Route::resource('categories', 'CategoriesController');

/*RSS*/
Route::get('rss', function(){

	$category = Request::input('category');	

	if($category)
		return News::where('category_id', '=', $category)->get();

	return News::all();
	
});