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

use Badcow\LoremIpsum\Generator;

Route::get('/lipsum', function()
{
	return View::make('lipsum');
});

Route::post('/lipsum', function()
{
	return View::make('lipsum');
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