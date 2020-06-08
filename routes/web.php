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


Route::view('/','Landing_Page');
Route::view('booking_page','New_Booking_Page');
Route::view('booking_details','Booking_Details');
Route::get('booking_list','UserController1@show_data');

Route::post('submit','UserController1@get_booking');
Route::post('submit1','UserController1@get_patientdetails');

Route::get('delete/{id}','UserController1@delete');
Auth::routes();

Route::view('/home','Landing_Page');
