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
	return View::make('public/index');
});

Route::get('/users', function()
{
    return View::make('users/index');
});


Route::get('/signup', function()
{
    return View::make('public/signup');
});

Route::get('/tour', function()
{
    return View::make('public/tour');
});

Route::get('/features', function()
{
    return View::make('public/features');
});

Route::get('/pricing', function()
{
    return View::make('public/pricing');
});

Route::get('/reports', function()
{
    return View::make('users/reports');
});

Route::get('/journeys', function()
{
    return View::make('users/journeys');
});

Route::get('/vehicles', function()
{
    return View::make('users/vehicles');
});

Route::get('/team', function()
{
    return View::make('users/team');
});
