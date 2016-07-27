<?php


Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/post/{slug}',  [
 	'as' => 'post-show',
 	'uses' => 'PostController@getShow'
]);

Route::get('/create', [
	'as' => 'create-blog-post',
	'uses' => 'PostController@getCreateBlogPost'
]);


Route::post('/create', [
	'as' => 'post-create-blog-post',
	'uses' => 'PostController@postCreateBlogPost'
]);


