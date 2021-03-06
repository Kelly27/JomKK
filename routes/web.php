<?php

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

Route::get('/', function(){
    return redirect()->route('index', ['en']);
});

Route::prefix('{locale}')->group(function(){

    //homepage route
    Route::get('index', function($locale){
        App::setLocale($locale);
        return view('home.index', ['locale' => $locale]);
    })->name('index');

    Route::get('food', 'FoodPostController@index')->name('food');
    Route::get('food/{id}', 'FoodPostController@article');

    Route::get('travel', 'TravelPostController@index')->name('travel');
    Route::get('travel/{id}', 'TravelPostController@article');

    Route::get('directory', 'DirectoryController@index')->name('directory');

    Route::get('search', 'SearchController@index')->name('search');

    Route::get('about', 'AboutController@index')->name('about');

    Route::get('tnc', 'TncController@index')->name('tnc');
});