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


route::get('/incDecNumber','IncDecController@myNumberDefault');
route::get('/incDecNumber/{num}','IncDecController@myNumber');
route::post('/incDecNumber/{num}','IncDecController@myNumberAdjust');

route::get('/student-form/create','StudentController@create');
route::post('/student-form/create','StudentController@store');
route::get('/student-list','StudentController@index');

route::get('/department-form/create','DepartmentController@create');
route::post('/department-form/create','DepartmentController@store');
route::get('/department-list','DepartmentController@index');

route::get('/faculty-form/create','FacultyController@create');
route::post('/faculty-form/create','FacultyController@store');
route::get('/faculty-list','FacultyController@index');