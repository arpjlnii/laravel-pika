<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    BukuTamucontroller,
    GenreController,
    CastController,
};

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


// route genres
route::get('/genre/create', [GenreController::class, 'create'])-> name('genre.create');
route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.delete');

//route casts
route::get('/cast', [CastController::class, 'index'])->name('cast.index');
route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
route::delete('/cast{id}', [CastController::class, 'destroy'])->name('cast.delete');