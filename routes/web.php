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
use App\Tasks;

//Route::get('/', function () {
//    return view('welcome');
//});

// show task daskboard
Route::get('/', function () {
    //
});

// add new task
Route::post('task', function () {
    //
});

// delete task
Route::delete('task/{task}', function ($task) {
    //
});
