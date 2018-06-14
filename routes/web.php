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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {

    Route::get('not-found', 'HomeController@notFound');

    Route::get('/', [
        'as'   => 'home',
        'uses' => 'HomeController@index'
    ]);
    Route::get('my-tasks', [
        'as'   => 'tasks',
        'uses' => 'HomeController@tasks'
    ]);
    Route::get('my-tasks/{id}', [
        'as'   => 'task',
        'uses' => 'HomeController@task'
    ]);
    Route::post('my-tasks/{id}', [
        'as'   => 'task.update',
        'uses' => 'HomeController@taskSave'
    ]);
    Route::get('calendar-tasks', [
        'as'   => 'home.calendar.tasks',
        'uses' => 'HomeController@calendarTasks'
    ]);
		Route::get('403', function () {
		return View::make('errors.403');
	});

	Route::get('404', function () {
		return View::make('errors.404');
	});


    Route::resource('clients', 'ClientController',
        ['only' => ['index', 'show']]);

    Route::get('clients/login/{id}', [
        'as'   => 'clients.login',
        'uses' => 'ClientController@login'
    ]);
    Route::resource('tasks', 'TaskController');
    Route::get('tasks/search/client', [
        'as'   => 'tasks.find.client',
        'uses' => 'TaskController@findClient'
    ]);
    Route::get('tasks/note/{id}', [
        'as'   => 'tasks.note',
        'uses' => 'TaskController@note'
    ]);
    Route::post('tasks/note/{id}', [
        'as'   => 'tasks.note.save',
        'uses' => 'TaskController@noteSave'
    ]);
	
	Route::get('upload', [
		'as' => 'upload', 
		'uses' => 'ImageController@getUpload'
	]);
	Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
	Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
	Route::get('server-images', ['as' => 'server-images', 'uses' => 'ImageController@getServerImages']);
	
    Route::resource('users', 'UserController');
	Route::resource('permissions', 'PermissionController', ['except' => 'destroy']);
	Route::resource('roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('categories', 'CategoryController');

});
