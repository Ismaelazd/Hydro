<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'WelcomeController@index')->name('Welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Search User
Route::get('/searchUser', 'UserController@search')->name('searchUser');


// Admin

Route::get('/admin', 'WelcomeController@admin')->name('Admin');

// Ressources Users

Route::resource('users','UserController');

// Ressource MYPROFIL

Route::resource('MyProfil','MyProfilController');

// Ressources About

Route::resource('about','AboutController');

// Ressources Blog

Route::resource('blog','BlogController');

// Ressources Work

Route::resource('work','WorkController');

// Ressources Color

Route::resource('color','ColorController');


// Mail 

Route::get('/mail', 'MailController@index')->name('Mail');
Route::post('/Envoimail', 'ContactController@store')->name('EnvoiMail');