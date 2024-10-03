<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Auth::routes([
    'register' => true
]);


Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/user', UserController::class);
    Route::post('search', [UserController::class, 'search'])->name('user.search');;
    Route::get('/analytics', [UserController::class, 'showAnalytics'])->name('user.analytics');
    Route::resource('announcement', AnnouncementController::class)->only('index', 'create', 'destroy');
});
