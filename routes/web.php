<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
	return view("welcome");
});


Route::get("hello", function () {
	return "<h1>guh!??!!</h1>";
});

foreach(["hehe", "hehehe", "hehehehe"] as $hehe) {
	Route::get($hehe, function () {
		return view("hehehe");
	});
}



