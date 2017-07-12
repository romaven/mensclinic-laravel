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

Route::get('/', 'SiteController@index')->name('site.main');
Route::get('doctors', 'SiteController@doctors')->name('site.doctors');
Route::get('doctor/{url}', 'SiteController@doctor')->name('site.doctor');
Route::get('contact', 'SiteController@contact')->name('site.contact');
Route::get('about', 'SiteController@about')->name('site.about');
Route::post('uploader/images', 'UploaderController@get')->name('uploader.image.get');
Route::get('news/{url}', 'SiteController@newsRead')->name('news.read');
Route::get('news', 'SiteController@news')->name('news');
Route::get('article/{url}', 'SiteController@articleRead')->name('article.read');
Route::get('articles', 'SiteController@articles')->name('articles');
Route::get('video/{url}', 'SiteController@videoRead')->name('video.read');
Route::get('videos', 'SiteController@videos')->name('videos');
Route::get('department/{url}', 'SiteController@department')->name('department');

Auth::routes();

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    Route::get('/', 'DashboardController@dashboard');
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('doctor', 'DoctorController');
    Route::resource('department', 'DepartmentController');
    Route::resource('news', 'NewsController');
    Route::resource('articles', 'ArticlesController');
});