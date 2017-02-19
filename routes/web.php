<?php
Route::get('/', function(){
	return view('home');
});

Route::get('/halamanawal', function(){
	return view('halamanawal');
});

Route::get('/edit', function(){
	return view('edit');
});

Route::get('/tambah', function(){
	return view('tambah');
});




