<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ShowcaseController@index')->name('/');
Route::get('/a-propos', 'ShowcaseController@about')->name('a-propos');
Route::get('/contact', 'ShowcaseController@contact')->name('contact');
Route::get('/services', 'ShowcaseController@services')->name('services');
