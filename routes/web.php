<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//view Home
Route::get('/', function () {
    return view('welcome');
});

//view about (only test)
Route::get('about', function () {
    return "Page about under construction";
});

//view profile
Route::view('profile', 'profile');

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'upload']);