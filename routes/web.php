<?php
Route::get('/', function () {
	return view('welcome');
});
Auth::routes();
// Pages
Route::get('home', 'HomeController@index');

//RegularsController
Route::resource('regulars', 'RegularsController');
Route::get('regulars/export/pdf', 'RegularsController@export');

//AssociatesController
Route::resource('associates', 'AssociatesController');
Route::get('associates/export/pdf', 'AssociatesController@export');

//OperatorsController
Route::resource('operators', 'OperatorsController');
Route::get('operators/export/pdf', 'OperatorsController@export');

//DriversController
Route::resource('drivers', 'DriversController');
Route::get('drivers/export/pdf', 'DriversController@export');

//VehiclesController
Route::resource('vehicles', 'VehiclesController');
Route::post('vehicles/{plate_num}/photos', ['as' => 'store_photo_path', 'uses' => 'VehiclesController@addPhoto']);
Route::delete('photos/{id}', 'VehiclesController@destroyPhoto');
Route::get('vehicles/export/pdf', 'VehiclesController@export');
