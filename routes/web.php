<?php

use App\Http\Controllers\PerawatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengukuranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

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
    return view('login', [
        'title' => 'Wellcome'
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login-user');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('perawat', [PerawatController::class, 'index'])->name('perawat')->middleware('auth');
Route::delete('perawat/{id}', [PerawatController::class, 'destroy'])->name('delete-perawat')->middleware('auth');
Route::post('perawat', [PerawatController::class, 'store'])->name('create-perawat')->middleware('auth');

Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan')->middleware('auth');
Route::post('/ruangan', [RuanganController::class, 'store'])->name('simpan-data-ruangan')->middleware(('auth'));

Route::get('/pengukuran', [PengukuranController::class, 'index'])->name('pengukuran')->middleware('auth');
// Route::get('/pengukuran-1', [PengukuranController::class, 'instrumen1'])->name('pengukuran-1')->middleware('auth');

Route::post('/pengukuran-1', [PengukuranController::class, 'pengukuran1'])->name('pengukuran-1')->middleware('auth');
Route::post('/pengukuran-2', [PengukuranController::class, 'pengukuran2'])->name('pengukuran-2')->middleware('auth');
Route::post('/pengukuran-3', [PengukuranController::class, 'pengukuran3'])->name('pengukuran-3')->middleware('auth');
Route::post('/pengukuran-4', [PengukuranController::class, 'pengukuran4'])->name('pengukuran-4')->middleware('auth');
Route::post('/pengukuran-5', [PengukuranController::class, 'pengukuran5'])->name('pengukuran-5')->middleware('auth');

//new route
Route::get('/pengukuran-klien', [PengukuranController::class, 'klien'])->name('pengukuran-klien')->middleware('auth');
Route::post('/pengukuran-instrumen-klien', [PengukuranController::class, 'instrumen_klien'])->name('pengukuran-instrumen-klien')->middleware('auth');


Route::get('/hasil-pengukuran', [HasilController::class, 'index'])->name('hasil');