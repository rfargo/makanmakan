<?php

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

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/home-new', function () {
    return view('homepage-new');
});

Route::get('/signIn', function () {
	return view('sign-in');
});

Route::get('/signup', function () {
	return view('sign-up');
});

Route::get('/article', function(){
	return view('article');
});

Route::get('/recipe', function(){
	return view('recipe');
});