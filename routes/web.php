<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [
        HomeController::class,
        'adminHome'
    ])->name('admin.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:dosen'])->group(function () {
    Route::get('/dosen/home', [
        HomeController::class,
        'dosenHome'
    ])->name('dosen.home');
});

Route::middleware(['auth', 'user-access:mahasiswa'])->group(function () {
    Route::get('/mahasiswa/home', [
        HomeController::class,
        'mahasiswaHome'
    ])->name('mahasiswa.home');
});

Route::middleware(['auth', 'user-access:tendik'])->group(function () {
    Route::get('/tendik/home', [
        HomeController::class,
        'tendikHome'
    ])->name('tendik.home');
});

Route::middleware(['auth', 'user-access:admin akademik'])->group(function () {
    Route::get('/akademik/home', [
        HomeController::class,
        'akademikHome'
    ])->name('akademik.home');
});

Route::middleware(['auth', 'user-access:admin keuangan'])->group(function () {
    Route::get('/keuangan/home', [
        HomeController::class,
        'keuanganHome'
    ])->name('keuangan.home');
});

Route::middleware(['auth', 'user-access:direktur'])->group(function () {
    Route::get('/direktur/home', [
        HomeController::class,
        'direkturHome'
    ])->name('direktur.home');
});

Route::middleware(['auth', 'user-access:wakil direktur 1'])->group(function () {
    Route::get('/wd1/home', [
        HomeController::class,
        'wd1Home'
    ])->name('wd1.home');
});

Route::middleware(['auth', 'user-access:wakil direktur 2'])->group(function () {
    Route::get('/wd2/home', [
        HomeController::class,
        'wd2Home'
    ])->name('wd2.home');
});

Route::middleware(['auth', 'user-access:wakil direktur 3'])->group(function () {
    Route::get('/wd3/home', [
        HomeController::class,
        'wd3Home'
    ])->name('wd3.home');
});

Route::middleware(['auth', 'user-access:admin lppm'])->group(function () {
    Route::get('/lppm/home', [
        HomeController::class,
        'lppmHome'
    ])->name('lppm.home');
});

Route::middleware(['auth', 'user-access:admin sdm'])->group(function () {
    Route::get('/sdm/home', [
        HomeController::class,
        'sdmHome'
    ])->name('sdm.home');
});