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

//Link-uri la care se ajunge doar daca esti admin
Route::group(['middleware' => ['isLogedInAdmin']], function () {

    Route::get('/vms-admin', 'MainAdminController@home');
});

Route::get('/', 'MainController@home');

Route::match(['get', 'post'], '/vms-admin/login', 'MainAdminController@login');

Route::get('/despre-noi', 'MainController@despreNoi');
Route::get('/tarife', 'MainController@tarife');
Route::get('/contact', 'MainController@contact');
