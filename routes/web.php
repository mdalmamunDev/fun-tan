<?php

use App\Http\Controllers\AuthController;
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



Route::middleware('guest')->group(function () {
    Route::get('/admin', function () {
        return view('login');
    })->name('login');

    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::post('/admin', [AuthController::class, 'doLogin']);

    Route::get('/admin/register', function () {
        return view('register');
    });
    Route::post('/admin/register', [AuthController::class, 'doRegister']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/item', function () {
    return view('frontend.item');
});

// items app
Route::get('/items', function () {
    return view('frontend.items-app');
});



Route::middleware(['auth'])->get('/admin/{any}', function () {
    return view('index');
})->where('any', '.*');


//Route::get('/{any}', function () {
//    return view('frontend-single-app');
//})->where('any', '.*');