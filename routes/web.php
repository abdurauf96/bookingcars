<?php

use Spatie\Analytics\Period;
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

Route::get('/', 'IndexController@index')->name('home');

Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

Route::get('/data', function(){
	$metrika = YandexMetrika::getVisitsViewsUsers();
	dd($metrika); 
});

Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/service/{id}', 'ServiceController@view')->name('service');
Route::get('/view/{id}', 'CarController@view')->name('view');
Route::get('/doublebus/{id}', 'CarController@bus')->name('bus');
Route::get('/cortages', 'ServiceController@cortages')->name('cortages');

Route::post('/booking-cortage', 'BookingController@zakazat_cortage');
Route::post('/apply', 'ContactController@apply')->name('apply');
Route::post('/apply3', 'ContactController@apply3');
Route::post('/apply_comment', 'ContactController@apply_comment');
Route::post('/sortCat', 'CarController@sortCat');
Route::post('/sortCatService', 'CarController@sortCatService');
Route::post('/contact', 'ContactController@contact')->name('contact');
Route::post('/convertToRubl', 'CarController@convertToRubl');
Route::post('/convertToDollar', 'CarController@convertToDollar');

Route::post('/gidcars', 'PriceController@gidcars');
Route::post('/gidcars_chair', 'PriceController@gidcars_chair');
Route::post('/cortage', 'PriceController@cortage');
Route::post('/transfer', 'PriceController@transfer');
Route::post('/direction', 'PriceController@direction');
Route::post('/rentCars', 'PriceController@rentCars');

Route::post('/booking', 'BookingController@booking')->name('booking');
Route::get('search', 'CarController@search')->name('search');
Route::post('searchCar', 'CarController@searchCar');

Route::get('/services', 'IndexController@services');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
