<?php

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

Route::post('profile', function(Illuminate\Http\Request $request) {
    $request->file('photo')->store('profiles');

    return redirect('profile');
});