<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 管理者ページ（ミドルウェアを適用）
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
