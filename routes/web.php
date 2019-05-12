<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






// pages routes

Route::get('/', 'PagesController@index')->name('indexpage');
Route::get('about', 'PagesController@about')->name('aboutpage');
Route::get('services', 'PagesController@services')->name('servicespage');
Route::get('contact', 'PagesController@contacts')->name('contactpage');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('partners', 'PagesController@partners')->name('partners');







// appoitments routes
Route::post('/apt/store', 'AppointmentController@store');
// messages routes
Route::post('/msg/store', 'MessageController@store');
