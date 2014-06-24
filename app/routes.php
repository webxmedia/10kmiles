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

Route::get('/', 'PagesController@home');


Route::get('tour', 'PublicController@tour');
Route::get('signup', 'PublicController@signup');
Route::get('features', 'PublicController@features');
Route::get('pricing', 'PublicController@pricing');
Route::get('contact', 'PublicController@contact');
Route::get('login', 'PublicController@login');


Route::get('logout', 'UsersController@logout');
Route::get('team', 'UsersController@team');
Route::get('reports', 'UsersController@reports');
Route::get('journeys', 'UsersController@journeys');


Route::resource('users', 'UsersController');
Route::resource('vehicles', 'VehiclesController');
Route::resource('journeys', 'JourneysController');
