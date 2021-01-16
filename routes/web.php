<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

Route::get('/', function() {
    return "Respon ini diterima dari path / dengan metode GET";
});

Route::get('/books/add', 'BookController@create');

Route::get('/books', 'BookController@index');

Route::post('/books', 'BookController@store');

Route::get('/books/{id}', 'BookController@show');

Route::put('/books/{id}', 'BookController@update');

Route::delete('/books/{id}', 'BookController@destroy');

Route::get('/books/edit/{id}', 'BookController@edit');