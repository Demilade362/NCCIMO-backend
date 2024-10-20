<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $announcements = Announcement::all();

    return view('welcome', compact('announcements'));
})->name('dashboard');

Route::get("/gallery", function () {
    return view('gallery');
})->name('gallery');


Route::get("/contact", function () {
    $announcements = Announcement::all();
    return view('contact', compact('announcements'));
})->name('contact');



Route::middleware('auth')->group(function () {
    Route::get('profile', function () {
        $announcements = Announcement::all();
        $user = User::findOrFail(auth()->id());
        return view('profile', compact('user', 'announcements'));
    })->name('profile');
    Route::get('/soon', function () {
        return view('soon');
    })->name('soon');
});

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
