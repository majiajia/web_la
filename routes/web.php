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

Route::get('/','IndexController@index')->name('index');
Route::get('/case', 'CaseController@index')->name('case');
Route::get('/case/{id?}', 'CaseController@item')->name('case_item');
Route::get('/expert', 'ExpertController@index')->name('expert');
Route::get('/expert/{id?}', 'ExpertController@item')->name('expert_item');;
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/about', 'AboutController@index')->name('about');