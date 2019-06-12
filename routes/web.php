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

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@home')->name('home');
    Route::get('/home', 'SiteController@home')->name('home');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AuthController@showlogin')->name('admin.login');
    Route::post('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout')->name('admin.logout');
    Route::get('/dashboard', 'ExtrasController@index')->name('admin.dashboard');

    Route::any('/config', 'ExtrasController@config')->name('admin.config');

    Route::get('/plans', 'SubscriptionPlansController@list')->name('admin.plans');
    Route::any('/plans/add', 'SubscriptionPlansController@add')->name('admin.add_plan');
    Route::any('/plans/edit/{id}', 'SubscriptionPlansController@edit')->name('admin.edit_plan');;
    Route::get('/plans/delete/{id}', 'SubscriptionPlansController@delete')->name('admin.delete_plan');;

});
