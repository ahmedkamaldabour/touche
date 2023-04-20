<?php

use App\Http\Controllers\EndUser\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    [
        'controller' => HomeController::class
    ],
    function () {
        Route::get('/', 'index')->name('home');
        Route::get('/menu', 'menu')->name('menu');
        Route::get('/chefs', 'chefs')->name('chefs');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/contact', 'contact')->name('contact');
    });
