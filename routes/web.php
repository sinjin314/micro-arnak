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


Route::get('/admin/', [
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

Route::resources([
        'admin' => 'AdminController',
        'game' => 'GameController'
]);


Route::get('/admin/game/create', 'AdminController@createGame' )->name('admin.game.create');
Route::get('/admin/game/list', 'AdminController@getGames')->name('admin.game.list');
Route::get('admin/game/edit', 'AdminController@editGame')->name('admin.game.edit');

Route::get('/panier', 'CartController@index')->name('cart.index');
Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');
Route::get('/merci', function () {
    return view('checkout.thankyou');
});

