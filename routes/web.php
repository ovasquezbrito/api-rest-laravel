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



//  // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// if ($options['register'] ?? true) {
//     Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// 	Route::post('register', 'Auth\RegisterController@register');
// }

// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// $this->get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// $this->post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// $this->get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// $this->get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// $this->post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


Route::get('/home/my-tokens', 'HomeController@getTokens')->name('tokens');
Route::get('/home/my-clients', 'HomeController@getClients')->name('personal-clients');
Route::get('/home/authorized-clients', 'HomeController@getAutorizedClients')->name('authorized-clients');

Route::get('/', function () {
    return view('welcome');
});