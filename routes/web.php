<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuTamucontroller;

// Route::get('/well', function () {
//     return view('welcome');
// });

// Route::get('/welltosign', function () {
//     return view('welcomeToSignin');
// });

// Route::get('/signin', function () {
//     return view('signin');
// });

// Route::get('/', function () {
//     return view('index');
// });

route::get('/wellcome', [BukuTamucontroller::class, 'welcomeToSignin']);
route::get('/signin', [BukuTamucontroller::class, 'signin']);
route::get('/selesai', [BukuTamucontroller::class, 'selesai']);
route::get('tem/master', [BukuTamucontroller::class, 'master']);
route::get('/index', [BukuTamucontroller::class, 'index']);

