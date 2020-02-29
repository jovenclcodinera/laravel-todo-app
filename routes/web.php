<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Todos Route
Route::get("todos/{todo}/delete", "TodosController@destroy");
Route::get("todos/{todo}/edit", "TodosController@edit");
Route::get("todos/{todo}/complete", "TodosController@complete");
Route::get("todos/create", "TodosController@create");
Route::get("todos/{todo}", "TodosController@show");
Route::put("todos/{todo}", "TodosController@update");
Route::get('todos', "TodosController@index");
Route::post("todos", "TodosController@store");
