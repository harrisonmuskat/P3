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
	return View::make('home');
});



Route::get('/lipsum', function()
{
	return "This is the Lorem Ipsum page";
});

Route::post('/lipsum', function()
{
	return "This is the l.i. generator page";
});



Route::get('/ruser', function()
{
	return "This is the user page";
});

Route::post('/ruser', function()
{
	return "This is the user gen. page";
});



Route::get('/pwd', function()
{
	return "This is the pwd page";
});

Route::post('/pwd', function()
{
	return "This is the pwd gen page";
});