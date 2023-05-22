<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::group(
    [
        'controller' => CategoryController::class,
        'as' => 'category.',
    ],
    function () {
        Route::get('/category', 'index')->name('index');
        Route::get('/category/create', 'create')->name('create');
        Route::post('/category/store', 'store')->name('store');
        Route::get('/category/edit/{id}', 'edit')->name('edit');
        Route::put('/category/update/{id}', 'update')->name('update');
        Route::delete('/category/delete/{id}', 'destroy')->name('destroy');
        Route::get('/category/show/{id}', 'show')->name('show');
    });

Route::group(
    [
        'controller' => ProductController::class,
        'as' => 'product.',
    ],
    function () {
        Route::get('/product', 'index')->name('index');
        Route::get('/product/show/{id}', 'show')->name('show');
        Route::get('/product/create', 'create')->name('create');
        Route::post('/product/store', 'store')->name('store');
        Route::get('/product/edit/{id}', 'edit')->name('edit');
        Route::put('/product/update/{id}', 'update')->name('update');
        Route::delete('/product/delete/{id}', 'destroy')->name('destroy');
    });

