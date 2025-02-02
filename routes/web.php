<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuTamucontroller;

use App\Http\Controllers\GenreController;
use App\Models\Genre;
use App\Http\Controllers\castController;
use App\Models\cast;


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

Route::get('/', [BukuTamuController::class, 'welcome']);
route::get('/signin', [BukuTamucontroller::class, 'signin']);
route::get('/selesai', [BukuTamucontroller::class, 'selesai']);
route::get('/master', [BukuTamucontroller::class, 'master']);
route::get('/index', [BukuTamucontroller::class, 'index']);
route::get('/sign', [BukuTamucontroller::class, 'welcomeToSignin']);



Route::get('genre', [GenreController::class,'tampil'])->name('genre.tampil');
Route::get('genre/tambah', [GenreController::class,'tambah'])->name('genre.tambah');
Route::post('genre/submit', [GenreController::class,'submit'])->name('genre.submit');
Route::get('genre/edit/{id}', [GenreController::class, 'edit'])->name('genre.edit');
Route::post('genre/update/{id}', [GenreController::class, 'update'])->name('genre.update');
Route::post('genre/delete/{id}', [GenreController::class, 'delete'])->name('genre.delete');



Route::get('cast', [castController::class,'tampil'])->name('cast.tampil');
Route::get('cast/tambah', [castController::class,'tambah'])->name('cast.tambah');
Route::post('cast/submit', [castController::class,'submit'])->name('cast.submit');
Route::get('cast/edit/{id}', [castController::class, 'edit'])->name('cast.edit');
Route::post('cast/update/{id}', [castController::class, 'update'])->name('cast.update');
Route::post('cast/delete/{id}', [castController::class, 'delete'])->name('cast.delete');
