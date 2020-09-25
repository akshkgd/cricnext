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

Route::get('/', 'HomeController@welcome');

Route::get('/about', 'HomeController@about' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('player', 'PlayerController');
Route::resource('match', 'MatchController');
Route::resource('team', 'TeamController');

Route::get('/teams', 'HomeController@teams');
Route::get('/team-details/{id}', 'HomeController@team_details');

Route::get('/players', 'HomeController@player');
Route::get('/player-details/{id}', 'HomeController@player_details');
