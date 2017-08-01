<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('test', 'testController@test');
Route::get('test2', 'test2Controller@test2');
Route::get('blog', 'BlogController@index');
Route::get('insert', 'BlogController@insert');