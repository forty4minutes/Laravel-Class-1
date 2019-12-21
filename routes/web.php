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

// DISPLAYING /about page VIA GET METHOD DIRECTLY FROM VIEW
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', function () {
    return view('welcome');
});

//  About page using AboutController controller
Route::get('/about', 'AboutController@index');

//Random Number generator using RandomController
Route::get('/random', 'RandomController@randomView');
Route::post('/random', 'RandomController@random');

Route::get('/student-form/create', 'StudentController@create');
Route::post('/student-form/create', 'StudentController@store');

Route::get('/student-list', 'StudentController@index');