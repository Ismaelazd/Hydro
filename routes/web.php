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

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

// Search User
Route::get('/searchUser', 'UserController@search')->name('searchUser')->middleware('admin');


// Admin

Route::get('/admin', 'WelcomeController@admin')->name('Admin')->middleware('admin');

// Ressources Users

Route::resource('users','UserController')->middleware('admin');

// Ressource MYPROFIL

Route::resource('MyProfil','MyProfilController')->middleware('admin');

// Ressources About

Route::resource('about','AboutController')->middleware('admin');

// Ressources Skill

Route::resource('skill','SkillController')->middleware('admin');

// Ressources Blog

Route::resource('blog','BlogController')->middleware('admin');

// Ressources Work

Route::resource('work','WorkController')->middleware('admin');

// Ressources Color

Route::resource('color','ColorController')->middleware('admin');


// Mail 

Route::post('/Envoimail', 'ContactController@store')->name('EnvoiMail')->middleware('admin');