<?php

use Illuminate\Support\Facades\Route;
use App\booking;
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
Route::get('booking_details',function(){
    if(session()->has('booking')){
        return view('Booking_Details');
    }
    else{
        return redirect('booking_page');
    }
});
Route::get('booking_list',function(){
        $data = booking::all();
        return view('Booking_List',compact('data'));
});

Route::get('booking_page',function(){
    return(view('New_Booking_Page'));
});  

Route::post('submit','UserController1@get_booking');
Route::post('submit1','UserController1@get_patientdetails');
Route::post('submit2','UserController1@admin_check');

Route::get('delete/{id}','UserController1@delete');
Auth::routes();

Route::get('admin',function(){
    if(session()->has('details')){
        return redirect('/')->with('alogged','Loggedin');
    }
    else{
        return view('login');
    }
});
Route::get('/home',function(){
    session()->forget('booking');
    return view('Landing_Page');
});
Route::get('/add_admin','UserController1@admin_add');
Route::get('logout',function(){
    session()->forget('details');
    return redirect('/home')->with('logout','Loggedout');
});  

Route::group(['middleware'=>['RestrictAccess']],function(){
    Route::get('booking_list',function(){
        $data = booking::all();
        return view('Booking_List',compact('data'));
    });
});
