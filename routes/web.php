<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\booking;
use App\lab;
use App\test;
use App\labs_tests;
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

Route::get('booking_page','UserController1@booking_page');  

Route::post('submit','UserController1@get_booking');
Route::post('submit1','UserController1@get_patientdetails');
Route::post('submit2','UserController1@admin_check');
Route::post('submit3','UserController1@labs');
Route::post('submit4','UserController1@tests');
Route::post('submit5','UserController1@labs_tests');
Route::post('submit6','UserController1@check');

Route::get('delete/{id}','UserController1@delete');
Route::get('del/{id}','UserController1@del');
Route::get('trash/{id}','UserController1@trash');
Route::get('dele/{id}','UserController1@dele');
Route::get('lab/{id}','UserController1@lab');
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
    session()->forget('sample');
    session()->forget('check');
    session()->forget('booking');
    session()->forget('sample1');
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
    Route::get('add_details',function(){
        $labs = lab::all();
        $tests = test::all();
        $associations = DB::select("select labs_tests.id,labs_tests.test_id, labs_tests.lab_id, tests.test_name, labs.lab_name
                                from labs_tests
                                join tests on labs_tests.test_id = tests.id
                                join labs on labs_tests.lab_id = labs.id");
        return view('Add_Details',compact('labs','tests','associations'));
    });
});



