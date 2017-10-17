<?php

Auth::routes();


Route::get('/threads', 'ThreadsController@index');
Route::post("/threads", "ThreadsController@store");
Route::get('/threads/create', 'ThreadsController@create');
Route::get('/threads/{id}', 'ThreadsController@show');
Route::post('/threads/{id}', 'ThreadsController@kstore');
