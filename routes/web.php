<?php

use App\Http\Controllers\HomeController;
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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/', 'GameController@index')->name('games.index');
Route::get('games', 'GameController@show')->name('games.show');
Route::get('game', 'GameController@create')->name('games.create');
Route::post('game', 'GameController@store')->name('games.store');
