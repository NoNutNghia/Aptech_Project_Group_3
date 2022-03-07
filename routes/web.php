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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'SectionController@index');
Route::get('/vertex/detail/{id}', 'SectionController@detailSection')->name('section.detail');
Route::get('/vertex/tag/{tag}', 'SectionController@getSection')->name('section.tag');

// Route admin
Route::resource('admin/articles', 'VirusArticleController')->middleware(['auth', 'can:isAdmin']);
Route::get('admin/search/articles', 'VirusArticleController@search')->middleware(['auth', 'can:isAdmin'])->name('articles.search');
Route::resource('admin/users', 'UserController')->middleware(['auth', 'can:isAdmin']);
Route::get('admin/search/users', 'UserController@search')->middleware(['auth', 'can:isAdmin'])->name('users.search');
Route::get('admin/feedback', 'FeedbackController@index')->middleware(['auth', 'can:isAdmin'])->name('feedback.index');
Route::get('admin/feedback/search', 'FeedbackController@search')->middleware(['auth', 'can:isAdmin'])->name('feedback.search');


// Route user
Route::get('/vertex', 'SectionController@index')->name('section.index');
Route::get('/vertex/feedback', 'FeedbackController@create')->middleware(['auth', 'can:isUser', 'verified'])->name('feedback.create');
Route::post('/vertex/feedback', 'FeedbackController@store')->middleware(['auth', 'can:isUser'])->name('feedback.store');
Route::get('/vertex/search', 'SectionController@searchBar')->name('section.search');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
