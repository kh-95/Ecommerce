<?php

Route::get('/home', function () {
    $users = Auth::guard('admin')->user();


    return view('admin.home');
})->name('home');

