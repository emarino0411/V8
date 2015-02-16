<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('landing_page');
});

Route::post('oauth/access_token','OAuthController@postAccessToken');
Route::resource('merchant','MerchantsController');
Route::resource('business_type','BusinessTypesController');
Route::resource('store_schedules','StoreSchedulesController');
Route::resource('stores','StoresController');
Route::resource('vehicle','VehiclesController');
Route::resource('customers','CustomersController');
Route::resource('orders','OrdersController');
Route::resource('deliveries','DeliveriesController');
Route::resource('crowdies','CrowdiesController');
Route::resource('crowdie_location_histories','CrowdieLocationHistoriesController');
Route::resource('crowdie_schedules','CrowdieSchedulesController');
Route::resource('crowdie_current_locations','CrowdieCurrentLocationsController');
Route::resource('register_crowdie','RegisterCrowdiesController');





/*
Route for Angular Routing
*/
Route::get('/form',function(){
	return View::make('registercrowdies/form');
});
Route::get('/form_profile',function(){
	return View::make('registercrowdies/form-profile');
});
Route::get('/home-address',function(){
	return View::make('registercrowdies/form-home-address');
});
Route::get('/photo-id',function(){
	return View::make('registercrowdies/form-photo-id');
});
Route::get('/agreement',function(){
	return View::make('registercrowdies/form-agreement');
});