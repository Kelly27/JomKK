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

    Route::get('food', function($locale) {
        App::setLocale($locale);
        return view('blog.food_index', ['locale' => $locale]);
    })->name('food');

    Route::get('travel', function($locale) {
        return view('blog.travel_index', ['locale' => $locale]);
    })->name('travel');

});