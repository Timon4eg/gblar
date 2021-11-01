<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::prefix('news')
->group(function() {
Route::get('/', [NewsController::class, 'index'])->name('news');
Route::get('/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('show');
});

Route::prefix('admin')
->group(function() {
    Route::get('/', [IndexController::class, 'index'])->name('admin-main');
    Route::get('/test1', [IndexController::class, 'test1'])->name('test1');
    Route::get('/test2', [IndexController::class, 'test2'])->name('test2');
});