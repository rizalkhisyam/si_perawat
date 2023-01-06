<?php

use App\Http\Controllers\PerawatController;
use App\Http\Controllers\DashboardController;
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
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('perawat', [PerawatController::class, 'index'])->name('perawat');
Route::delete('perawat/{id}', [PerawatController::class, 'destroy'])->name('delete-perawat');
Route::post('perawat', [PerawatController::class, 'store'])->name('create-perawat');

Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan');
Route::get('/pengukuran', [PengukuranController::class, 'index'])->name('pengukuran');
Route::post('/simpan-data-1', [PengukuranController::class, 'create'])->name('simpan-1');
Route::post('/pengukuran-1', [PengukuranController::class, 'pengukuran1'])->name('pengukuran-1');
Route::post('/pengukuran-2', [PengukuranController::class, 'pengukuran2'])->name('pengukuran-2');
Route::post('/pengukuran-3', [PengukuranController::class, 'pengukuran3'])->name('pengukuran-3');
Route::post('/pengukuran-4', [PengukuranController::class, 'pengukuran4'])->name('pengukuran-4');