<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Home
 */
Route::get('/', [
    'uses' => '\Code\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

/**
 * Auth
 */

Route::get('/signup', [
    'uses' => '\Code\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest']

]);

Route::post('/signup', [
    'uses' => '\Code\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest']

]);

Route::get('/login', [
    'uses' => '\Code\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],

]);

Route::post('/login', [
    'uses' => '\Code\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],

]);

Route::get('/logout', [
    'uses' => '\Code\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout'
]);

/**
 * User profile
 */

Route::get('/profile/edit', [
    'uses' => '\Code\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
    'uses' => '\Code\Http\Controllers\ProfileController@postEdit',
    'middleware' => ['auth'],
]);

/**
 * Contact
 */

Route::get('/contact', [
    'uses' => '\Code\Http\Controllers\ContactController@show',
    'as' => 'contacts'
]);