<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', ['as' => 'index', 'uses' => 'MainController@index']);
Route::get('project/{id}', ['as' => 'project', 'uses' => 'MainController@project']);
Route::get('services', ['as' => 'services', 'uses' => 'MainController@services']);
Route::get('projects', ['as' => 'projects', 'uses' => 'MainController@projects']);
Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);
Route::post('inquire_store', ['as' => 'inquire_store', 'uses' => 'MainController@inquire_store']);

Route::get('lang/{lang}', 'MainController@lang')->name('lang');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
