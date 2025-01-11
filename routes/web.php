<?php

use Illuminate\Support\Facades\Route;

Route::get('/well', function () {
    return view('welcome');
});

Route::get('/welltosign', function () {
    return view('welcomeToSignin');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/selesai', function () {
    return view('selesai');
});