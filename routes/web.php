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


Route::get('/admin/home', [
    HomeController::class,
    'adminHome'
    ])->name('admin.home')
      ->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'GameController@index')->name('games.index');
Route::get('games', 'GameController@show')->name('games.show');

Route::resources([
        'admin' => 'AdminController',
        'game' => 'GameController'
]);


Route::get('/admin/game/create', 'AdminController@createGame' )->name('admin.game.create');
Route::get('/admin/game/list', 'AdminController@getGames')->name('admin.game.list');
