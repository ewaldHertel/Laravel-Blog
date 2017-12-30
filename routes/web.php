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

Route::get('/', 'HomeController@index')->name('home');

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('register', 'Auth\LoginController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
  Route::get('/', 'AdminController@index');
  Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  //Route::resource('/posts', 'PostController');
});
