<?php

Route::get('test', function(){
	echo 'Welcome To My World';
});


Route::get('add/{a}/{b}', 'Myworld\Ikigai\TestController@add');
Route::get('subtract/{a}/{b}', 'Myworld\Ikigai\TestController@subtract');