<?php

use Illuminate\Support\Facades\Route;




Auth::routes(['register'=>false]);




Route::group(['prefix' => 'lgds', 'middleware'=>'auth'], function() {

	Route::get('/home', 'AppointmentController@index')->name('home');
    // appoitments routes
	Route::post('/apt/store', 'AppointmentController@store');
	// messages routes
	Route::post('/msg/store', 'MessageController@store');

	Route::get('/apt/view/{id}', 'AppointmentController@show')->name('showappt');



	// manage partners
	Route::get('/partners/manage', 'CrudController@partnerindex')->name('managepartners');
	Route::post('/partners/store', 'CrudController@partneradd')->name('addpartner');
	Route::get('/partners/delete', 'CrudController@partnerdelete')->name('deletepartners');
	// manage services
	Route::get('/services/manage', 'CrudController@serviceindex')->name('manageservices');
	Route::post('/services/store', 'CrudController@serviceadd')->name('addservice');
	Route::get('/services/delete', 'CrudController@servicedelete')->name('deleteservices');

	
});



// pages routes

Route::get('/', 'PagesController@index')->name('indexpage');
Route::get('about', 'PagesController@about')->name('aboutpage');
Route::get('services', 'PagesController@services')->name('servicespage');
Route::get('contact', 'PagesController@contacts')->name('contactpage');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('partners', 'PagesController@partners')->name('partners');








