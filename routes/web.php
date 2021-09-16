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

Route::get('/', function () {
    return view('auth.login');
});








Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //Admin create Controller

    Route::resource('admin-create', 'AdminController');

    // Room controller

    Route::resource('rooms', 'User\RoomController');


    // Customer Register Controller

    Route::resource('customer-reg', 'User\CustomerRegController');


    // Booking Controller 

    Route::resource('booking', 'User\BookingController');

    //Customer data requset

    Route::get('/get/getcus/{id}', 'User\BookingController@getcus');

    //Room data requset
    Route::get('/get/getroom/{id}', 'User\BookingController@getroom');

    Route::get('/end-booking', 'User\BookingController@endbooking');

    //End Room   
    Route::any('/end/{id}', 'User\BookingController@end')->name('end');

    // Avalible room checking

    Route::get('/booking-room', 'User\BookingController@bookingroom');
});