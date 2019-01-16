<?php


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/film/{film}', 'HomeController@film')->name('film.show');
Route::get('/genre/{genre}', 'HomeController@genre')->name('genre.show');
Route::get('/person/{person}', 'HomeController@person')->name('person.show');