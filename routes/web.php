<?php
Route::get('/', function () {
	return view('welcome');
});
Auth::routes();
// Pages
Route::get('home', 'HomeController@index');

//RegularsController
Route::resource('regulars', 'RegularsController');
Route::get('regulars/{regular}/export', 'RegularsController@export');
Route::get('regulars/{regular}/print', 'RegularsController@print');

//AssociatesController
Route::resource('associates', 'AssociatesController');
Route::get('associates/{associate}/export', 'AssociatesController@export');
Route::get('associates/{associate}/print', 'AssociatesController@print');

//OperatorsController
Route::resource('operators', 'OperatorsController');
Route::get('operators/{operator}/export', 'OperatorsController@export');
Route::get('operators/{operator}/print', 'OperatorsController@print');

//DriversController
Route::resource('drivers', 'DriversController');
Route::get('drivers/{driver}/export', 'DriversController@export');
Route::get('drivers/{driver}/print', 'DriversController@print');

//VehiclesController
Route::resource('vehicles', 'VehiclesController');
Route::post('vehicles/{plate_num}/photos', ['as' => 'store_photo_path', 'uses' => 'VehiclesController@addPhoto']);
Route::delete('photos/{id}', 'VehiclesController@destroyPhoto');
Route::get('vehicles/{vehicle}/export', 'VehiclesController@export');
Route::get('vehicles/{vehicle}/print', 'VehiclesController@print');
