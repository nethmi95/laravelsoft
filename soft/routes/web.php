<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

//Create Employee Form
Route::get('/CreateEmployee', function () {
    return view('CreateEmployee');
});

//Save Employee
Route::post('SaveEmployeeData','App\Http\Controllers\EmployeeController@Save');
//Index Employee
Route::get('IndexEmployee','App\Http\Controllers\EmployeeController@Index');

Route::get('DeleteEmployee/{EmployeeId}','App\Http\Controllers\EmployeeController@Delete');

Route::get('UpdateEmployee/{EmployeeId}','App\Http\Controllers\EmployeeController@UpdateView');

Route::post('/UpdateData/{EmployeeId}','App\Http\Controllers\EmployeeController@UpdateData');


