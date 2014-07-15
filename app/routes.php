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
	$generator = new Badcow\LoremIpsum\Generator();
	$lipsum = '';

	$paragraphs = $generator->getParagraphs(5);
	for ($i = 0; $i < count($paragraphs); $i++) {
		$lipsum .= '<p class = "small">'.$paragraphs[$i].'</p>';
	}

	return View::make('lipsum')->with('lipsum', $lipsum);
});

Route::post('/lipsum', function()
{
	$generator = new Badcow\LoremIpsum\Generator();
	$lipsum = '';

	if(empty($_POST["paragraphs"])){
		$paragraphs = $generator->getParagraphs(5);
    	for ($i = 0; $i < count($paragraphs); $i++) {
    		$lipsum .= '<p class = "small">'.$paragraphs[$i].'</p>';
    	}
	}
	else {
		$paragraphs = $generator->getParagraphs($_POST["paragraphs"]);
		for ($i = 0; $i < count($paragraphs); $i++) {
    		$lipsum .= '<p class = "small">'.$paragraphs[$i].'</p>';
    	}
	}
	return View::make('lipsum')->with('lipsum', $lipsum);
});


Route::get('/ruser', function()
{
	$faker = Faker\Factory::create();
	$names = '';

	for ($i = 0; $i < 5; $i++) {
		$names .= $faker->name . '<br>';
	}

	return View::make('ruser')->with('names', $names);
});

Route::post('/ruser', function()
{
	$faker = Faker\Factory::create();
	$names = '';
				    
    if(empty($_POST["users"])){
		for ($i = 0; $i < 5; $i++) {
			$names .= $faker->name . '<br>';
		}
	}
	else {
		for ($i = 0; $i < $_POST["users"]; $i++) { 
			$names .= $faker->name . '<br>';
		}
	}
	return View::make('ruser')->with('names', $names);
});



Route::get('/pwd', function()
{
	return "This is the pwd page";
});

Route::post('/pwd', function()
{
	return "This is the pwd gen page";
});