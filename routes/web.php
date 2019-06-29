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

// Route home

Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/', 'HomeController@home')->name('home');
Route::get('/job/detail/{id}', 'HomeController@jobDetail')->name('job.detail');


// Admin Route

Route::get('/admins/dashboard','AdminController@index')->name('index.admin');

Route::get('/admins/job','AdminController@job')->name('job.add');
Route::post('/admins/job/post','AdminController@Postjob')->name('job.save');