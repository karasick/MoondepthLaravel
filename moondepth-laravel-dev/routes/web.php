<?php
use App\Mail\UserResponseMail;

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

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::get('/email', function () {
    return new UserResponseMail();
});

Route::get('/board/{board}', 'BoardController@show')->name('board.show');
Route::post('/board/{board}', 'BoardController@store')->name('board.store');

Route::get('/board/{board}/thread/{thread}', 'ThreadController@show')->name('thread.show');
Route::post('/board/{board}/thread/{thread}', 'ThreadController@store')->name('thread.store');
