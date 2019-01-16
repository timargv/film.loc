<?php


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/film/{film}', 'HomeController@film')->name('film.show');
Route::get('/genre/{genre}', 'HomeController@genre')->name('genre.show');
Route::get('/person/{person}', 'HomeController@person')->name('person.show');


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['namespace' => 'Film'], function () {
        Route::resource('persons', 'PersonsController');
        Route::resource('films', 	'FilmsController');
        Route::resource('genres', 'GenresController');
        Route::resource('years', 'YearsController');
        Route::resource('careers', 'CareersController');
    });

});