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




Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/item', function () {
    return view('frontend.item');
});

Route::get('/tv-shows', function () {
    return view('frontend.tv-shows');
});


Route::get('/items/{any}', function () {
    return view('frontend.items-app');
})->where('any', '.*');

Route::get('/admin/{any}', function () {
    return view('index');
});


//Route::get('/{any}', function () {
//    return view('frontend-single-app');
//})->where('any', '.*');