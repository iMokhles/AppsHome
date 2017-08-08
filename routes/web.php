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
 * Front-End Routes
 */
Route::get('/', 'FrontEnd\\FrontEndController@home')->name('home_page');
Route::get('/features', 'FrontEnd\\FrontEndController@features')->name('features_page');
Route::get('/pricing', 'FrontEnd\\FrontEndController@pricing')->name('pricing_page');
Route::get('/contact', 'FrontEnd\\FrontEndController@contact')->name('contact_page');
Route::get('/about', 'FrontEnd\\FrontEndController@about')->name('about_page');

/*
 * Errors Routes
 */
Route::get('/error/{error}', 'ErrorsController@index')->name('error_page');

/*
 * Subscription Routes
 */
Route::get('/subscription/new', 'Subscription\\SubscriptionController@new')->name('new_subscription_page');
Route::get('/subscription/info', 'Subscription\\SubscriptionController@info')->name('info_subscription_page');
Route::get('/subscription/renew', 'Subscription\\SubscriptionController@renew')->name('renew_subscription_page');

/*
 * Auth Routes [GET]
 */
Route::get('/auth/register', 'Auth\\AuthController@register_view')->name('register_user_page');
Route::get('/auth/login', 'Auth\\AuthController@login_view')->name('login_user_page');
Route::get('/auth/forgot-password', 'Auth\\AuthController@forgotPassword_view')->name('forgot_password_user_page');
Route::get('/auth/new-password/{token}', 'Auth\\AuthController@newPassword_view')->name('new_password_user_page');
Route::get('/auth/activate/{token}', 'Auth\\AuthController@activate_view')->name('activate_user_page');
//Route::get('/auth/social/{provider}', 'Auth\\AuthController@activate')->name('social_auth_user_page');
//Route::get('/auth/social/{provider}/callback', 'Auth\\AuthController@activate')->name('social_auth_callback_user_page');

/*
 * Auth Routes [POST]
 */
Route::post('/auth/register', 'Auth\\AuthController@post_register')->name('post_register_user_page');
Route::post('/auth/login', 'Auth\\AuthController@post_login')->name('post_login_user_page');
Route::post('/auth/forgot-password', 'Auth\\AuthController@post_forgotPassword')->name('post_forgot_password_user_page');
Route::post('/auth/new-password/{token}', 'Auth\\AuthController@post_newPassword')->name('post_new_password_user_page');
