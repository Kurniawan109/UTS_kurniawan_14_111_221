<?php

route::get ('/', 'ViewController@index');
route::get ('/halamanawal', 'ViewController@chalamanawal');
route::get ('/tambah', 'ViewController@ctambah');
route::get ('/edit', 'ViewController@cedit');

/*Route::get('/', function(){
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
*/




