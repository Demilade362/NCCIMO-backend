<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Mail\MailAdmin;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::post('/contact-post', function(Request $request){

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);


    $mail = [
        "name" => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    Mail::to('admin@nccfimo.org.ng')->send(new MailAdmin($mail));
    return redirect()->route('contact')->with('msg', 'Message Successfully');
})->name('contact-post');

Route::post("/contact", function(){
    return redirect('contact', 200)->with('msg', 'Your message his been delivered to our Admins');
})->name('post-contact');



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
