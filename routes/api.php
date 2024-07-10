<?php

use App\Http\Controllers\AuthController;
use App\Http\Resources\Announcement as ResourcesAnnouncement;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::middleware('auth:sanctum')->group(function(){
    Route::get('announcement', function(){
        return ResourcesAnnouncement::collection(Announcement::all());
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

