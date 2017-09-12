<?php

Auth::routes();


Route::get("/threads", function(){
	return view ("threads.index");
});


Route::get("/threads/create", function(){
	return view ("threads.create");
});

Route::get("/", function(){

	return view("hello", ["name" => "gabriel"]);
});

Route::get("greeting/{id}/{count}", function($id, $count){

	return view("greeting", ["id" => $id],["count" => $count] );
});
