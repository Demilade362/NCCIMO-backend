<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes([
    'register' => false
]);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(AdminMiddleware::class);
    Route::resource('/user', UserController::class)->middleware(AdminMiddleware::class);
    Route::post('search', [UserController::class, 'search'])->name('user.search')->middleware(AdminMiddleware::class);
    Route::get('/analytics', [UserController::class, 'showAnalytics'])->name('user.analytics')->middleware(AdminMiddleware::class);
});
