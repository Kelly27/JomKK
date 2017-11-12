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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{locale}/index', function ($locale) {
    App::setLocale($locale);
    return view('home.index', ['locale' => $locale]);
})->name('index');

// Route::get('index', function () {
//     return view('home.index');
// })->name('index');

Route::get('/', function(){
    return redirect()->route('index', ['en']);
});

Route::get('/food/{locale}', function () {
    return view('blog.food_index');
});

Route::get('/travel', function () {
    return view('blog.travel_index');
});