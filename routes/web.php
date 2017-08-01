<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'testController@test');
Route::get('test2', 'test2Controller@test2');
