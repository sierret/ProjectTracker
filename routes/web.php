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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::post('/message', 'messageController@index');
Route::post('/Update', 'ProfileController@update')->name('update.profile');
Route::get('/profile', 'ProfileController@index');
Route::post('/addProject', 'addProject@store');
Route::get('/addProject', 'addProject@show');
Route::prefix('admin')->group(function(){

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/Registeradmin' ,'AdminController@createadmin')->name('admin.register');
Route::post('/adminRegistration' ,'AdminController@registeradmin')->name('admin.register.submit');
Route::get('/veiwAdmins' ,'AdminController@getadmins')->name('admin.view');
Route::get('/approvestud' ,'AdminController@approv')->name('admin.view.approve');
Route::post('/approved' ,'AdminController@updatestatus')->name('admin.view.approve.status');
Route::get('/Allprojects' ,'AdminController@allprojects')->name('admin.projects');




});

