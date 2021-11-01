<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->where('id', '[0-9]+')->name('show');

Route::get('/admin', [IndexController::class, 'index'])->name('admin-main');
Route::get('/admin/test1', [IndexController::class, 'test1'])->name('test1');
Route::get('/admin/test2', [IndexController::class, 'test2'])->name('test2');