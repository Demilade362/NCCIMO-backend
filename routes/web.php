<?php

use App\Mail\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return new Welcome();
});
