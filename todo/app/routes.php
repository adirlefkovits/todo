<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::model("task", "Task");

Route::get("todos", [
    "as"   => "task/index",
    "uses" => "taskController@index"
]);
Route::post("todos", [
    "as"   => "event/store",
    "uses" => "taskController@store"
]);
Route::get("todos/{task}", [
    "as"   => "event/show",
    "uses" => "taskController@show"
]);
Route::put("todos/{task}", [
    "as"   => "event/update",
    "uses" => "taskController@update"
]);
Route::delete("todos/{task}", [
    "as"   => "event/destroy",
    "uses" => "taskController@destroy"
]);
