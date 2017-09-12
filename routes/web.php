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

Route::get("greeting/{id}/{count}", function($a,$count){
	$id =["hello", "hæ", "chong", "ching", "chow" ];
	$a = $id[$a];

	return view("greeting", ["id" => $a,"count" => $count] );
})->where(["id" => "[0-4]+"]);
