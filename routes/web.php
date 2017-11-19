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
    return view('task');
});

// add new task
Route::post('/task', function (Request $request) {

    return "HUNGNM";

//    print_r($request);die;
//
//    // validate
//    $validator = Validator::make($request->all(),[
//        'task_name' => 'required|max:255',
//    ]);
//
//    if ($validator->fails()) {
//        return redirect('/')->withInput()->withErrors($validator);
//    }
});

// delete task
Route::delete('/task/{task}', function (){
    //
});


// route for addcontact
Route::get('/add_contact', function (){
    return view('add_contact');
});

Route::post('/save_contact', function () {
    exit('sdfsdfs');
});