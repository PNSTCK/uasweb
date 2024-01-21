<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\KepangkatanController;
use App\Http\Controllers\KinerjaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');

    Route::resource('/kinerja', KinerjaController::class)->middleware('auth');
    Route::resource('/kepangkatan', KepangkatanController::class)->middleware('auth');
    Route::resource('/galeri', GaleryController::class)->middleware('auth');
    Route::resource('/pegawai', PegawaiController::class)->middleware('auth');
});




Route::resource('/halaman', HalamanController::class);
// Route::get('profil', [ProfileController::class, 'index'])->name('profil');
// Route::get('halamanDataGuru', [GuruController::class, 'show'])->name('halamanDataGuru');
Route::get('halamanGallery', [GaleryController::class, 'show'])->name('halamanGallery');

Route::get('/kontak', function () {
    return view('halamanKontak');
})->name('kontak');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman-index');

Route::get('/', function () {
    return view('welcome');
});
