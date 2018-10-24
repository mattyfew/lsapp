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
/*

Route::get('/users/{id}', function($id) {
    return "This is user $id";
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

// because we use ::resource, this will create all the CRUD routes
// index, store, create, show, update, destroy, edit
// can show route list with `php artisan route:list`
Route::resource('posts', 'PostsController');
