<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('alert/{type}', function ($type) {
	flash()->$type("Great! This is a {$type} message");

	return back();
})->name('alert');

Route::get('crud/{type}', function ($type) {
	flash()->$type("Great! This is a {$type} message");

	return back();
})->name('crud');

Route::get('dismissible', function () {
	$dismissible = config('flash.dismissible');

	if ($dismissible) {
		flash()->warning('All alerts are dismissible, and this one is too');
	} else {
		flash()->warning('All alerts are static, but this one is dismissible')->dismissible(true);
	}

	return back();
})->name('dismissible');

Route::get('static', function () {
	$isStatic = !config('flash.dismissible');

	if ($isStatic) {
		flash()->error('All alerts are static, and this one is too');
	} else {
		flash()->error('All alerts are dismissible, but this one is static')->dismissible(false);
	}

	return back();
})->name('static');

Route::post('validations', function () {
	request()->validate([
		'name' => 'required',
		'price' => 'required|number',
		'date' => 'required'
	]);

	flash()->success('Stored!');

	return back();
})->name('validations');
