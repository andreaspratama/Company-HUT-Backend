<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FullacaraController;
use App\Http\Controllers\DetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.frontend.home');
// });
Route::get('/', [BerandaController::class, 'index'])->name('home');
Route::get('/fullAcara', [FullacaraController::class, 'index'])->name('fullAcara');
Route::get('/details/{slug}/program', [DetailController::class, 'detail'])->name('detail');
Route::get('/galeriFoto/{id}', [BerandaController::class, 'foto'])->name('albumFoto');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('acara', AcaraController::class);
    Route::resource('program', ProgramController::class);
    Route::get('album/{id}/foto', [AlbumController::class, 'foto'])->name('album.foto');
    Route::resource('album', AlbumController::class);
    Route::resource('galeri', GaleriController::class);
});


// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('galeriFoto/{id}', [HomeController::class, 'foto'])->name('albumFoto');

// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('acara', AcaraController::class);
//     Route::get('album/{id}/foto', [AlbumController::class, 'foto'])->name('album.foto');
//     Route::resource('program', ProgramController::class);
//     Route::resource('album', AlbumController::class);
//     Route::resource('galeri', GaleriController::class);
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
