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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ProjectsController@index');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{slug}', 'ProjectsController@show');
Route::get('/side-projects', 'ProjectsController@index_side');
Route::get('/me', 'ProjectsController@index_me');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
