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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin','as'=>'admin.'],function(){
    Route::get('admin/home','AdminController@index');
    Route::post('admin/login','LoginController@showLoginForm');
    Route::post('admin/login','LoginController@login');
    Route::get('admin/password/confirm','ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('admin/password/confirm','ConfirmPasswordController@confirm');
    Route::post('admin/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('admin/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('admin/password/reset','ResetPasswordController@reset')->name('password.update');
    Route::get('admin/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
});
