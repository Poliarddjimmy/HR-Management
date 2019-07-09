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

Route::get('/', 'HomeController@welcome');

Auth::routes();
Route::resource('/home', 'HomeController');
Route::resource('/department', 'DepartmentController');
Route::resource('/division', 'DivisionController');
Route::resource('/employee', 'EmployeeController');
Route::resource('/position', 'PositionController');
Route::resource('/task', 'TaskController');