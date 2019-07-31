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
Route::get('/job/search', 'HomeController@Seach_home')->name('search.home');


// Admin Route

Route::get('/admins/dashboard','AdminController@index')->name('index.admin');

Route::get('admin/job','AdminController@allJob')->name('job');
Route::get('/admins/job','AdminController@job')->name('job.add');
Route::post('/admins/job/post','AdminController@Postjob')->name('job.save');
Route::get('/admins/job/{id}','AdminController@Editjob')->name('job.edit');
Route::post('/admins/job/{id}','AdminController@Updatejob')->name('job.update');
Route::post('/admins/job/delete/{id}','AdminController@Deletejob')->name('job.delete');

Route::get('/admins/province','AdminController@getProvince')->name('province.index');
Route::post('/admins/province/save','AdminController@SaveProvince')->name('province.save');
Route::get('/admins/province/edit/{id}', 'AdminController@EditProvince')->name('province.edit');
Route::post('/admins/province/edit/{id}', 'AdminController@UpdateProvince')->name('province.update');
Route::post('/admins/province/delete/{id}', 'AdminController@DeleteProvince')->name('province.delete');

Route::get('/admins/district','AdminController@getDistrict')->name('district.get');
Route::post('/admins/district/save','AdminController@SaveDistrict')->name('district.save');

Route::get('/admins/freelancer','AdminController@getFreelancer')->name('freelancer.get');

Route::post('/admins/province','AdminController@Fetch')->name('province.fetch');

Route::get('admin/job/search','AdminController@search')->name('search');
// Route::delete('/admins/job/delete/{id}','AdminController@Deletejob')->name('job.delete');
// Auth::routes();

Route::get('/admin/login', 'LoginController@getlogin')->name('get.login');
Route::post('/admin/login', 'LoginController@postLogin')->name('login.post');
