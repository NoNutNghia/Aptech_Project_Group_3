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

Route::get('/', 'SectionController@index');
Route::get('/vertex/{id}', 'SectionController@detailSection')->name('section.detail');

// Route admin
Route::resource('admin/articles', 'VirusArticleController')->middleware(['auth', 'can:isAdmin']);
Route::resource('admin/users', 'UserController')->middleware(['auth', 'can:isAdmin']);
Route::get('admin/feedback', 'FeedbackController@index')->middleware(['auth', 'can:isAdmin'])->name('feedback.index');


// Route user
Route::get('/vertex', 'SectionController@index')->name('section.index');
Route::get('/vertex/feedback', 'FeedbackController@create')->middleware(['auth', 'can:isUser'])->name('feedback.create');
Route::post('/vertex/feedback', 'FeedbackController@store')->middleware(['auth', 'can:isUser'])->name('feedback.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
