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
    return view('home');
})->name('home');

Route::get('/watch', 'SeriesController@watchEpisode')->name('episode-page');

Route::get('/seasons', function () {
    return view('home');
})->name('seasons');

Route::get('/actors', function () {
    return view('home');
})->name('actors');

Route::get('/news', function () {
    return view('home');
})->name('news');