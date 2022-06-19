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

// Route::get('/', function () {
//     return view('/news/index');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   

    Route::group(['prefix' => 'news'], function() {
            Route::get('/', 'NewsController@index')->name('news.index');
            Route::get('/create', 'NewsController@create')->name('news.create');
            Route::post('/create', 'NewsController@store')->name('news.store');
            Route::get('/news}/show', 'NewsController@show')->name('news.show');
            Route::get('/news}/edit', 'NewsController@edit')->name('news.edit');
            Route::patch('/{news}/update', 'NewsController@update')->name('news.update');
            Route::delete('/news}/delete', 'NewsController@delete')->name('news.delete');
    });
});
